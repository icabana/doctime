<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link REL="Shortcut Icon" href="imagenes/iconos/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>..: DocTime :..</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>dist/css/adminlte.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $this->ruta(); ?>/html/tmpl/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $this->ruta(); ?>/html/tmpl/assets/css/noscript.css" /></noscript>
    
</head>
<body style='background:white' class="hold-transition login-page">
<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
				  <div style="margin-top: 2px;" class="login-logo">
            <span class="brand-text font-weight-light">        
				<img src="imagenes/logos/logo_login.png" width="300px"  style="opacity: .8">    
				<br>   <br>
              </span>
          </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar Sesi&oacute;n</p>

        <form id="formLogin" action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="nick" name="nick" placeholder="Nombre de Usuario">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>         
            
            <center>
                <button onclick="login_inicial(); return false;"  class="btn btn-success">Ingresar</button>
</center>
            
          </form>
 
    <!-- /.login-card-body -->
  </div>
</div>
  </header>
  	<footer class="main-footer">
						<strong>Copyright &copy; 2020 <a target='_blank' href="http://logintime.co/">LoginTime S.A.S.</a></strong>
						Todos los derechos Reservados.
						<div class="float-right d-none d-sm-inline-block">
							<b>Version</b> 3.0.1
						</div>
    				</footer>


			</div>
    </div>
    
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
	
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
<!-- /.login-box -->


<!-- jQuery -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery.min.js"></script>


<!-- jQuery -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->ruta(); ?>dist/js/adminlte.min.js"></script>

<script type="text/javascript" src="js/plugins/noty/jquery.noty.js" ></script>
    <script type="text/javascript" src="js/plugins/noty/packaged/jquery.noty.packaged.min.js" ></script>

<script type='text/javascript' src='js/sistema/funciones_sistema.js'></script>      
<script>
	
  window.onload = function() { document.body.classList.remove('is-preload'); }
  window.ontouchmove = function() { return false; }
  window.onorientationchange = function() { document.body.scrollTop = 0; }
</script>


</body>
</html>
