<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/*
	metodo principal do controller é executado
	quando não se especifica um metodo na chamada
	*/
	public function index()
	{
		$this->load->view('usuarios/index');
	}

	/*
	metodo que chama a pagina com o perfil do usuário
	*/
	public function perfil(){
		$this->login_model->logged();
		$usuarios = $this->usuarios_model->getById($this->session->userdata('id_user'));
		$dados = array('usuarios' => $usuarios);
		$this->template->load('template', 'usuarios/perfil.php', $dados);
	}

	/*
	metodo que inicia a sessão de usuário e
	redireciona o mesmo para a pagina de treinos do dia
	*/
	public function login(){
		$email = $this->input->post('emailLogin');
		$senha = md5($this->input->post('senhaLogin'));
		$pessoa = $this->usuarios_model->valida($email, $senha);
		if($pessoa){
			$this->session->set_userdata(array(
					'logged_in' => TRUE,
					'id_user' => $pessoa[0]['id'],
					'user_name' => $pessoa[0]['nome'],
					'user_nivel' => $pessoa[0]['nivel'],
					'email_user' => $pessoa[0]['email']
					));
			redirect(site_url('treinos'));	
		} else {
			$dados = array('mensagem' => 'usuario não encontrado' );
			$this->load->view('usuarios/index', $dados);
		}
	}

	/*
	método que finaliza a sessão e redireciona
	o usuário para a tela de login
	*/
	public function logOut(){
		$this->session->sess_destroy();
		redirect('usuarios/index');
	}

	/*
	método de cadastro para usuário com
	permissão de administrador
	*/
	public function cadastro(){
		$this->login_model->logged();
		$dados = array(
			'nome' => $this->input->post('nomeCadastro'),
			'sobrenome' => $this->input->post('sobrenomeCadastro'),
			'email' => $this->input->post('emailCadastro'),
			'senha' => md5($this->input->post('senhaCadastro'))
		 );
		$this->usuarios_model->add($dados);
		redirect('usuarios/index');
	}
}
