<?php
	class Treinos_model extends CI_Model {
		public $id;
		public $idExercicio;
		public $idAluno;
		public $diaDaSemana;
		public $series;
		public $repeticoes;
		public $quantidade;
		
		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getAll(){
			$this->db->order_by('diaDaSemana', 'asc');
			return $this->db->get('treinos')->result_array();
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getByDate($data){
			$this->db->where('diaDaSemana', $data);
			return $this->db->get('treinos')->result_array();
		}

		public function getByDateAndIdAluno($id, $data){
			
			$this->db->where('diaDaSemana', $data);
			$this->db->where('idAluno', $id);
			return $this->db->get('treinos')->result_array();
		}

		public function add($treino){
			$this->db->insert('treinos', $treino);
		}

		public function getWeekDay($id){
			$this->db->select('diaDaSemana');
			$this->db->distinct();
			$this->db->where('idAluno', $id);
			$this->db->order_by('diaDaSemana', 'asc');
			return $this->db->get('treinos')->result_array();
		}

		public function getIdAluno(){
			$this->db->select('idAluno');
			$this->db->distinct();
			$this->db->order_by('idAluno', 'asc');
			return $this->db->get('treinos')->result_array();
		}

		public function remove($id){
			$this->db->where('id', $id);
			$this->db->delete('treinos');
		}
	}
?>