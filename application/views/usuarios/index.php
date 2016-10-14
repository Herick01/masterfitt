<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="<?php echo(base_url('assets/js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo(base_url('assets/js/bootstrap.min.js')); ?>"></script>
        <link href="<?php echo(base_url('assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo(base_url('assets/css/estilo-inicial.css')); ?>" rel="stylesheet" type="text/css">
        <script>
            if (<?php echo $mensagem!= null ?>) {
            alert('<?php echo $mensagem ?>');
        }
        </script>
        
    </head>
    <body>
    	<div class="section">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-7">
    					<div class="jumbotron" style="background-color: #aaaaaa">
    						<h1 class="text-center" style="font-family: Cooper Black">Master Fitt</h1>
    						<p class="text-left text-muted">O sistema Master Fitt foi desenvolvido visando a real necessidade das academias. Informatizando e facilitando processos básicos e rotineiros o Master Fitt busca abranger aquilo que é indispensável de forma organizada e objetiva, divergindo de outros sistemas que muitas vezes possuem diversas funcionalidades que não são necessárias.
    						</p>  
    					</div>
    					<img src="<?php echo(base_url('assets/img/academia.jpg')); ?>" class="hidden-xs hidden-sm img-responsive">
    				</div>
    				<div class="col-md-4">
                        <hr>
        					<h1 class="text-center">Login</h1>
                            <?php echo form_open('usuarios/login'); ?>
        						<div class="form-group">
        							<label class="control-label">Email</label>
        							<input type="email" class="form-control" name="emailLogin" placeholder="Email" required>
        						</div>
        						<div class="form-group">
        							<label class="control-label">Password</label>
        							<input type="password" class="form-control" name="senhaLogin" placeholder="Password" required>
        						</div>
        						<div class="form-group">
        							<button type="submit" class="btn btn-block btn-default">Entrar</button>
        						</div>
        					</form>
                        </hr>
						<hr>
							<h1 class="text-center">Sign up</h1>
							<?php echo form_open('usuarios/cadastro'); ?>
								<div class="form-group">
									<label class="control-label">Nome</label>
									<input class="form-control" name="nomeCadastro" placeholder="Name" type="text" required>
								</div>
								<div class="form-group">
									<label class="control-label">E-mail</label>
									<input class="form-control" name="emailCadastro" placeholder="E-mail" type="email" required>
								</div>
								<div class="form-group">
									<label class="control-label">Senha</label>
									<input class="form-control" id="senhaCadastro" name="senhaCadastro" placeholder="Password" type="password" required>
								</div>
								<div class="form-group">
									<label class="control-label">Confirme sua senha
									</label>
									<input class="form-control" name="senhaCadastro2" placeholder="Password validation" type="password" matches="senhaCadastro" onchange="check(this)" required>
								</div>
								<button type="submit" class="btn btn-block btn-default">Cadastro
								</button>
							</form>
						<hr>
    				</div>
    			</div>
    		</div>
    	</div>
    	<footer class="section section-primary">
    		<div class="container">
    			<div class="row">
    				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    					<p>CodeStar 2016 - Três Cachoeiras/RS
    					<br>Fone:
    					<br>(51) 8150-0635 WhatsApp
    					<br>E-mail:
    					<br>herick.mengue@hotmail.com
    					</p>
    				</div>
    				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    					<h1 class="text-right">Siga-nos</h1>
    					<p class="text-right">Acompanhe nas redes Sociais<br>
    					</p>
    					<div class="row">
    						<div class="text-right">
    							<a href="https://www.linkedin.com/in/herick-mengue" target="_blank">
                                    <i class="fa fa-2x fa-fw fa-linkedin text-inverse">
                                    </i>
                                </a>
                                <a href="https://twitter.com/HerickMengue" target="_blank">
    								<i class="fa fa-2x fa-fw fa-twitter text-inverse">
    								</i>
    							</a>
    							<a href="https://www.facebook.com/herick.cm" target="_blank">
    								<i class="fa fa-2x fa-fw fa-facebook text-inverse">
    								</i>
    							</a>
    							<a href="https://github.com/Herick01"  target="_blank">
    								<i class="fa fa-2x fa-fw fa-github text-inverse">
    								</i>
    							</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</footer>
    </body>
</html>

<script>
    function check(input) {
        if (input.value != document.getElementById('senhaCadastro').value) {
            input.setCustomValidity('As senhas devem ser iguais.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
        

</script>