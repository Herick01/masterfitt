<?php 
	class Avaliacao_fisica_model extends CI_Model{
		var $id;
		var $idAluno;
		var $altura;
		var $peso;
		var $imc;
		var $doenca;
		var $coracao;
		var $hipertencao;
		var $dorNoPeito;
		var $fuma;
		var $lesao;
		var $medicamento;
		var $suplemento;
		var $tonteirasDesmaio;

		/*
		metodo que retorna um array com todas atividades cadastradas
		*/
		public function getAll(){
			return $this->db->get('avaliacoes')->result_array();
		}

		/*
		metodo que atualiza informaçoes de uma avaliação fisica apartir do id
		recebe por parametro os dados que irão substituir os antigos
		*/
		public function update($dados){
				$this->db->where('id', $dados['id']);
				$this->db->update('avaliacoes', $dados);
		}

		/*
		metodo que retorna todas as atividades de um determinado aluno
		através do id que é recebido por parametro
		*/
		public function getByAlunoId($idAluno){
			$this->db->where('idAluno', $idAluno);
			$this->db->order_by("id", "desc");
			return $this->db->get('avaliacoes')->result_array();
		}

		/*
		metodo que retorna a ultima atividade de um determinado aluno
		através do id que é recebido por parametro para incluir um
		novo peso e nova altura
		*/
		public function getToRefresh($idAluno){
			$this->db->where('idAluno', $idAluno);
			$this->db->order_by("id", "desc");
			$this->db->limit(1);
			return $this->db->get('avaliacoes')->row_array();
		}

		/*
		metodo que retorna uma atividade através do id que é recebido
		por parametro para editar 
		*/
		public function getToEdit($id){
			$this->db->where('id', $id);
			$this->db->order_by("id", "desc");
			$this->db->limit(1);
			return $this->db->get('avaliacoes')->row_array();
		}

		/*
		metodo que retorna as atividades de um aluno através do id que é recebido
		por parametro para gerar o relatório baseado no imc do mesmo 
		*/
		public function getToReport($idAluno){
			$this->db->where('idAluno', $idAluno);
			$this->db->order_by("id", "asc");
			$this->db->limit(6);
			return $this->db->get('avaliacoes')->result_array();
		}

		/*
		metodo que retorna uma atividade especifica através
		do id que é recebido por parametro
		*/
		public function getById($id){
			$this->db->where('id', $id);
			return $this->db->get('avaliacoes')->row_array();
		}

		/*
		metodo que adiciona uma nova atividade no banco de dados
		os dados desta atividade são recebidos por parametro 
		*/
		public function add($dados){
			$this->db->insert('avaliacoes', $dados['avaliacao']);
		}

		public function remove($id){
			$this->db->where('id', $id);
			$this->db->delete('avaliacoes');
		}
	}
?>