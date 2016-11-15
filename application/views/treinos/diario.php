<?php 
if ($dados != null){
  foreach ($dados as $dado) {
  ?>
    <div class="panel panel-default col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <!-- Default panel contents -->
      <div class="panel-heading row" style="background-color:#aaaaaa">
        <h4 ><b><?php echo ($dado['nome']." ".$dado['sobrenome']); ?></b></h4>
      </div>
      <!-- List group -->
      <table class="table table-hover table-responsive col-lg-12 col-xs-12">
        <?php
        if($dado['treino']){
          foreach ($dado['treino'] as $treino) {
            foreach ($exercicios as $exercicio) {
              if($exercicio['id'] == $treino['idExercicio'])
              {
              ?>
                <tr>
                  <th>
                    <h4><b><?php echo ($exercicio['nome']);?></b></h>
                  </th>
                  <th><h4><b><?php echo ('series: '.$treino['series']);?></b></h4></th>
                  <th><h4><b><?php echo ('rep.: '.$treino['repeticoes']);?></b></h4></th>
                  <th><h4><b><?php echo ('peso: '.$treino['quantidade']);?></b></h4></th>
                </tr>
              <?php
              }
            }
          }
        }else{
              ?>
          <div class="jumbotron" style="background-color: #aaaaaa">
            <font style="text-align: center"> <h3><b> Não forão encontrados treinos para hoje </b></h3></font>
          </div>
        <?php
          }
        ?>
      </table>
    </div>
  <?php 
  }
}else{
  ?>
  <div class="jumbotron" style="background-color: #aaaaaa">
    <font style="text-align: center"> <h3><b> Não forão encontrados treinos para hoje </b></h3></font>
  </div>
  <?php 
}
?>