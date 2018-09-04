<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dashboard.css">

		<!-- DataTables -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dataTables/css/jquery-ui-1.10.3.custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dataTables/css/jquery.dataTables_themeroller.css" />

		<!-- [if lt IE 9]>
			<script src="<?php echo base_url();?>assets/js/ie8-responsive-file-warning.js"></script>
		<![endif]-->
		<script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Dashboard</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $this->session->userdata('identity'); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('auth/change_password');?>"><span class="glyphicon glyphicon-cog"></span>&nbsp; Mudar Senha</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo base_url('auth/logout');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			
			<!-- Menu lateral (sidebar) -->
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a href="<?php echo base_url('home');?>"><span class="glyphicon glyphicon-home"></span>&nbsp; Início</a></li>
					<li><a href="<?php echo base_url('auth/users');?>"><span class="glyphicon glyphicon-user"></span>&nbsp;Usuários</a></li>
					<li><a href="">Item menu 2</a></li>
					<li><a href="<?php echo base_url('auth/logout');?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
				</ul>
			</div>