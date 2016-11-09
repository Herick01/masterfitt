<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicios extends CI_Controller {

	public function index()
	{
		$this->login_model->logged();
		$this->listar();
	}

	private function listar(){
		$this->login_model->logged();
		$exercicios = $this->exercicios_model->getToList();
		for($x=0; $x< sizeof($exercicios['exercicios']); $x++) {
			$ex = $exercicios['exercicios'][$x];
			foreach ($exercicios['grupoMuscular'] as $grupo) {
				if($ex['idGrupoMuscular'] == $grupo['id']){
					$exercicio[$x] = $ex;
					$exercicio[$x]['grupo'] = $grupo['nome'];
				}
			}
		}
		return $exercicio;	
	}

	
	public function excluir(){
		$this->login_model->logged();
		$id = $this->uri->segment(3);
		$this->exercicios_model->remove($id);
		$this->cadastrar();
	}

	public function cadastrar(){
		$this->login_model->logged();
		$exercicio = $this->listar();
		$grupos = $this->exercicios_model->getAllGroups();
		$dados = array('exercicio' =>$exercicio, 'grupos' => $grupos);
		$this->template->load('template', 'exercicios/cadastrar.php', $dados);
	}

	public function novo(){
		$this->login_model->logged();
		$exercicio['nome'] = $this->input->post('nome');
		$exercicio['idGrupoMuscular'] = $this->input->post('idgrupo');
		$this->exercicios_model->add($exercicio);
		$this->cadastrar();	
	}

	public function editar(){
		$this->login_model->logged();
		$alunoId = $this->uri->segment(3);
		$dados = array('aluno' => $this->alunos_model->getById($alunoId));
		$this->template->load('template', 'aluno/editar.php', $dados);
	}

	public function alterar(){
		$this->login_model->logged();
		$aluno = $this->recuperaDados();
		$aluno['id'] = $this->uri->segment(3);
		$this->alunos_model->update($aluno);
		$this->listar();	
	}
	
	

	
}
?>
