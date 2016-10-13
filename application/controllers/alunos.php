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
		$this->formRules();
		$sucesso = $this->form_validation->run();
		$aluno = $this->recuperaDados();
		$aluno['id'] = $this->uri->segment(3);
		if($sucesso){
			$this->load->model('alunos_model');
			$this->alunos_model->update($aluno);
			$this->listar();	
		}else{
			$dados = array('aluno' => $aluno);
			$this->template->load('template', 'aluno/editar.php', $dados);
		}
	}
	public function novo(){
		$this->formRules();
		$sucesso = $this->form_validation->run();
		$aluno = $this->recuperaDados();
		if($sucesso){
			$this->load->model('alunos_model');
			$this->alunos_model->add($aluno);
			$this->listar();	
		}else{
			$dados = array('aluno' => $aluno);
			$this->template->load('template', 'aluno/cadastro.php', $dados);
		}
	}
			

	public function logOut(){
		$this->session->sess_destroy();
		redirect('usuarios/index');
	}

	private function formRules(){
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('sobrenome', 'sobrenome', 'required');
		$this->form_validation->set_rules('idade', 'idade', 'required');
		$this->form_validation->set_rules('cpf', 'cpf', 'required');
		$this->form_validation->set_rules('telefone', 'telefone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('endereco', 'endereco', 'required');
		$this->form_validation->set_rules('bairro', 'bairro', 'required');
		$this->form_validation->set_rules('estado', 'estado', 'required');
		$this->form_validation->set_rules('cidade', 'cidade', 'required');
		$this->form_validation->set_rules('cep', 'cep', 'required');
		$this->form_validation->set_error_delimiters("<h5 class='alert alert-danger'>","</h5>");
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
