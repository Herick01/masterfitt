<div class="form-group">
  <?php
    echo form_open('avaliacao_fisica/alterar/'.$avaliacao['id']);
  ?>
  <div class="row">
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Peso: (Kg)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" value="<?php echo $avaliacao['peso']; ?>" name="peso" placeholder="peso" required>
      </div>
    </div>
    <div class="col-lg-6 col-xs-6 form-group">
      <h4> Altura: (mts)</h4>
      <div class="form-group">
        <input type="number" class="form-control" min="0" step="0.1" value="<?php echo $avaliacao['altura']; ?>" name="altura" placeholder="altura" required>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12 form-group">
      <h4> Doença genética: </h4>
      <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $avaliacao['doenca']; ?>" name="doenca" placeholder="doença genética" required>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12   form-group">
      <h4> Doença do coração: </h4>
      <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $avaliacao['coracao']; ?>" name="coracao" placeholder="doença do coração" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Hipertensão:</h4>  
      <?php if ($avaliacao['hipertensao']==1){ ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="hipertensao" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="hipertensao"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="hipertensao" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="hipertensao" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Dor no peito:</h4> 
      <?php if ($avaliacao['dorNoPeito']==1){ ?> 
      <label class="radio-inline" >
        <input type="radio" value="1" name="dorNoPeito" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="dorNoPeito"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="dorNoPeito" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="dorNoPeito" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Fumante (ultimos 6 meses):</h4>
      <?php if ($avaliacao['fuma']==1){ ?>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="fuma" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="fuma"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="fuma" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="fuma" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Tonturas ou Desmaios frequentes:</h4>
      <?php if ($avaliacao['tonteirasDesmaio']==1){ ?>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="tonteirasDesmaio" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="tonteirasDesmaio"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="tonteirasDesmaio" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="tonteirasDesmaio" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-6 col-xs-12">
      <h4>Medicamento:</h4>
      <?php if ($avaliacao['medicamento']==1){ ?>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="medicamento" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="medicamento"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="medicamento" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="medicamento" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
    <div class="radio col-lg-6 col-xs-12">
      <h4>Lesão:</h4>
      <?php if ($avaliacao['lesao']==1){ ?>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="lesao" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="lesao"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="lesao" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="lesao" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
    </div>
  </div>
  <div class="row">
    <div class="radio col-lg-12 col-xs-12">
      <h4>Suplemento:</h4>
      <?php if ($avaliacao['suplemento']==1){ ?>  
      <label class="radio-inline" >
        <input type="radio" value="1" name="suplemento" checked="true"> sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="suplemento"> não </input>
      </label>
      <?php
      } else {
      ?>
      <label class="radio-inline" >
        <input type="radio" value="1" name="suplemento" > sim </input>
      </label>
      <label class="radio-inline" >
        <input type="radio" value="0" name="suplemento" checked="true"> não </input>
      </label>
      <?php
      }
      ?>
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