<?php
foreach ($dados as $dado) {
?>

  <div class="panel panel-sucess">
    <!-- Default panel contents -->
    <div class="panel-heading row" style="background-color:#aaaaaa">
      <div class="col-lg-10 col-md-9 col-sm-9 col-xs-7">
        <h4 ><b><?php echo ($dado['aluno']['nome']." ".$dado['aluno']['sobrenome']); ?></b></h4>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5">
        <button class="btn btn-default" data-toggle="collapse" data-target="<?php echo('#'.$dado['aluno']['id']); ?>"><i class="glyphicon glyphicon-menu-down"></i></button>
        <a class="btn btn-default" href="<?php echo(site_url('treinos/cadastrar/'.$dado['aluno']['id'])); ?>" > <i class="glyphicon glyphicon-plus"></i></a>
      </div>
    </div>

    <!-- List group -->
    <ul id="<?php echo($dado['aluno']['id']); ?>" class="collapse row list-group" >
    <?php
    if($dado['dia']){
      foreach ($dado['dia'] as $dia) {
    ?>
        <div class="list-group-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <li class="list-group-item col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #aaaaaa">
            <?php
            switch($dia['diaDaSemana']){
              case 1:{
                echo 'segunda-feira';
                break;
              }
              case 2:{
                echo 'terça-feira';
                break;
              }
              case 3:{
                echo 'quarta-feira';
                break;
              }
              case 4:{
                echo 'quinta-feira';
                break;
              }
              case 5:{
                echo 'sexta-feira';
                break;
              }
              case 6:{
                echo 'sábado';
                break;
              }
            }
            ?>
          </li>
          <?php
          foreach ($dado['treino'] as $treino){
            foreach ($treino as $tr) {
              if($dia['diaDaSemana'] == $tr['diaDaSemana']){ 
          ?>
                <li class="list-group-item col-lg-5 col-md-5 col-sm-12 col-xs-12" >
                  <?php
                    foreach ($exercicios as $exercicio) {
                      if ($exercicio['id'] == $tr['idExercicio']) {
                        echo $exercicio['nome'];
                      }
                    }
                  ?>
                </li>
                <li class="list-group-item col-lg-2 col-md-2 col-sm-4 col-xs-4" >
                  Series: <?= $tr['series'] ?>
                </li>
                <li class="list-group-item col-lg-2 col-md-2 col-sm-3 col-xs-3" >
                  Rep.:<?= $tr['repeticoes'] ?>
                </li>
                <li class="list-group-item col-lg-2 col-md-2 col-sm-4 col-xs-4">
                  Peso: <?= $tr['quantidade'] ?> kg
                </li>
                <?php
                  if($this->session->userdata('user_nivel')!=3){
                ?>
                <li class="list-group-item col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  <a type="button" data-toggle="modal" data-target="<?php echo('#modal'.$tr['id']); ?>" style="color:red"><i class="glyphicon glyphicon-remove"></i></a>
                </li>
          <?php
                }
              }
          ?>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="<?php echo ("modal".$tr['id']); ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffaaaa">
        <h4 class="modal-title" id="myModalLabel"><b>Atenção</b></h4>
      </div>
      <div class="modal-body" style="content">
      <p><?php echo ("Você tem certeza que quer excluir este treino?"); ?></p>
      <div class="container-fluid">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <a class="btn btn-success" href="<?php echo(site_url('treinos/excluir/'.$tr['id'])); ?>" >
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
          }
          ?>
        </div>
      <?php
      }
      ?>
      <?php
    } else {
      ?>
      <li class="list-group-item" style="text-align: center">
        <b>Não existem treinos cadastrados para este aluno!</b>
      </li>
      <?php
    }
    ?>
    </ul>
  </div>
<?php
}
?>