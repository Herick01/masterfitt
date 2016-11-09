<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alunos extends CI_Controller {

	public function index()
	{
		$this->login_model->logged();
		$this->listar();
	}

	public function perfil(){
		$this->login_model->logged();
		$alunos = $this->alunos_model->getById($this->session->userdata('id_user'));
		$dados = array('alunos' => $alunos);
		$this->template->load('template', 'aluno/perfil.php', $dados);
	}

	public function listar(){
		$this->login_model->logged();
		if($this->session->userdata('user_nivel')!=3){
			$alunos = $this->alunos_model->getAll();
			$dados = array('alunos' => $alunos);
			$this->template->load('template', 'aluno/lista.php', $dados);
		}else{
			redirect('errors/html/error_404');
		}
	}

	public function filtro(){
		$this->login_model->logged();
		if($this->session->userdata('user_nivel')!=3){
			$alunos = $this->alunos_model->getBySearch($this->input->post('busca'));
			$dados = array('alunos' => $alunos);
			$this->template->load('template', 'aluno/lista.php', $dados);
			}else{
				redirect('errors/html/error_404');
			}
		}

	public function excluir(){
		$this->login_model->logged();
		$alunoId = $this->uri->segment(3);
		$this->alunos_model->remove($alunoId);
		$this->listar();
	}

	public function cadastrar(){
		$this->login_model->logged();
		$this->template->load('template', 'aluno/cadastro.php');
	}

	public function editar(){
		$this->login_model->logged();
		$alunoId = $this->uri->segment(3);
		$dados = array('aluno' => $this->alunos_model->getById($alunoId));
		$this->template->load('template', 'aluno/editar.php', $dados);
	}

	public function alterar(){
		$this->login_model->logged();
		$aluno = $this->recuperaDados();
		$aluno['id'] = $this->uri->segment(3);
		$this->alunos_model->update($aluno);
		$this->listar();	
	}
	
	public function novo(){
		$this->login_model->logged();
		$aluno = $this->recuperaDados();
		$this->alunos_model->add($aluno);
		$this->listar();	
	}

	private function recuperaDados(){
		$aluno;
		$aluno['nome'] = $this->input->post('nome');
		$aluno['sobrenome'] = $this->input->post('sobrenome');
		$aluno['genero'] = $this->input->post('genero');
		$aluno['idade'] = $this->input->post('idade');
		$aluno['cpf'] = $this->input->post('cpf');
		$aluno['telefone'] = $this->input->post('telefone');
		$aluno['email'] = $this->input->post('email');
		$aluno['senha'] = md5($this->input->post('senha'));
		$aluno['endereco'] = $this->input->post('endereco');
		$aluno['bairro'] = $this->input->post('bairro');
		$aluno['estado'] = $this->input->post('estado');
		$aluno['cidade'] = $this->input->post('cidade');
		$aluno['cep'] = $this->input->post('cep');
		return $aluno;
	}
}
?>
