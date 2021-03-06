<div class="form-group">
  <?php
    echo form_open('treinadores/novo');
  ?>
  <div class="col-lg-12 form-group">
    <h4> Nome: </h4>
    <div class="form-group">
      <input type="text" class="form-control" name="nome" placeholder="nome" required>
    </div>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Sobrenome: </h4>
    <div class="form-group">
      <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome" required>
    </div>
  </div>
  <div class="col-lg-2 form-group">
    <h4> Idade: </h4>
    <div class="form-group">
      <input type="number" min="0" class="form-control" name="idade" placeholder="idade" required>
    </div>
  </div>
  <div class="col-lg-2 form-group">
    <h4> CPF: </h4>
    <div class="form-group">
      <input type="text" maxlength="11" class="form-control" name="cpf" placeholder="CPF" required>
    </div>
  </div>
  <div class="col-lg-2 form-group">
    <h4> CREF: </h4>
    <div class="form-group">
      <input type="text" maxlength="20" class="form-control" name="cref" placeholder="CREF">
    </div>
  </div>
  <div class="col-lg-6 form-group">
    <h4> Telefone: </h4>
    <div class="form-group">
      <input type="tel" maxlength="10" class="form-control" name="telefone" placeholder="telefone" required>
    </div>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Endereço: </h4>
    <div class="form-group">
      <input type="text" maxlength="100" class="form-control" name="endereco" placeholder="endereço" required>
    </div>
  </div>
  <div class="col-lg-12 form-group">
    <h4> Bairro: </h4>
    <div class="form-group">
      <input type="text" maxlength="100" class="form-control" name="bairro" placeholder="bairro" required>
    </div>
  </div>
  <div class="col-lg-2 form-group">
    <h4> Estado: </h4>
    <div class="form-group">
      <input type="text" maxlength="2" class="form-control" name="estado" placeholder="UF" required>
    </div>
  </div>
  <div class="col-lg-7 form-group">
    <h4> Cidade: </h4>
    <div class="form-group">
      <input type="text" maxlength="100" class="form-control" name="cidade" placeholder="cidade" required>
    </div>
  </div>
  <div class="col-lg-3 form-group">
    <h4> Cep: </h4>
    <div class="form-group">
      <input type="text" maxlength="8" class="form-control" name="cep" placeholder="cep" required>
    </div>
  </div>
  <div class="col-lg-12 form-group">
    <h4> E-mail: </h4>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="e-mail" required>
    </div>
  </div>
  <div class="col-lg-6 form-group">
    <h4> Senha: </h4>
    <div class="form-group">
      <input class="form-control" id="senhaUser" name="senha" placeholder="Password" type="password" required>
    </div>
  </div>
  <div class="col-lg-6 form-group">
    <h4> Confirme sua senha: </h4>
    <div class="form-group">
      <input class="form-control" name="senha2" placeholder="Password validation" type="password" matches="senhaCadastro" onchange="check(this)" required>
    </div>
  </div>
  <div class="row" style="float:right">
  <div class="col-lg-4 col-xs-4 form-group">
    <div class="form-group">
      <button type="submit" class="btn btn-success">Entrar</button>
    </div>
  </div>
  <div class="col-sm-4 col-xs-4 form-group">
    <a class="btn btn-default" href="<?php echo(site_url('alunos/listar'));?>">Cancelar</a>
  </div>
  </div>
</div>

<script>
function check(input) {
  if (input.value != document.getElementById('senhaUser').value) {
    input.setCustomValidity('As senhas devem ser iguais.');
  } else {
    // input is valid -- reset the error message
    input.setCustomValidity('');
  }
}
</script>