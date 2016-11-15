<html>
	<head>
		<!-- Bootstrap Core CSS -->
    	<link href="<?php echo(base_url('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
		<title>TABLET</title>

    <style>
    /* para tela em pé  */
      body {
        background-repeat: no-repeat;
        background-image: url('<?php echo(base_url('assets/img/tablet2.jpg')); ?>');
        background-size: 100%;
      }

      /* para tela deitada */
      @media only screen and (min-device-width: 1020px) {
        body {
          background-image: url('<?php echo(base_url('assets/img/tablet1.jpg')); ?>');
          background-size: 100%;
        }
      }
    </style>
	</head>
	<body>
    <div class="cover" >
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo(site_url('usuarios/index')); ?>" style="font-family: Cooper; font-size: 200%"><span>Master Fitt</span></a>
          </div>
        </div>
      </div>	
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <form action="<?php echo(site_url('tablet/paraHoje')); ?>" method="POST">
            <h1 style="font-family: Cooper; color: white">Nome</h1>
            <input class="form-control" name="nome">
            <br>
            <button class="btn btn-lg btn-default" type="submit">Buscar</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
