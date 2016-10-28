<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Fitt - <?php echo $this->uri->segment(2)." ".$this->uri->segment(1); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo(base_url('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo(base_url('assets/css/sb-admin.css')); ?>" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo(base_url('assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Master Fitt</a>

            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->session->userdata('user_name'); ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->session->userdata('user_name'); ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->session->userdata('user_name'); ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $this->session->userdata('user_name'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php  
                            if($this->session->userdata('user_nivel')== 1 ){
                        ?>
                        <li>
                            <a href="<?php echo(site_url('usuarios/perfil')); ?>"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php  
                            if($this->session->userdata('user_nivel')== 2 ){
                        ?>
                        <li>
                            <a href="<?php echo(site_url('treinadores/perfil')); ?>"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                        </li>
                        <?php
                        }
                        ?>
                        <?php  
                            if($this->session->userdata('user_nivel')== 3 ){
                        ?>
                        <li>
                            <a href="<?php echo(site_url('alunos/perfil')); ?>"><i class="glyphicon glyphicon-user"></i> Perfil</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo (site_url('usuarios/logOut')); ?>"><i class="glyphicon glyphicon-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo(site_url('treinos')); ?>"><i class="glyphicon glyphicon-home"></i> Para Hoje</a>
                    </li>
                    <?php if($this->session->userdata('user_nivel')==1){ ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pessoas"><i class="glyphicon glyphicon-user"></i> Pessoas <b class="caret"></b></a>
                        <ul id="pessoas" class="collapse">
                            <li>
                                <a href="<?php echo(site_url('alunos/listar')); ?>"><i class="glyphicon glyphicon-user"></i> Alunos</a>
                            </li>
                            <li>
                                <a href="<?php echo(site_url('treinadores/listar')); ?>"><i class="glyphicon glyphicon-user"></i> Treinadores</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                    <?php if($this->session->userdata('user_nivel')==2){ ?>
                    <li>
                        <a href="<?php echo(site_url('alunos/listar')); ?>"><i class="glyphicon glyphicon-user"></i> Alunos</a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php if($this->session->userdata('user_nivel')==1){ ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cadastros"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i> Cadastrar pessoas <b class="caret"></b></a>
                        <ul id="cadastros" class="collapse">
                            <li>
                                <a href="<?php echo(site_url('alunos/cadastrar')); ?>"><i class="glyphicon glyphicon-plus"></i> Aluno</a>
                            </li>
                            <li>
                                <a href="<?php echo(site_url('treinadores/cadastrar')); ?>"><i class="glyphicon glyphicon-plus"></i> Treinadores</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="<?php echo(site_url('avaliacao_fisica/listar')); ?>"><i class="glyphicon glyphicon-heart-empty"></i> Avaliação Física</a>
                    </li>
                    <li>
                        <a href="<?php echo(site_url('avaliacao_fisica/relatorio')); ?>"><i class="glyphicon glyphicon-stats"></i> Relatório Físico</a>
                    </li>
                    <?php if($this->session->userdata('user_nivel')==1||$this->session->userdata('user_nivel')==2){ ?>
                    <li>
                        <a href="<?php echo(site_url('treinos/listar')); ?>"><i class="glyphicon glyphicon-edit"></i> Treinos</a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php if($this->session->userdata('user_nivel')==1){ ?>
                    <li>
                        <a href="bootstrap-grid.html"><i class="glyphicon glyphicon-plus"></i> Cadastrar Treinos</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <?php echo $contents ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo(base_url('assets/js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo(base_url('assets/js/bootstrap.min.js')); ?>"></script>
    
</body>

</html>
