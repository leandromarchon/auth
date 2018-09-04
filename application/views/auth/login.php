<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/signin.css">

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <?php echo form_open("auth/login", array('class' => 'form-signin'));?>

      <?php $attributes = array('class' => 'form-heading', 'style' => 'text-align: center;');?>
      <?php echo heading('Login', 1, $attributes);?>

      <p>
        <?php $attributes = array('class' => 'form-control', 'name' => 'identity', 'id' => 'identity', 'placeholder' => 'Usuário', 'required' => 'required', 'autofocus' => 'autofocus');?>
        <?php echo form_input($attributes);?>
      </p>

      <p>
        <?php $attributes = array('class' => 'form-control', 'name' => 'password', 'id' => 'password', 'placeholder' => 'Senha', 'type' => 'password', 'required' => 'required');?>      
        <?php echo form_input($attributes);?>
      </p>

      <p>
        <?php $attributes = array('class' => 'btn btn-primary btn-block btn-lg', 'type' => 'submit', 'value' => 'Enviar');?>
        <?php echo form_submit($attributes);?>
      </p>

      <?php echo isset($message) ? '<div id="infoMessage" class="alert alert-danger">'.$message.'</div>' : null;?>
      <?php echo form_close();?>
  </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>