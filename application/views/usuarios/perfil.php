<?php
foreach ($usuarios as $usuario) {
?>

  <!-- List group -->
  <ul id="<?php echo($usuario['id']); ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <h3><b><?php echo ($usuario['nome']." ".$usuario['sobrenome']); ?></b></h3>
    
    <div class="row list-group">
    <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Contatos"); ?></b></h4></li>
    <li class="list-group-item col-lg-6 col-xs-12"><?php echo ("Email: ".$usuario['email']); ?></li>
    </div>

    <div class="row list-group">
      <li class="list-group-item col-lg-12 col-xs-12" style="text-align: right">
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo('#modal'.$usuario['id']); ?>">Deletar <i class="glyphicon glyphicon-remove"></i></button>
    </li>
    </div>
  </ul>
</div>



<!--alerta de exclusão-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="<?php echo ("modal".$usuario['id']); ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffaaaa">
        <h4 class="modal-title" id="myModalLabel"><b>Atenção</b></h4>
      </div>
      <div class="modal-body" style="content">
      <p><?php echo ("Você tem certeza que quer excluir este usuario?"); ?></p>
      <h4><p style="text-align: center"><b><?php echo ($usuario['nome']." ".$usuario['sobrenome']); ?></b></p></h4>
      <p style="text-align: center"><b><?php echo ("Os dados excluidos não poderão ser recuperados posteriormente!"); ?></b></p>
      <div class="container-fluid">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <a class="btn btn-success" href="<?php echo(site_url('usuarios/excluir/'.$usuario['id'])); ?>" >
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