<?php
	class Usuarios_model extends CI_Model {
		public function buscaTodos(){
			return $this->db->get('usuarios')->result_array();
		}

		public function valida($email, $senha){
				$this->db->where('email', $email);
				$this->db->where('senha', $senha);
				$user = $this->db->get('usuarios')->result_array();
				if($user != null){
					return $user;
				} else{
					$this->db->where('email', $email);
					$this->db->where('senha', $senha);
					$user = $this->db->get('alunos')->result_array();
					if($user != null){
						return $user;
					}else{
						$this->db->where('email', $email);
						$this->db->where('senha', $senha);
						$user = $this->db->get('treinadores')->result_array();
						return $user;
					}
					
				}
		}

		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('usuarios')->result_array();
		}

		public function add($user){
			$this->db->insert('usuarios', $user);
		}

		public function remove($user){
			$this->db->where('id', $user);
			$this->db->delete('usuarios');
		}
	}
?>