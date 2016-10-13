<div class="form-group">
  <?php
    echo form_open('alunos/alterar/'.$aluno['id']);
  ?>
  <div class="col-lg-12 form-group">
    <h4> Nome: </h4>
    <?php 
      echo form_input(array(
        'name' => 'nome',
        'value' => $aluno['nome'],
        'placeholder' => 'Name',
        'class' => 'form-control',
        'maxlength' => 50));
      echo form_error('nome');
    ?>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Sobrenome: </h4>
    <?php 
      echo form_input(array(
        'name' => 'sobrenome',
        'value' => $aluno['sobrenome'],
        'placeholder' => 'lastnname',
        'class' => 'form-control',
        'maxlength' => 50));
      echo form_error('sobrenome');
    ?>
  </div>
  <div class="col-lg-2 form-group">
    <h4> Idade: </h4>
    <?php 
      echo form_input(array(
        'type' => 'number',
        'value' => $aluno['idade'],
        'min' => 0,
        'name' => 'idade',
        'placeholder' => 'age',
        'class' => 'form-control'));
      echo form_error('idade');
    ?>
  </div>
  <div class="col-lg-2 form-group">
    <h4> CPF: </h4>
    <?php 
      echo form_input(array(
        'name' => 'cpf',
        'value' => $aluno['cpf'],
        'placeholder' => 'cpf',
        'class' => 'form-control',
        'maxlength' => 11));
      echo form_error('cpf');
    ?>
  </div>
  <div class="col-lg-8 form-group">
    <h4> Telefone: </h4>
    <?php 
      echo form_input(array(
        'name' => 'telefone',
        'value' => $aluno['telefone'],
        'placeholder' => 'phone',
        'class' => 'form-control',
        'maxlength' => 50));
      echo form_error('telefone');
    ?>
  </div>
  <div class="col-lg-12 form-group">
    <h4> E-mail: </h4>
    <?php 
      echo form_input(array(
        'name' => 'email',
        'value' => $aluno['email'],
        'placeholder' => 'e-mail',
        'class' => 'form-control',
        'maxlength' => 50));
      echo form_error('email');
    ?>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Endereço: </h4>
    <?php 
      echo form_input(array(
        'name' => 'endereco',
        'value' => $aluno['endereco'],
        'placeholder' => 'address',
        'class' => 'form-control',
        'maxlength' => 100));
      echo form_error('endereco');
    ?>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Bairro: </h4>
    <?php 
      echo form_input(array(
        'name' => 'bairro',
        'value' => $aluno['bairro'],
        'placeholder' => 'district',
        'class' => 'form-control',
        'maxlength' => 100));
      echo form_error('bairro');
    ?>
  </div>
  <div class="col-lg-2 form-group">
    <h4> Estado: </h4>
    <?php 
      echo form_input(array(
        'name' => 'estado',
        'value' => $aluno['estado'],
        'placeholder' => 'UF',
        'class' => 'form-control',
        'maxlength' => 2));
      echo form_error('estado');
    ?>
  </div>
  <div class="col-lg-7 form-group">
    <h4> Cidade: </h4>
    <?php 
      echo form_input(array(
        'name' => 'cidade',
        'value' => $aluno['cidade'],
        'placeholder' => 'city',
        'class' => 'form-control',
        'maxlength' => 100));
      echo form_error('cidade');
    ?>
  </div>
  <div class="col-lg-3 form-group">
    <h4> Cep: </h4>
    <?php 
      echo form_input(array(
        'name' => 'cep',
        'value' => $aluno['cep'],
        'placeholder' => 'Zip Code',
        'class' => 'form-control',
        'maxlength' => 8));
      echo form_error('cep');
    ?>
  </div>
  <div class="row" style="float:right">
  <div class="col-lg-4 col-xs-4 form-group">
    <?php
      echo form_button(array(
        'content' => 'Salvar',
        'class' => 'btn btn-success',
        'type' => 'submit'));
      echo form_close();
    ?>
  </div>
  <div class="col-sm-4 col-xs-4 form-group">
    <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
  </div>
  </div>
</div>

<!--
cep
