<?php
	class Exercicios_model extends CI_Model {
		public $id;
		public $nome;
		public $grupoMuscular;
		
		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getAll(){
			return $this->db->get('exercicios')->result_array();
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('exercicios')->row_array();
		}
	}
?>