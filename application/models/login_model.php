<?php
	class Login_model extends CI_Model {
		//VERIFICA SE O USUÁRIO ESTÁ LOGADO
		public function logged() {
			$logged = $this->session->userdata('logged_in');
			if (!isset($logged) || $logged != true) {
				$this->logOut();
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
	}
?>