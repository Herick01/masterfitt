
<div class="form-group">
  <?php
    echo form_open('treino/novo');
  ?>
  <div class="row">
    <div class="col-lg-12 form-group">
      <h4> Aluno: </h4>

      <select class="form-control" name="idAluno">
        <?php foreach ($alunos as $aluno) {
          ?>
          <option value="<?php echo $aluno['id']?>"> <?php echo $aluno['nome']; ?> </option>
          <?php
        }
          ?>
      </select>
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
                <select class="form-control" name="idAluno">
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
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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
<div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#aaaaaa">
        <h3 class="panel-title">Terça Feira</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12 col-xs-12 form-group">
          <h4> Exercício: </h4>

          <select class="form-control" name="idAluno">
            <?php foreach ($exercicios as $exericio) {
              ?>
              <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
              <?php
            }
              ?>
          </select>

        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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
<div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#aaaaaa">
        <h3 class="panel-title">Quarta Feira</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12 col-xs-12 form-group">
          <h4> Exercício: </h4>

          <select class="form-control" name="idAluno">
            <?php foreach ($exercicios as $exericio) {
              ?>
              <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
              <?php
            }
              ?>
          </select>

        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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
<div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#aaaaaa">
        <h3 class="panel-title">Quinta Feira</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12 col-xs-12 form-group">
          <h4> Exercício: </h4>

          <select class="form-control" name="idAluno">
            <?php foreach ($exercicios as $exericio) {
              ?>
              <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
              <?php
            }
              ?>
          </select>

        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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
<div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#aaaaaa">
        <h3 class="panel-title">Sexta Feira</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12 col-xs-12 form-group">
          <h4> Exercício: </h4>

          <select class="form-control" name="idAluno">
            <?php foreach ($exercicios as $exericio) {
              ?>
              <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
              <?php
            }
              ?>
          </select>

        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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
<div class="col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#aaaaaa">
        <h3 class="panel-title">Sabado</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-12 col-xs-12 form-group">
          <h4> Exercício: </h4>

          <select class="form-control" name="idAluno">
            <?php foreach ($exercicios as $exericio) {
              ?>
              <option value="<?php echo $exericio['id']?>"> <?php echo $exericio['nome']; ?> </option>
              <?php
            }
              ?>
          </select>

        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Series:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'min' => '0',
              'name' => 'series',
              'value' => set_value("peso"),
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('series');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Rep.:</h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'value' => set_value("altura"),
              'min' => 0,
              'name' => 'repeticoes',
              'class' => 'form-control'));
            echo form_error('repeticoes');
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <h4> Quant.: </h4>
          <?php 
            echo form_input(array(
              'type' => 'number',
              'name' => 'quantidade',
              'value' => set_value("doenca"),
              'class' => 'form-control',
              'maxlength' => 100));
            echo form_error('quantidade');
          ?>
        </div>
      <div class="row" style="float:right">
        <div class="col-lg-4 col-xs-4 form-group">
          <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
          ?>
        </div>
        <div class="col-lg-4 col-xs-4 form-group">
          <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
        </div>
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