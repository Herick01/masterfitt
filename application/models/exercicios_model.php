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

		public function getToList(){
			$exercicios['exercicios'] = $this->db->get('exercicios')->result_array();
			$exercicios['grupoMuscular'] = $this->db->get('gruposmusculares')->result_array();
			return $exercicios;
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('exercicios')->row_array();
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getAllGroups(){
			$this->db->order_by('nome', 'asc');
			return $this->db->get('gruposmusculares')->result_array();
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function add($exercicio){
			return $this->db->insert('exercicios', $exercicio);
		}

		/*
		metodo que remove um exercicio do banco de dados
		*/
		public function remove($id){
			$this->db->where('id', $id);
			$this->db->delete('exercicios');
		}
	}
?>