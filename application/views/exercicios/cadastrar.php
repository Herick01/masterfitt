<div class="form-group">
  <?php
    echo form_open('exercicios/novo');
  ?>
  <div class="col-lg-12 form-group">
    <h4>Grupo Muscular: </h4>
    <select class="form-control" name="idgrupo">

      <?php 
      foreach ($grupos as $grupo)
      {
      ?>
        <option value="<?php echo $grupo['id']?>"> <?php echo $grupo['nome']; ?> </option>
      <?php
      }
      ?>
    </select>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Nome: </h4>
    <div class="form-group">
      <input type="text" class="form-control" name="nome" placeholder="nome" required>
    </div>
  </div>
  <div class="row" style="float:right">
    <div class="col-lg-4 col-xs-4 form-group">
      <div class="form-group">
        <button type="submit" class="btn btn-success">Entrar</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>nome</th>
        <th>Grupo Muscular</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($exercicio as $ex) {
    ?>
      <tr>
        <td><?php  echo $ex['id'] ?></td>
        <td><?php echo $ex['nome'] ?></td>
        <td><?php echo $ex['grupo'] ?></td>
        <td>
          <a type="button" data-toggle="modal" data-target="<?php echo('#modal'.$ex['id']); ?>" style="color:red">
            <i class="glyphicon glyphicon-remove"></i>
          </a>
        </td>
      </tr>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="<?php echo ("modal".$ex['id']); ?>">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffaaaa">
        <h4 class="modal-title" id="myModalLabel"><b>Atenção</b></h4>
      </div>
      <div class="modal-body" style="content">
      <p><?php echo ("Você tem certeza que quer excluir este exercicio?"); ?></p>
      <div class="container-fluid">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <a class="btn btn-success" href="<?php echo(site_url('exercicios/excluir/'.$ex['id'])); ?>" >
        Confirmar </a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancelar</button>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>

    <?php
    }
    ?> 
    </tbody>
  </table>
</div>