<?php
	class Login_model extends CI_Model {
		//VERIFICA SE O USUÁRIO ESTÁ LOGADO
		public function logged() {
			$logged = $this->session->userdata('logged_in');
			if (!isset($logged) || $logged != true) {
				$this->logOut();
			}
		}
	}
?>