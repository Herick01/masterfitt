<?php
	class Alunos_model extends CI_Model {
		public $nome;
		public $sobrenome;
		public $idade;
		public $genero;
		public $cpf;
		public $telefone;
		public $email;
		public $endereco;
		public $bairro;
		public $estado;
		public $cidade;
		public $cep;

		/*
		metodo que adiciona um novo aluno no banco de dados
		os dados deste aluno são recebidos por parametro 
		*/
		public function add($dados){
			$this->db->insert('alunos', $dados);
		}

		/*
		metodo que edita um aluno no banco de dados
		os novos dados deste aluno são recebidos por parametro 
		*/
		public function update($dados){
			$this->db->where('id', $dados['id']);
			$this->db->update('alunos', $dados);
		}

		/*
		metodo que remove um aluno do banco de dados
		de acordo com o if do mesmo 
		*/
		public function remove($id){
			$this->db->where('id', $id);
			$this->db->delete('alunos');
		}

		/*
		metodo que retorna todos alunos do banco de dados
		*/
		public function getAll(){
			$this->db->group_by('nome');
			$this->db->group_by('nome', 'desc');
			return $this->db->get('alunos')->result_array();
		}

		/*
		metodo que retorna um aluno do banco de dados
		pelo seu id
		*/
		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('alunos')->row_array();
		}

		public function getForTreinos(){
			$this->db->order_by('nome', 'asc');
			return $this->db->get('alunos')->result_array();
		}

		public function getBySearch($busca){
			$this->db->like('nome', $busca);
			$alunos = $this->db->get('alunos')->result_array();
			return $alunos;
		}
	}
?>