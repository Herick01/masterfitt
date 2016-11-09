<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treinos extends CI_Controller {

	/*
	método que é chamado caso não seja especificado
	um metodo. redireciona para o metodo 'paraHoje'
	*/
	public function index()
	{
		$this->login_model->logged();
		$this->paraHoje();
	}

	/*
	método que mostra todos os treinos cadastrados para aquele dia da semana,
	caso o usuário logado seja aluno só irá aparecer seu próprio treino
	*/
	public function paraHoje(){
		$this->login_model->logged();
		if($this->session->userdata('user_nivel')!=3){
			$treinos = $this->treinos_model->getByDate(date('w'));
			if($treinos){
				foreach ($treinos as $treino) {
					$alunos[] = $this->alunos_model->getById($treino['idAluno']);
					$exercicios[] = $this->exercicios_model->getById($treino['idExercicio']);
				}

				for ($x=0; $x < sizeof($alunos); $x++) {
					$aluno = $alunos[$x];
					if($x >= 1){
						if(!in_array($aluno, $alu)){
							$alu[] = $aluno;
						}	
					}else{
						$alu[] = $aluno;
					}
				}

				for ($x=0; $x < sizeof($alu); $x++) {
					$dado[$x] = $alu[$x];
					foreach ($treinos as $treino) {
						if($treino['idAluno'] == $alu[$x]['id']){
							$dado[$x]['treino'][] = $treino;
						}			
					}	
				}

				for ($x=0; $x < sizeof($exercicios); $x++) {
					$exercicio = $exercicios[$x];
					if($x >= 1){
						if(!in_array($exercicio, $exe)){
							$exe[] = $exercicio;
						}	
					}else{
						$exe[] = $exercicio;
					}	
				}

				$dados = array('dados' => $dado, 'exercicios' => $exe);
				$this->template->load('template', 'treinos/diario.php', $dados);
			}else{
				$dados = array('dados' => null);
				$this->template->load('template', 'treinos/diario.php', $dados);
			}
		}else{
			$id = $this->session->userdata('id_user');
			$aluno = $this->alunos_model->getById($id);
			$exercicios = $this->exercicios_model->getall();
			$treino = $this->treinos_model->getByDateAndIdAluno($id, date('w'));
			$dado[0]  = $aluno;
			$dado[0]['treino'] = $treino;
			$dados = array('dados' => $dado, 'exercicios' => $exercicios);
			$this->template->load('template', 'treinos/diario.php', $dados);
		}
	}

	/*
	método para cadastrar novos treinos para cada aluno
	*/
	public function cadastrar(){
		$this->login_model->logged();
		$exercicios = $this->exercicios_model->getAll();
		foreach ($exercicios as $exercicio) {
			$exe[] = array(
				'id' => $exercicio['id'],
				'nome' => $exercicio['nome']);
		}
		$dados = array('aluno' => $this->uri->segment(3),
			'exercicios' => $exe);
		$this->template->load('template', 'treinos/cadastro.php', $dados);
	}

	/*
	metodo que valida o formulário de novos treinos e manda para
	o model para salvar no banco de dados
	*/
	public function novo(){
		$this->login_model->logged();
		$treino['idAluno'] = $this->uri->segment(3);
		$treino['idExercicio'] = $this->input->post('idExercicio');
		$treino['series'] = $this->input->post('series');
		$treino['diaDaSemana'] = $this->uri->segment(4);
		$treino['repeticoes'] = $this->input->post('repeticoes');
		$treino['quantidade'] = $this->input->post('quantidade');
		$this->treinos_model->add($treino);
		redirect('treinos/cadastrar/'.$this->uri->segment(3));
	}

	/*
	metodo que lista todos os alunos com seus determinados treinos.
	*/
	public function listar()
	{
		$this->login_model->logged();
		if($this->session->userdata('user_nivel')==3){
			$alunos = $this->alunos_model->getById($this->session->userdata('id_user'));
			$id = $this->session->userdata('id_user');
			$diaDaSemana = $this->treinos_model->getWeekDay($id);
			$exercicios = $this->exercicios_model->getall();
			foreach ($diaDaSemana as $dia) {
				$treino[] = $this->treinos_model->getByDateAndIdAluno($id, $dia['diaDaSemana']);
			}
			$dado[0]['aluno']  = $alunos;
			$dado[0]['dia'] = $diaDaSemana;
			$dado[0]['treino'] = $treino;
			$dados = array('dados' => $dado, 'exercicios' => $exercicios);
			$this->template->load('template', 'treinos/lista.php', $dados);
		}else{
			$alunos = $this->alunos_model->getForTreinos();
			
			for($x=0; $x<sizeof($alunos); $x++) {
				if($this->treinos_model->getWeekDay($alunos[$x]['id'])){
					$diaDaSemana[$x] = $this->treinos_model->getWeekDay($alunos[$x]['id']);
				}else{
					$diaDaSemana[$x] = null;
				}
			}
			
			
			for($x=0; $x< sizeof($alunos); $x++) {
				$aluno = $alunos[$x];
				if($diaDaSemana[$x]){
					foreach ($diaDaSemana[$x] as $dia) {
						foreach ($dia as $data){
							$treinos[$x][] = $this->treinos_model->getByDateAndIdAluno($aluno['id'], $data);			
						}
					}
				}else{
					$treinos[$x][] = null;
				}
			}


			$exercicio = $this->exercicios_model->getAll();

			for ($x=0; $x<sizeof($alunos);$x++){
				$dados[] = array (
					'aluno' => $alunos[$x],
					'dia' => $diaDaSemana[$x],
					'treino' => $treinos[$x]
				);
			}
			
			$dados = array ('dados' => $dados, 'exercicios' => $exercicio);
			$this->template->load('template', 'treinos/lista.php', $dados);
		}
	}

	/*
	metodo para excluir um treino pelo id
	*/
	public function excluir(){
		$this->login_model->logged();
		$id = $this->uri->segment(3);
		$this->treinos_model->remove($id);
		$this->listar();
	}
}
?>