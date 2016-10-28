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
    <ul id="<?php echo($dado['aluno']['id']); ?>" class="collapse">
      <?php 
      if($dado['treino']){
        foreach ($dado['dia'] as $data) {
          $dia = $data['diaDaSemana'];
      ?>
          <div class="panel panel-defalt col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <!-- Default panel contents -->
            <div class="panel-heading row" style="background-color:#aaaaaa">
              <h4 ><b><?php echo ($dia); ?></b></h4>
            </div>
            <!-- List group -->
            <table class="table table-hover table-responsive col-lg-12 col-xs-12">  
              <tr>
                <th>
                  <?php 
                  foreach ($dado['treino'] as $tr) {
                  ?>
                    <?php
                    foreach ($exercicios as $exercicio) {
                      foreach ($tr as $treino) {
                        if($exercicio['id'] == $treino['idExercicio'] && $treino['diaDaSemana'] == $dia){
                    ?>
                          <h4><b><?php echo ($exercicio['nome']);?></b></h4>
                    <?php
                        }
                      }
                    }
                  }
                  ?>
                </th>
              </tr>
            </table>
          </div>
        <?php
        }
      }else{
        ?>
        <li class="list-group-item col-lg-12 col-md-12 col-sm-12 col-xs-12"><b><?php echo ("Não possui avaliação cadastrada"); ?></b>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
<?php
}
?>