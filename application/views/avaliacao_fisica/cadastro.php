<div class="form-group">
  <?php
    echo form_open('avaliacao_fisica/novo/'.$id);
  ?>
  <div class="row">
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Peso: (Kg)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" name="peso" placeholder="peso" required>
      </div>
    </div>
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Altura: (mts)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" name="altura" placeholder="altura" required>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12 form-group">
      <h4> Doença genética: </h4>
      <div class="form-group">
        <input type="text" class="form-control" name="doenca" placeholder="doença genética" required>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12   form-group">
      <h4> Doença do coração: </h4>
      <div class="form-group">
        <input type="text" class="form-control" name="coracao" placeholder="doença do coração" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Hipertensão:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="hipertensao" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="hipertensao"> não </input>
      </label>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Dor no peito:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="dorNoPeito" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="dorNoPeito"> não </input>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Fumante (ultimos 6 meses):</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="fuma" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="fuma"> não </input>
      </label>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Tonturas ou Desmaios frequentes:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="tonteirasDesmaio" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="tonteirasDesmaio"> não </input>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Medicamento:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="medicamento" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="medicamento"> não </input>
      </label>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Lesão:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="lesao" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="lesao"> não </input>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-12 col-xs-12">
      <h4>Suplemento:</h4>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="suplemento" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="suplemento"> não </input>
      </label>
    </div>
  </div>
  
  <div class="row" style="float:right">
    <div class="col-lg-4 col-xs-4 form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-success">Entrar</button>
      </div>
    </div>
    <div class="col-lg-4 col-xs-4 form-group">
      <a class="btn btn-default" href="<?php echo(site_url('avaliacao_fisica/listar'));?>">Cancelar</a>
    </div>
  </div>
</div>