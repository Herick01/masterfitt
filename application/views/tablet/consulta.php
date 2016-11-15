
<html>
  <head>
    <title>Master Fitt</title>

    <!-- Bootstrap Core CSS -->
      <link href="<?php echo(base_url('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
  </head>
  <body>
    <div class="cover">
      <div class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?php echo(site_url('tablet/index')); ?>" style="font-family: Cooper; font-size: 200%"><span>Master Fitt</span></a>
                </div>
              </div>
            </div>
            <div class="panel-heading row" style="background-color:#aaaaaa">
          <div class="col-lg-10 col-md-9 col-sm-9 col-xs-7">
            <h4 ><b><?php echo ($dados[0]['aluno']['nome']." ".$dados[0]['aluno']['sobrenome']); ?></b></h4>
          </div>
        </div>
          
      <?php
      $dado = $dados[0];
      ?>
          <?php
          if(sizeof($dado['treino'][0])!=0){
          ?>
          <table class="table table-striped">
          <tr>
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Exercicios</th>
            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Series</th> 
            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Repetições</th>
            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Peso</th>
          </tr>
              <div class="list-group-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                foreach ($dado['treino'] as $treino){
                  foreach ($treino as $tr) {
                ?>
                      <tr >
                        <?php
                          foreach ($exercicios as $exercicio) {
                            if ($exercicio['id'] == $tr['idExercicio']) {
                              ?>
                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><?php echo $exercicio['nome']; ?></td>
                              <?php
                            }
                          }
                        ?>
                          <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?= $tr['series'] ?></td> 
                          <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?= $tr['repeticoes'] ?></td>
                          <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?= $tr['quantidade'] ?> kg</td>
                      </tr>
                <?php
                    }
                  }
                ?>
              </div>
            <?php
          } else {
            ?>
            <li class="list-group-item" style="text-align: center">
              <b>Não possui treino hoje!</b>
            </li>
            <?php
          }
          ?>
          </ul>
        </div>
      </table>
    </div>
  </body>
</html>
