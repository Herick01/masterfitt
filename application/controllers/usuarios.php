<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/*
	metodo principal do controller
	é executado quando não se especifica um metodo
	na chamada
	*/
	public function index()
	{
		$this->load->model('usuarios_model');
		$this->load->view('usuarios/index');
	}

	/*
	metodo que inicia a sessão de usuário e
	redireciona o mesmo para a pagina administrativa
	*/
	public function login(){
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
			$email = $this->input->post('email');
			$senha = $this->input->post('senha');
			$this->load->model('usuarios_model');
			$pessoa = $this->usuarios_model->valida($email, $senha);
			if($pessoa){
    			$this->session->set_userdata(array(
						'logged_in' => TRUE,
						'id_user' => $pessoa[0]['id'],
						'user_name' => $pessoa[0]['nome'],
						'email_user' => $pessoa[0]['email']
						));
				redirect(site_url('alunos'));	
			} else {
				$this->load->view('usuarios/index');
			}
		} else {
			$this->load->view('usuarios/index');
		}
		
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('usuarios/index');
	}

	public function cadastro(){
		$this->form_validation->set_rules('cadastroNome', 'nome', 'required');
		$this->form_validation->set_rules('cadastroEmail', 'email', 'required');
		$this->form_validation->set_rules('cadastroSenha', 'senha', 'required');
		$this->form_validation->set_rules('confirmaSenha', 'confirmar senha', 'required|matches[cadastroSenha]');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
			$dados = array(
				'nome' => $this->input->post('cadastroNome'),
				'email' => $this->input->post('cadastroEmail'),
				'senha' => $this->input->post('cadastroSenha')
			 );
			$this->load->model('usuarios_model');
			$this->usuarios_model->insere($dados);
		} else {
			$this->load->view('usuarios/index');
		}
		
	}
}
