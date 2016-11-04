
<?php
foreach ($opcoes as $opcao) {
?>

<div class="panel panel-sucess">
  <!-- Default panel contents -->
  <div class="panel-heading row" style="background-color:#aaaaaa">
    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-7">
    <h4 ><b><?php echo ($opcao['nome']); ?></b></h4>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5">
    <button class="btn btn-default" data-toggle="collapse" data-target="<?php echo('#'.$opcao['id']); ?>"><i class="glyphicon glyphicon-menu-down"></i></button>
    <a class="btn btn-default" href="<?php echo(site_url('avaliacao_fisica/cadastrar/'.$opcao['id'])); ?>" > <i class="glyphicon glyphicon-plus"></i></a>
    </div>
  </div>
  <!-- List group -->
  <ul id="<?php echo($opcao['id']); ?>" class="collapse">
  <?php 
  if(count($opcao['avaliacao'])>0){
    foreach ($opcao['avaliacao'] as $avaliacao)
    {
    ?>
      <div class="row list-group ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <li class="list-group-item col-lg-12 col-xs-12"><h4><b><?php echo ("Avaliação Fisica"); ?></b></h4></li>
      <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php echo ("Peso: ".$avaliacao['peso']); ?></li>
      <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php echo ("Altura: ".$avaliacao['altura']); ?></li>
      <li class="list-group-item col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php echo ("IMC: ".$avaliacao['imc']); ?></li>
      <li class="list-group-item col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo ("Problema Cardiaco: ".$avaliacao['coracao']); ?></li>
      <li class="list-group-item col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo ("Doença Genetica: ".$avaliacao['doenca']); ?></li>
      <?php 
        if($avaliacao['hipertensao'] == 0){
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-6 col-xs-12"><?php echo ("Hipertensão: Não possui"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-6 col-xs-12"><?php echo ("Hipertensão: Possui"); ?></li>
      <?php
      }
      ?>
      <?php 
        if($avaliacao['dorNoPeito'] == 0){
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-6 col-xs-12"><?php echo ("Dor no peito: Não possui"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-6 col-xs-12"><?php echo ("Dor no peito: Possui"); ?></li>
      <?php
      }
      ?>
      <?php 
        if($avaliacao['lesao'] == 0){
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-5 col-xs-12"><?php echo ("Lesionado: Não"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-4 col-md-4 col-sm-5 col-xs-12"><?php echo ("Lesionado: Sim"); ?></li>
      <?php
      }
      ?>
      <?php 
        if($avaliacao['tonteirasDesmaio'] == 0){
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-7 col-xs-12"><?php echo ("Tonteiras ou Desmaios: Não possui"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-7 col-xs-12"><?php echo ("Tonteiras ou Desmaios: Possui"); ?></li>
      <?php
      }
      ?>
      
      <?php 
        if($avaliacao['medicamento'] == 0){
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Medicamento controlado: Não utiliza"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Medicamento controlado: Utiliza"); ?></li>
      <?php
      }
      ?>
      <?php 
        if($avaliacao['suplemento'] == 0){
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Suplemento: Não utiliza"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Suplemento: Utiliza"); ?></li>
      <?php
      }
      ?>
      <?php 
        if($avaliacao['fuma'] == 0){
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Fumante no ultimo semestre: Não"); ?></li>
      <?php
      } else{
      ?>
        <li class="list-group-item col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo ("Fumante no ultimo semestre: Sim"); ?></li>
      <?php
      }
      ?>
      <div style="float: right">
      <?php
      $this->load->model('usuarios_model');
      $user = $this->usuarios_model->getById($avaliacao['idUsuario']);
      foreach ($user as $users) {
        echo $users['nome']." "; echo $avaliacao['data'];
      }
      ?>
      <a class="btn btn-warning" href="<?php echo(site_url('avaliacao_fisica/editar/'.$avaliacao['id'])); ?>" > <i class="glyphicon glyphicon-pencil"></i></a>
      <a class="btn btn-success" href="<?php echo(site_url('avaliacao_fisica/atualizar/'.$avaliacao['idAluno'])); ?>" > <i class="glyphicon glyphicon-refresh"></i></a>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?php echo('#modal'.$avaliacao['id']); ?>"><i class="glyphicon glyphicon-remove"></i></button>
      </div>
      </div>
      </div>




<!--alerta de exclusão-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="<?php echo ("modal".$avaliacao['id']); ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffaaaa">
        <h4 class="modal-title" id="myModalLabel"><b>Atenção</b></h4>
      </div>
      <div class="modal-body" style="content">
      <p><?php echo ("Você tem certeza que quer excluir esta avaliação?"); ?></p>
      <div class="container-fluid">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <a class="btn btn-success" href="<?php echo(site_url('avaliacao_fisica/excluir/'.$avaliacao['id'])); ?>" >
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
    <?php
  }else{
    ?>
    <li class="list-group-item col-lg-12 col-md-12 col-sm-12 col-xs-12"><b><?php echo ("Não possui avaliação cadastrada"); ?></b></li>
    <?php
  }
  ?>
  </ul>
</div>

<?php
}
?>