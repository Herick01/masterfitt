<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MasterFitt</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <!-- Bootstrap Core CSS -->
    <link href="<?php echo(base_url('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo(base_url('assets/css/sb-admin.css')); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo(base_url('assets/css/plugins/morris.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo(base_url('assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <ul class="nav navbar-left top-nav">
      <li class="navbar-header ">
        <a  href=<?php base_url()?>><font face="Cooper Black" size="6"><font color="#467fc5"> Master</font><font color="#ffffff"> Fitt</font></font></a>
      </li>
    </ul>
    <ul class="nav navbar-right top-nav">
      <li class="navbar-header">
          <a type="button" data-toggle="modal" data-target=".bs-example-modal-sm"><font size="4"> Log-in <i class="glyphicon glyphicon-log-in"></i></font></a>
      </li>
    </ul>
  </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#467fc5 ">
      <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <h1><font face="Cooper Black" color="#ffffff">Master Fitt</font></h1>
        <p>O sistema <b>Master Fitt</b> foi desenvolvido visando a real necessidade das academias. Informatizando e facilitando processos básicos e rotineiros o Master Fitt busca abranger aquilo que é indispensável de forma organizada e objetiva, divergindo de outros sistemas que muitas vezes possuem diversas funcionalidades que não são necessárias.</p>
        <p><a class="btn btn-default btn-lg" href="#" role="button">Ver mais »</a></p>
        </div>
        <div class="form-group">
        <h4><font face="Cooper Black"> Cadastro </font></h4>
        <?php
          echo form_open('usuarios/cadastro');
        ?>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
          <?php 
            echo form_input(array(
              'name' => 'cadastroNome',
              'placeholder' => 'Nome',
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('cadastroNome');
          ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
          <?php 
            echo form_input(array(
              'name' => 'cadastroEmail',
              'placeholder' => 'E-mail',
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('cadastroEmail');
          ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
          <?php 
            echo form_password(array(
              'name' => 'cadastroSenha',
              'placeholder' => 'Senha',
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('cadastroSenha');
          ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-group">
          <?php 
            echo form_password(array(
              'name' => 'confirmaSenha',
              'placeholder' => 'Confirme sua senha',
              'class' => 'form-control',
              'maxlength' => 50));
            echo form_error('confirmaSenha');
          ?>
          </div>
          <div class="container-fluid">
            <div style="float:right">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-group">
                <?php
                echo form_button(array(
                  'content' => 'Salvar',
                  'class' => 'btn btn-success',
                  'type' => 'submit'));
                echo form_close();
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid" style="background-color:#ffffff">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-12-4 col-md-4 col-xs-12 col-xs-12">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
        <div class="col-12-4 col-md-4 col-xs-12 col-xs-12">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
       </div>
        <div class="col-12-4 col-md-4 col-xs-12 col-xs-12">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
      </div>
      <footer>  
        <p>© 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery -->
    <script src="<?php echo(base_url('assets/js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo(base_url('assets/js/bootstrap.min.js')); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo(base_url('assets/js/plugins/morris/raphael.min.js')); ?>"></script>
    <script src="<?php echo(base_url('assets/js/plugins/morris/morris.min.js')); ?>"></script>
    <script src="<?php echo(base_url('assets/js/plugins/morris/morris-data.js')); ?>"></script>
</body>
</html>


<!--modal de login-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#aaaaaa">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <h4 class="modal-title" id="myModalLabel"><b>Entrar</b></h4>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
      </div>
      <div class="modal-body">
      <?php
        echo form_open('usuarios/login');
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
        <?php 
          echo form_input(array(
            'name' => 'email',
            'placeholder' => 'E-mail',
            'class' => 'form-control',
            'maxlength' => 50));
          echo form_error('email');
        ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
        <?php 
          echo form_password(array(
            'name' => 'senha',
            'placeholder' => 'Senha',
            'class' => 'form-control',
            'maxlength' => 50));
          echo form_error('senha');
        ?>
        </div>
        <div class="container-fluid">
        <div style="float:right">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-group">
            <?php
            echo form_button(array(
              'content' => 'Entrar',
              'class' => 'btn btn-success',
              'type' => 'submit'));
            echo form_close();
            ?>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>