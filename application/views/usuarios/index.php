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
    				<div class="col-md-5">
                        <hr>
        					<h1 class="text-center">Entar</h1>
                            <?php echo form_open('usuarios/login'); ?>
        						<div class="form-group">
        							<label class="control-label">Email</label>
        							<input type="email" class="form-control" name="emailLogin" placeholder="Email" autocomplete="off" required>
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
							<h1 class="text-center">Cadastro</h1>
							<?php echo form_open('usuarios/cadastro'); ?>
								<div class="form-group">
									<label class="control-label">Nome</label>
									<input class="form-control" name="nomeCadastro" placeholder="Name" type="text" required>
								</div>
                                <div class="form-group">
                                    <label class="control-label">Sobrnome</label>
                                    <input class="form-control" name="sobrenomeCadastro" placeholder="Last Name" type="text" required>
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
    					CodeStar 2016 - Três Cachoeiras/RS
    					<br>Fone:
    					<br>(51) 8150-0635 WhatsApp
    					<br>E-mail:
    					<br>herick.mengue@hotmail.com
                        <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    ?>
    <br><a class="btn btn-lg btn-primary" href="<?php echo(site_url('tablet/index'));  ?>"><i class="glyphicon glyphicon-fullscreen"></i></a>
    <?php
    }
    ?>
                        
    				</div>
    				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    					<p class="text-right" style="font-size: 250%">Siga-nos</p>
    					<p class="text-right">Acompanhe nas redes Sociais<br>
    					
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
        
<script>
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER['HTTP_USER_AGENT']);
}
</script>
</script>