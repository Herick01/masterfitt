<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treinos extends CI_Controller {

	public function index()
	{
		$this->paraHoje();
	}

	public function paraHoje(){
		$this->load->model('treinos_model');
		$this->load->model('exercicios_model');
		$this->load->model('alunos_model');
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
	}

	public function cadastrar(){
		$this->load->model('exercicios_model');
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

	public function novo(){
		$treino['idAluno'] = $this->uri->segment(3);
		$treino['idExercicio'] = $this->input->post('idExercicio');
		$treino['series'] = $this->input->post('series');
		$treino['diaDaSemana'] = $this->uri->segment(4);
		$treino['repeticoes'] = $this->input->post('repeticoes');
		$treino['quantidade'] = $this->input->post('quantidade');
		
		$this->load->model('treinos_model');
		$this->treinos_model->add($treino);
		redirect('treinos/cadastrar/'.$this->uri->segment(3));
	}

	public function listar()
	{
		$this->load->model('treinos_model');
		$this->load->model('exercicios_model');
		$this->load->model('alunos_model');
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


		for($x=0;$x<1;$x++){

			$exercicio[] = $this->exercicios_model->getAll();
		}

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

	public function excluir(){
		$id = $this->uri->segment(3);
		$this->load->model('treinos_model');
		$this->treinos_model->remove($id);
		$this->listar();
	}
}
?>