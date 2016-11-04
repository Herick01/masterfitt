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

	public function perfil(){
		$this->load->model('login_model');
		$this->login_model->logged();
		$this->load->model('usuarios_model');
		$usuarios = $this->usuarios_model->getById($this->session->userdata('id_user'));
		$dados = array('usuarios' => $usuarios);
		$this->template->load('template', 'usuarios/perfil.php', $dados);
	}

	/*
	metodo que inicia a sessão de usuário e
	redireciona o mesmo para a pagina administrativa
	*/
	public function login(){
		$email = $this->input->post('emailLogin');
		$senha = md5($this->input->post('senhaLogin'));
		$this->load->model('usuarios_model');
		$pessoa = $this->usuarios_model->valida($email, $senha);
		if($pessoa){
			$this->session->set_userdata(array(
					'logged_in' => TRUE,
					'id_user' => $pessoa[0]['id'],
					'user_name' => $pessoa[0]['nome'],
					'user_nivel' => $pessoa[0]['nivel'],
					'email_user' => $pessoa[0]['email']
					));
			redirect(site_url('alunos'));	
		} else {
			$dados = array('mensagem' => 'usuario não encontrado' );
			$this->load->view('usuarios/index', $dados);
		}
	}

	public function logOut(){
			$this->session->sess_destroy();
			redirect('usuarios/index');
		}

	public function cadastro(){
			$dados = array(
				'nome' => $this->input->post('nomeCadastro'),
				'sobrenome' => $this->input->post('sobrenomeCadastro'),
				'email' => $this->input->post('emailCadastro'),
				'senha' => md5($this->input->post('senhaCadastro'))
			 );
			$this->load->model('usuarios_model');
			$this->usuarios_model->add($dados);
			redirect('usuarios/index');
	}
}
