<div class="form-group">
  <?php
    echo form_open('avaliacao_fisica/alterar/'.$avaliacao['id']);
  ?>
  <div class="row">
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Peso: (Kg)</h4>
      <?php 
        echo form_input(array(
          'type' => 'number',
          'min' => '0',
          'name' => 'peso',
          'value' => $avaliacao['peso'],
          'placeholder' => 'weight',
          'class' => 'form-control',
          'maxlength' => 50));
        echo form_error('peso');
      ?>
    </div>
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Altura: (mts)</h4>
      <?php 
        echo form_input(array(
          'type' => 'number',
          'value' => $avaliacao['altura'],
          'step' => 0.1,
          'min' => 0,
          'name' => 'altura',
          'placeholder' => 'height',
          'class' => 'form-control'));
        echo form_error('altura');
      ?>
    </div>
    <div class="col-lg-12 col-xs-12 form-group">
      <h4> Doença genética: </h4>
      <?php 
        echo form_input(array(
          'name' => 'doenca',
          'value' => $avaliacao['doenca'],
          'placeholder' => 'Genetic diseases',
          'class' => 'form-control',
          'maxlength' => 100));
        echo form_error('doenca');
      ?>
    </div>
    <div class="col-lg-12 col-xs-12   form-group">
      <h4> Doença do coração: </h4>
      <?php 
        echo form_input(array(
          'name' => 'coracao',
          'value' => $avaliacao['coracao'],
          'placeholder' => 'Heart diseases',
          'class' => 'form-control',
          'maxlength' => 100));
        echo form_error('coracao');
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Hipertensão:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="hipertensao"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="hipertensao"> não </input></label>
      <?php
      echo form_error('hipertensao');
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Dor no peito:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="dorNoPeito"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="dorNoPeito"> não </input></label>
      <?php
      echo form_error('dorNoPeito');
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Fumante (ultimos 6 meses):</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="fuma"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="fuma"> não </input></label>
      <?php
      echo form_error('fuma');
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Tonturas ou Desmaios frequentes:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="tonteirasDesmaio"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="tonteirasDesmaio"> não </input></label>
      <?php
      echo form_error('tonteirasDesmaio');
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Medicamento:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="medicamento"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="medicamento"> não </input></label>
      <?php
      echo form_error('medicamento');
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Lesão:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="lesao"> sim </input>  </label>
      <label class="radio-inline" ><input type="radio" value="0" name="lesao"> não </input>  </label>
      <?php
      echo form_error('lesao');
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-12 col-xs-12">
      <h4>Suplemento:</h4>  
      <label class="radio-inline" ><input type="radio" value="1" name="suplemento"> sim </input></label>
      <label class="radio-inline" ><input type="radio" value="0" name="suplemento"> não </input></label>
      <?php
      echo form_error('suplemento');
      ?>
    </div>
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