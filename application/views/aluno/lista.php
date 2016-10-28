<div class="row">
<?php
echo form_open('alunos/filtro');
?>
  <div class="input-group input-group-md">
    <input type="text" class="form-control" autocomplete="off" id="busca" placeholder="Nome" name="busca">
    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  </div>
<?php
echo form_close();

if(!$alunos){
  echo ("<script> alert('nenhum aluno encontrado'); </script>");
}
?>

</div>
<?php
foreach ($alunos as $aluno) {
?>

<div class="panel panel-sucess">
  <!-- Default panel contents -->
  <div class="panel-heading row" style="background-color:#aaaaaa">
    <div class="col-lg-10 col-md-8 col-sm-8 col-xs-6">
    <h4 ><b><?php echo ($aluno['nome']." ".$aluno['sobrenome']); ?></b></h4>
    </div>
    <div class="col-lg-2">
    <button class="btn btn-defaul" data-toggle="collapse" data-target="<?php echo('#'.$aluno['id']); ?>"><i class="glyphicon glyphicon-menu-down"></i></button>
    <a class="btn btn-warning" href="<?php echo(site_url('alunos/editar/'.$aluno['id'])); ?>" > <i class="glyphicon glyphicon-pencil"></i></a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo('#modal'.$aluno['id']); ?>"><i class="glyphicon glyphicon-remove"></i></button>
    
    </div>
  </div>
  <!-- List group -->
  <ul id="<?php echo($aluno['id']); ?>" class="collapse">
    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Dados Pessoais"); ?></b></h4></li>
    <li class="list-group-item col-lg-4 col-xs-4"><?php echo ("Idade: ".$aluno['idade']); ?></li>
    <li class="list-group-item col-lg-4 col-xs-4"><?php echo ("Genero: ".$aluno['genero']); ?></li>
    <li class="list-group-item col-lg-4 col-xs-4"><?php echo ("CPF: ".$aluno['cpf']); ?></li>
    </div>

    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Contatos"); ?></b></h4></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Telefone: ".$aluno['telefone']); ?></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Email: ".$aluno['email']); ?></li>
    </div>

    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Localização"); ?></b></h4></li>
    <li class="list-group-item col-lg-10 col-xs-9"><?php echo ("Cidade: ".$aluno['cidade']); ?></li>
    <li class="list-group-item col-lg-2 col-xs-3"><?php echo ("UF: ".$aluno['estado']); ?></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Endereço: ".$aluno['endereco']); ?></li>
    <li class="list-group-item col-lg-3 col-xs-6"><?php echo ("Bairro: ".$aluno['bairro']); ?></li>
    <li class="list-group-item col-lg-3 col-xs-6"><?php echo ("Cep: ".$aluno['cep']); ?></li>
    </div>
  </ul>
</div>



<!--alerta de exclusão-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="<?php echo ("modal".$aluno['id']); ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffaaaa">
        <h4 class="modal-title" id="myModalLabel"><b>Atenção</b></h4>
      </div>
      <div class="modal-body" style="content">
      <p><?php echo ("Você tem certeza que quer excluir este aluno?"); ?></p>
      <p><b><?php echo ($aluno['nome']." ".$aluno['sobrenome']); ?></b></p>
      <div class="container-fluid">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <a class="btn btn-success" href="<?php echo(site_url('alunos/excluir/'.$aluno['id'])); ?>" >
        Confirmar </a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancelar</button>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>