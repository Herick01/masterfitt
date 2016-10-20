<?php
	class Treinadores_model extends CI_Model {
		public $nome;
		public $sobrenome;
		public $idade;
		public $cpf;
		public $cref;
		public $telefone;
		public $email;
		public $endereco;
		public $bairro;
		public $estado;
		public $cidade;
		public $cep;

		/*
		metodo que adiciona um novo treinador no banco de dados
		os dados deste treinador são recebidos por parametro 
		*/
		public function add($dados){
			$this->db->insert('treinadores', $dados);
		}

		/*
		metodo que edita um treinador no banco de dados
		os novos dados deste treinador são recebidos por parametro 
		*/
		public function update($dados){
			$this->db->where('id', $dados['id']);
			$this->db->update('treinadores', $dados);
		}

		/*
		metodo que remove um treinador do banco de dados
		de acordo com o if do mesmo 
		*/
		public function remove($id){
			$this->db->where('id', $id);
			$this->db->delete('treinadores');
		}

		/*
		metodo que retorna todos treinadores do banco de dados
		*/
		public function getAll(){
			$this->db->group_by('nome');
			$this->db->group_by('nome', 'desc');
			return $this->db->get('treinadores')->result_array();
		}

		/*
		metodo que retorna um treinador do banco de dados
		pelo seu id
		*/
		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('treinadores')->result_array();
		}

		public function getBySearch($busca){
			$this->db->like('nome', $busca);
			$treinadores = $this->db->get('treinadores')->result_array();
			return $treinadores;
		}
	}
?>