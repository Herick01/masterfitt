<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treinadores extends CI_Controller {

	public function index()
	{
		$this->listar();
	}

	public function listar(){
		$this->load->model('treinadores_model');
		$treinadores = $this->treinadores_model->getAll();
		$dados = array('treinadores' => $treinadores);
		$this->template->load('template', 'treinador/lista.php', $dados);
	}

	public function perfil(){
		$this->load->model('treinadores_model');
		$treinadores = $this->treinadores_model->getById($this->session->userdata('id_user'));
		$dados = array('treinadores' => $treinadores);
		$this->template->load('template', 'treinador/perfil.php', $dados);
	}

	public function filtro(){
		$this->load->model('treinadores_model');
		$treinadores = $this->treinadores_model->getBySearch($this->input->post('busca'));
		$dados = array('treinadores' => $treinadores);
		$this->template->load('template', 'treinador/lista.php', $dados);
		}

	public function excluir(){
		$this->load->model('treinadores_model');
		$treinadorId = $this->uri->segment(3);
		$this->treinadores_model->remove($treinadorId);
		$this->listar();
	}

	public function cadastrar(){
		$this->template->load('template', 'treinador/cadastro.php');
	}

	public function editar(){
		$this->load->model('treinadores_model');
		$treinadorId = $this->uri->segment(3);
		$dados = array('treinador' => $this->treinadores_model->getById($treinadorId));
		$this->template->load('template', 'treinador/editar.php', $dados);
	}

	public function alterar(){
		$treinador = $this->recuperaDados();
		$treinador['id'] = $this->uri->segment(3);
		$this->load->model('treinadores_model');
		$this->treinadores_model->update($treinador);
		$this->listar();	
	}
	public function novo(){
		$treinador = $this->recuperaDados();
		$this->load->model('treinadores_model');
		$this->treinadores_model->add($treinador);
		$this->listar();	
	}
	
	private function recuperaDados(){
		$treinador;
		$treinador['nome'] = $this->input->post('nome');
		$treinador['sobrenome'] = $this->input->post('sobrenome');
		$treinador['idade'] = $this->input->post('idade');
		$treinador['cpf'] = $this->input->post('cpf');
		if($this->input->post('cref')){
			$treinador['cref'] = $this->input->post('cref');
		} else{
			$treinador['cref'] = null;
		}
		$treinador['telefone'] = $this->input->post('telefone');
		$treinador['email'] = $this->input->post('email');
		$treinador['senha'] = md5($this->input->post('senha'));
		$treinador['endereco'] = $this->input->post('endereco');
		$treinador['bairro'] = $this->input->post('bairro');
		$treinador['estado'] = $this->input->post('estado');
		$treinador['cidade'] = $this->input->post('cidade');
		$treinador['cep'] = $this->input->post('cep');
		return $treinador;
	}
}
?>
