<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treinos extends CI_Controller {

	public function index()
	{
		$this->template->load('template', 'treinos/diario.php');
	}

	public function cadastrar(){
		$this->load->model('alunos_model');
		$pessoas = $this->alunos_model->getAll();
		foreach ($pessoas as $pessoa) {
			$alunos[] = array(
				'id' => $pessoa['id'],
				'nome' => $pessoa['nome']." ".$pessoa['sobrenome']);
		}
		$dados = array('alunos' => $alunos);
		$this->template->load('template', 'treinos/cadastro.php', $dados);
	}
}
?>