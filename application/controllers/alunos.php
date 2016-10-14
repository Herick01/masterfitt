<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

	public function index()
	{
		$this->listar();
	}

	public function listar(){
		$this->load->model('alunos_model');
		$alunos = $this->alunos_model->getAll();
		$dados = array('alunos' => $alunos);
		$this->template->load('template', 'aluno/lista.php', $dados);
	}

	public function excluir(){
		$this->load->model('alunos_model');
		$alunoId = $this->uri->segment(3);
		$this->alunos_model->remove($alunoId);
		$this->listar();
	}

	public function cadastrar(){
		$this->template->load('template', 'aluno/cadastro.php');
	}

	public function editar(){
		$this->load->model('alunos_model');
		$alunoId = $this->uri->segment(3);
		$dados = array('aluno' => $this->alunos_model->getById($alunoId));
		$this->template->load('template', 'aluno/editar.php', $dados);
	}

	public function alterar(){
		$aluno = $this->recuperaDados();
		$aluno['id'] = $this->uri->segment(3);
		$this->load->model('alunos_model');
		$this->alunos_model->update($aluno);
		$this->listar();	
	}
	public function novo(){
		$aluno = $this->recuperaDados();
		$this->load->model('alunos_model');
		$this->alunos_model->add($aluno);
		$this->listar();	
	}
			

	public function logOut(){
		$this->session->sess_destroy();
		redirect('usuarios/index');
	}

	private function recuperaDados(){
		$aluno;
		$aluno['nome'] = $this->input->post('nome');
		$aluno['sobrenome'] = $this->input->post('sobrenome');
		$aluno['idade'] = $this->input->post('idade');
		$aluno['cpf'] = $this->input->post('cpf');
		$aluno['telefone'] = $this->input->post('telefone');
		$aluno['email'] = $this->input->post('email');
		$aluno['endereco'] = $this->input->post('endereco');
		$aluno['bairro'] = $this->input->post('bairro');
		$aluno['estado'] = $this->input->post('estado');
		$aluno['cidade'] = $this->input->post('cidade');
		$aluno['cep'] = $this->input->post('cep');
		return $aluno;
	}
}
?>
