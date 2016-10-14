<div class="form-group">
  <?php
    echo form_open('avaliacao_fisica/atualizacao/'.$aluno);
  ?>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
      <h4> Peso: (Kg)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" name="peso" placeholder="peso" required>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
      <h4> Altura: (mts)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" name="altura" placeholder="altura" required>
      </div>
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