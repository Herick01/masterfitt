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
		$email = $this->input->post('emailLogin');
		$senha = $this->input->post('senhaLogin');
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
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('usuarios/index');
	}

	public function cadastro(){
			$dados = array(
				'nome' => $this->input->post('nomeCadastro'),
				'email' => $this->input->post('emailCadastro'),
				'senha' => $this->input->post('senhaCadastro')
			 );
			$this->load->model('usuarios_model');
			$this->usuarios_model->add($dados);
			redirect('usuarios/index');
	}
}
