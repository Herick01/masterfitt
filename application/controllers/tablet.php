<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tablet extends CI_Controller {

	/*
	metodo principal do controller
	é executado quando não se especifica um metodo
	na chamada
	*/
	public function index()
	{
		$this->load->view('tablet/index');
	}

	/*
	método que mostra todos os treinos cadastrados para aquele dia da semana,
	caso o usuário logado seja aluno só irá aparecer seu próprio treino
	*/
	public function paraHoje(){
		$nome = $this->input->post('nome');
		$aluno = $this->alunos_model->getByName($nome);
		$exercicios = $this->exercicios_model->getall();
		$treino[] = $this->treinos_model->getByDateAndIdAluno($aluno['id'], date('w'));
		$dado[0]['aluno']  = $aluno;
		$dado[0]['treino'] = $treino;
		$dados = array('dados' => $dado, 'exercicios' => $exercicios);
		$this->load->view('tablet/consulta.php', $dados);
	}
	
}
?>