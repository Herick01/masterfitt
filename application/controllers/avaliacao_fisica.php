<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacao_fisica extends CI_Controller {

	/*
	metodo principal do controller
	é executado quando não se especifica um metodo
	na chamada
	*/
	public function index()
	{
		
	}

	/*
	metodo que busca a lista de todos os alunos cadastrados
	junto com sua avaliação fisica e passa eles para a
	view para serem exibidos
	*/
	public function listar()
	{
		$this->load->model('alunos_model');
		$this->load->model('usuarios_model');
		$this->load->model('avaliacao_fisica_model');
		if($this->session->userdata('user_nivel')==3){
			$pessoas = $this->alunos_model->getById($this->session->userdata('id_user'));
		} else {
			$pessoas = $this->alunos_model->getAll();
		}
		foreach ($pessoas as $pessoa) {
		$avaliacao = $this->avaliacao_fisica_model->getByAlunoId($pessoa['id']);
		$opcoes[] = array(
			'id' => $pessoa['id'],
			'nome' => $pessoa['nome']." ".$pessoa['sobrenome'],
			'avaliacao' => $avaliacao,
			);
		}
		$dados = array('opcoes' => $opcoes);
		$this->template->load('template', 'avaliacao_fisica/lista.php', $dados);
	}

	/*
	metodo que recebe o id do aluno e abre a tela de
	cadastro para uma nova atividade fisica
	*/
	public function cadastrar()
	{
		$this->load->model('alunos_model');
		$dados = array('id' => $this->uri->segment(3));
		$this->template->load('template', 'avaliacao_fisica/cadastro.php', $dados);
	}

	/*
	metodo que valida o formulario de cadastro
	e manda os dados para o model incluir no banco
	*/
	public function novo()
	{
		$avaliacao_fisica = $this->recuperaDados();
		$avaliacao_fisica['idAluno'] = $this->uri->segment(3);
		$avaliacao_fisica['idUsuario'] = $this->session->userdata('id_user');
		$avaliacao_fisica['imc'] = ($avaliacao_fisica['peso']/($avaliacao_fisica['altura']*$avaliacao_fisica['altura']));
		$avaliacao_fisica['data'] = date('y/m/d');
		$this->load->model('avaliacao_fisica_model');
		$dados = array('avaliacao' => $avaliacao_fisica);
		$this->avaliacao_fisica_model->add($dados);
		redirect('alunos/index');
	}

	/*
	metodo que recebe o id de uma atividade fisica e chama a view
	de edição passando os dados para preencher os campos
	*/
	public function editar(){
		$this->load->model('avaliacao_fisica_model');
		$id = $this->uri->segment(3);
		$avaliacao = $this->avaliacao_fisica_model->getToEdit($id);
		if($avaliacao == null){
			redirect(site_url('avaliacao_fisica/cadastrar/'.$alunoId));
		} else{
			$dados = array('avaliacao' => $avaliacao);
			$this->template->load('template', 'avaliacao_fisica/editar.php', $dados);
		}
	}

	/*
	metodo que recebe os novos dados de uma atividade fisica e chama o metodo
	de edição da model passando os dados para alterar no banco
	*/
	public function alterar(){
		$this->formRules();
		$sucesso = $this->form_validation->run();
		$avaliacao = $this->recuperaDados();
		$avaliacao['id'] = $this->uri->segment(3);
		if($sucesso){
			$this->load->model('avaliacao_fisica_model');
			$this->avaliacao_fisica_model->update($avaliacao);
			$this->relatorio();	
		}else{
			$dados = array('avaliacao' => $avaliacao);
			$this->template->load('template', 'avaliacao_fisica/editar.php', $dados);
		}
	}

	/*
	metodo que chama a view responsavél por adicionar um novo peso e altura
	*/
	public function atualizar(){
		$dados = array (
			'aluno' => $this->uri->segment(3)
		);
		$this->load->model('avaliacao_fisica_model');
		$this->template->load('template', 'avaliacao_fisica/atualizar.php', $dados);
	}

	public function excluir(){
		$id = $this->uri->segment(3);
		$this->load->model('avaliacao_fisica_model');
		$this->avaliacao_fisica_model->remove($id);
		$this->listar();
	}

	/*
	metodo que envia o novo peso e altura para a model cadastrar no banco
	*/
	public function atualizacao()
	{
		$this->load->model('avaliacao_fisica_model');
		$alunoId = $this->uri->segment(3);
		$avaliacao = array('avaliacao' => $this->avaliacao_fisica_model->getToRefresh($alunoId));
		$avaliacao['avaliacao']['id'] = null;
		$avaliacao['avaliacao']['idUsuario'] = $this->session->userdata('id_user');
		$avaliacao['avaliacao']['peso'] = $this->input->post('peso');
		$avaliacao['avaliacao']['altura'] = $this->input->post('altura');
		$avaliacao['avaliacao']['imc'] = ($avaliacao['avaliacao']['peso']/($avaliacao['avaliacao']['altura']*$avaliacao['avaliacao']['altura']));
		$avaliacao['avaliacao']['data'] = date('y/m/d');
		$this->load->model('avaliacao_fisica_model');
		$this->avaliacao_fisica_model->add($avaliacao);
		redirect('alunos/index');
	}

	
	/*
	metodo que chama a view de relatório passando os dados que
	dos alunos que 	irão gerar os graficos de evolução do IMC
	*/
	public function relatorio()
	{
		$this->load->model('alunos_model');
		$this->load->model('avaliacao_fisica_model');
		if($this->session->userdata('user_nivel')==3){
			$pessoas = $this->alunos_model->getById($this->session->userdata('id_user'));
		} else {
			$pessoas = $this->alunos_model->getAll();
		}
		foreach ($pessoas as $pessoa) {
			$opcoes[] = array(
				'nome' => $pessoa['nome'],
				'avaliacao' => $avaliacao = $this->avaliacao_fisica_model->getToReport($pessoa['id'])
			);
		}

		$dados = array('opcoes' => $opcoes);
		$this->template->load('template', 'avaliacao_fisica/relatorio.php', $dados);
	}
	
	/*
	metodo faz as validações dos campos dos formulários
	*/
	private function formRules(){
		$this->form_validation->set_rules('altura', 'altura', 'required');
		$this->form_validation->set_rules('peso', 'peso', 'required');
		$this->form_validation->set_rules('doenca', 'doenca', 'required');
		$this->form_validation->set_rules('coracao', 'coracao', 'required');
		$this->form_validation->set_rules('hipertensao', 'hipertensao', 'required');
		$this->form_validation->set_rules('dorNoPeito', 'dorNoPeito', 'required');
		$this->form_validation->set_rules('fuma', 'fuma', 'required');
		$this->form_validation->set_rules('lesao', 'lesao', 'required');
		$this->form_validation->set_rules('medicamento', 'medicamento', 'required');
		$this->form_validation->set_rules('suplemento', 'suplemento', 'required');
		$this->form_validation->set_rules('tonteirasDesmaio', 'tonteirasDesmaio', 'required');
		$this->form_validation->set_error_delimiters("<h5 class='alert alert-danger'>","</h5>");
	}

	/*
	metodo que retorna uma variavel com os dados
	que foram preenchidos no formulário
	*/
	private function recuperaDados(){
		$avaliacao;
		$avaliacao['altura'] = $this->input->post('altura');
		$avaliacao['peso'] = $this->input->post('peso');
		$avaliacao['doenca'] = $this->input->post('doenca');
		$avaliacao['coracao'] = $this->input->post('coracao');
		$avaliacao['hipertensao'] = $this->input->post('hipertensao');
		$avaliacao['dorNoPeito'] = $this->input->post('dorNoPeito');
		$avaliacao['fuma'] = $this->input->post('fuma');
		$avaliacao['lesao'] = $this->input->post('lesao');
		$avaliacao['medicamento'] = $this->input->post('medicamento');
		$avaliacao['suplemento'] = $this->input->post('suplemento');
		$avaliacao['tonteirasDesmaio'] = $this->input->post('tonteirasDesmaio');
		return $avaliacao;
	}
}
?>