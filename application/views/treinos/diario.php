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
        foreach ($dado['treino'] as $treino) {
          foreach ($exercicios as $exercicio) {
            if($exercicio['id'] == $treino['idExercicio'])
            {
            ?>
              <tr><th><h4><b><?php echo ($exercicio['nome']);?></b></h></th></tr>
            <?php
            }
            ?>
          <?php
          }
          ?>
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