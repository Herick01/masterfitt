<?php
foreach ($alunos as $aluno) {
?>

  <!-- List group -->
  <ul id="<?php echo($aluno['id']); ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3><b><?php echo ($aluno['nome']." ".$aluno['sobrenome']); ?></b></h3>
    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Dados Pessoais"); ?></b></h4></li>
    <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-5"><?php echo ("Idade: ".$aluno['idade']); ?></li>
    <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-7"><?php echo ("CPF: ".$aluno['cpf']); ?></li>
    <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php echo ("Cref: ".$aluno['cref']); ?></li>
    </div>

    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Contatos"); ?></b></h4></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Telefone: ".$aluno['telefone']); ?></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Email: ".$aluno['email']); ?></li>
    </div>

    <div class="row list-group">
      <li class="list-group-item col-lg-12 col-xs-12">
        <h4><b><?php echo ("Localização"); ?></b></h4>
      </li>
      <li class="list-group-item col-lg-10 col-xs-9">
        <?php echo ("Cidade: ".$aluno['cidade']); ?>
      </li>
      <li class="list-group-item col-lg-2 col-xs-3">
        <?php echo ("UF: ".$aluno['estado']); ?>
      </li>
      <li class="list-group-item col-lg-6 col-xs-12">
        <?php echo ("Endereço: ".$aluno['endereco']); ?>
      </li>
      <li class="list-group-item col-lg-3 col-xs-6">
        <?php echo ("Bairro: ".$aluno['bairro']); ?>
      </li>
      <li class="list-group-item col-lg-3 col-xs-6">
        <?php echo ("Cep: ".$aluno['cep']); ?>
      </li>
      <li class="list-group-item col-lg-12 col-xs-12" style="text-align: right">
      <a class="btn btn-warning" href="<?php echo(site_url('alunos/editar/'.$aluno['id'])); ?>" >Editar <i class="glyphicon glyphicon-pencil"></i></a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo('#modal'.$aluno['id']); ?>">Deletar <i class="glyphicon glyphicon-remove"></i></button>
    </li>
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
      <h4><p style="text-align: center"><b><?php echo ($aluno['nome']." ".$aluno['sobrenome']); ?></b></p></h4>
      <p style="text-align: center"><b><?php echo ("Os dados excluidos não poderão ser recuperados posteriormente!"); ?></b></p>
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