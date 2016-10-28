<div class="form-group">
  <?php
  $alunoId = $aluno;
    echo form_open('treinos/novo/'.$alunoId."/1");
  ?>
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Segunda Feira</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
              <div class="row">
                <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
                </div><!-- /input-group -->
              </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Segunda Feira</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
    <?php
      echo form_close();
      echo form_open('treinos/novo/'.$alunoId."/2");
    ?>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Terça Feira</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
            <div class="row">
              <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
              </div><!-- /input-group -->
            </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Terça Feira</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    echo form_close();
    echo form_open('treinos/novo/'.$alunoId."/3");
  ?>
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Quarta Feira</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
              <div class="row">
                <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
                </div><!-- /input-group -->
              </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Quarta Feira</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
    <?php
      echo form_close();
      echo form_open('treinos/novo/'.$alunoId."/4");
    ?>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Quinta Feira</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
            <div class="row">
              <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
              </div><!-- /input-group -->
            </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Quinta Feira</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    echo form_close();
    echo form_open('treinos/novo/'.$alunoId."/5");
  ?>
  <div class="row">
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Sexta Feira</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
              <div class="row">
                <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
                </div><!-- /input-group -->
              </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Sexta Feira</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
    <?php
      echo form_close();
      echo form_open('treinos/novo/'.$alunoId."/6");
    ?>
    <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h3 class="panel-title">Sabado</h3>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            <h4> Exercício: </h4>
            <div class="row">
              <div class="form-group">
                  <select class="form-control" name="idExercicio">
                    <?php foreach ($exercicios as $exericio)
                    {
                    ?>
                      <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
                    <?php
                    }
                    ?>
                  </select>
              </div><!-- /input-group -->
            </div><!-- /.row -->
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="series" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="repeticoes" required>
          </div>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.:</h4>
          <div class="form-group">
            <input type="number" class="form-control" min="0" name="quantidade" required>
          </div>
        </div>
        <div class="row" style="float:right">
          <div class="col-lg-4 col-xs-4 form-group">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4 form-group">
            <a class="btn btn-default" href="<?php echo(site_url('treinos/listar'));?>">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#aaaaaa">
          <h4 class="panel-title">Sabado</h4>
        </div>
        <div class="panel-body">
          <div class="col-lg-12 col-xs-12 form-group">
            Exercícios:
          </div>
        </div>
      </div>
    </div>
  </div>
</div>