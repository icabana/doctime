<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>..: DocumenTime :..</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- jQuery UI 1.11.4 -->
  
  
  <script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery-2.1.4.min.js"></script>
  
      <!--ARCHIVOS CSS LIBRERIAS -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->ruta(); ?>css/jquery-ui/jquery-ui-1.9.0.custom.min.css" />      
      
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/jqvmap/jqvmap.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $this->ruta(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">  


  <script>

  function nuevo_radicado_entrante() {

      abrirVentanaContenedor(
          'radicados', 'Entrantes', 'nuevo', '', ''
      );

  }

  function nuevo_radicado_saliente() {

      abrirVentanaContenedor(
          'radicados', 'Salientes', 'nuevo', '', ''
      );

  }

  </script>

  <!--MODULOS DEL SISTEMA-->  
  <script language="JavaScript" type='text/javascript' src='js/modulos/configuracion.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/administracion.js'></script> 
  <script language="JavaScript" type='text/javascript' src='js/modulos/archivos.js'></script>  
  <script language="JavaScript" type='text/javascript' src='js/modulos/radicados.js'></script>  
  <script language="JavaScript" type='text/javascript' src='js/modulos/estadisticas.js'></script>  
  <script language="JavaScript" type='text/javascript' src='js/modulos/reportes.js'></script>  
  <script language="JavaScript" type='text/javascript' src='js/modulos/archivos.js'></script>  
    
  <?php
                    
    include("modelos/radicados/EntrantesModel.php");
    $EntrantesModel = new EntrantesModel();   

    include("modelos/radicados/SalientesModel.php");
    $SalientesModel = new SalientesModel();    
    
    include("modelos/administracion/EmpleadosModel.php");
    $EmpleadosModel = new EmpleadosModel();   
    
    include("modelos/administracion/TercerosModel.php");
    $TercerosModel = new TercerosModel();   
    
    include("modelos/administracion/DependenciasModel.php");
    $DependenciasModel = new DependenciasModel();   
    
    include("modelos/radicados/CarpetasModel.php");
    $CarpetasModel = new CarpetasModel();   
  
    if($_SESSION['rol'] == "1" || $_SESSION['rol'] == "2"){
        $numero_entrantes = $EntrantesModel->getNumeroEntrantes();
        $numero_entrantes_activos = $EntrantesModel->getNumeroEntrantesActivos();
        $numero_entrantes_finalizados = $EntrantesModel->getNumeroEntrantesFinalizados();
        $numero_entrantes_archivados = $EntrantesModel->getNumeroEntrantesArchivados();  
        $numero_salientes = $SalientesModel->getNumeroSalientes();
        $carpetas = $CarpetasModel->getTodos();
        $empleados = count($EmpleadosModel->getTodos());
        $terceros = count($TercerosModel->getTodos());
        $dependencias = count($DependenciasModel->getTodos());
    }

    if($_SESSION['rol'] == "3" || $_SESSION['rol'] == "4"){

        $empleados = $EmpleadosModel->getTodos();
        $carpetas = $CarpetasModel->getTodos();

    }
    
 
?>
    
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- BARRA DE NAVEGACION -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <?php
            if($_SESSION['rol'] == "1" || $_SESSION['rol'] == "2"){
          ?>
      <li class="nav-item d-none d-sm-inline-block">
      <a onclick="nuevo_radicado_entrante();" href="#" class="nav-link">Nuevo Radicado de Entrada</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a onclick="nuevo_radicado_saliente();" href="#" class="nav-link">Nuevo Radicado de Salida</a>
      </li>

      <?php
            }   
      ?>
      
    </ul>


    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      
        <a class="nav-link"  onclick="javascript:cerrar();"  href="#">
        <span class="fi-power-standby"></span>
          <i title='Cerrar Sesión' class="fas fa-power-off"></i>
        </a>
      </li>
</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="<?php echo $this->ruta(); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" 
      class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
        <img src="<?php echo $this->ruta(); ?>dist/img/logo.png"  style="opacity: .8">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $this->ruta(); ?>dist/img/user2-160x160.png" class="img-circle elevation-2" 
          alt="User Image">
        </div>
        <div class="info">
        <center>
          <a href="#" class="d-block"><?php echo $_SESSION['nick_usuario'].
          " <br> <b>Rol:</b> ".$_SESSION['nombre_rol'].""; ?></a>
        </center>



   
      </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          
          <?php
            if($_SESSION['rol'] == "1" || $_SESSION['rol'] == "2"){
          ?>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Radicados Entrantes
                <i class="fas fa-angle-right right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="#" onclick="cargar_entrantes();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Radicados Activos</p>
                </a>
              </li>
         
            
              <li class="nav-item">
                <a href="#" onclick="cargar_entrantes_finalizados();" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Radicados Finalizados</p>
                </a>
              </li>
         
            
              <li class="nav-item">
                <a href="#" onclick="cargar_entrantes_archivados();" class="nav-link">
                  <i class="far fa-clone nav-icon"></i>
                  <p>Radicados Archivados</p>
                </a>
              </li>
         
              <?php
                foreach($carpetas as $carpeta){
              ?>
              <li class="nav-item">
                <a  href="#" onclick="cargar_entrantes_carpeta(<?php echo $carpeta['id_carpeta']; ?>);" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $carpeta['nombre_carpeta']; ?></p>
                </a>
              </li>
              <?php
                }
              ?>



            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Radicados Salientes
                <i class="fas fa-angle-right right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              
              <li class="nav-item">
                <a href="#" onclick="cargar_salientes();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Radicados de Salida</p>
                </a>
              </li>                      
             
            </ul>
          </li>


          



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Archivo
                <i class="fas fa-angle-right right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">            
              
            <li class="nav-item">
                <a href="#" onclick="cargar_archivar();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Archivar</p>
                </a>
              </li>  
              
            <li class="nav-item">
                <a href="#" onclick="ver_archivados();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Archivados</p>
                </a>
              </li>  

              <li class="nav-item">
                <a href="#" onclick="cargar_archivadores();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Archivadores</p>
                </a>
              </li>  
                                  

              <li class="nav-item">
                <a href="#" onclick="cargar_unidades();" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Unidades</p>
                </a>
              </li>  

             
            </ul>
          </li>




          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuraci&oacute;n
                <i class="fas fa-angle-right right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
         
            <li class="nav-item">
                <a  href="#" onclick="cargar_carpetas();" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Carpetas</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" onclick="cargar_usuarios();" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="cargar_roles();" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="#" onclick="cargar_parametros();" class="nav-link">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Parametros</p>
                </a>
              </li>
             
            </ul>
          </li>
          


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Administraci&oacute;n
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_dependencias();" class="nav-link">
                  <i class="fas fa-university nav-icon"></i>
                  <p>Dependencias </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_empleados();"  class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Empleados </p>
                </a>
              </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_terceros();"  class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Terceros </p>
                </a>
              </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#"  onclick="cargar_series();" class="nav-link">
                  <i class="fas fa-file-archive nav-icon"></i>
                  <p>Series </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_subseries();" class="nav-link">
                  <i class="far fa-file-archive nav-icon"></i>
                  <p>Subseries </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_tiposdocumentales();" class="nav-link">
                  <i class="far fa-file-archive nav-icon"></i>
                  <p>Tipos documentales </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="cargar_tiposradicado();" class="nav-link">
                  <i class="far fa-file-archive nav-icon"></i>
                  <p>Tipos de radicado</p>
                </a>
              </li>
            </ul>
          </li>
         

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Estad&iacute;sticas
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="radicados_responsable();" class="nav-link">
                  <i class="fas fa-chart-area nav-icon"></i>
                  <p>Por Empleados </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="radicados_dependencias();"  class="nav-link">
                  <i class="fas fa-chart-area nav-icon"></i>
                  <p>Por Dependencia </p>
                </a>
              </li>
            </ul>            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" onclick="radicados_tiporadicado();" class="nav-link">
                  <i class="fas fa-chart-area nav-icon"></i>
                  <p>Por Tipo de Radicado </p>
                </a>
              </li>
            </ul>           
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-pdf"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" onclick="cargar_reporte_entrantes();" class="nav-link">
                  <i class="fas fa-file-pdf nav-icon"></i>
                  <p>Radicados de Entrada</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" onclick="cargar_reporte_salientes();" class="nav-link">
                  <i class="far fas fa-file-pdf nav-icon"></i>
                  <p>Radicados de Salida</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" onclick="cargar_reporte_empleados();" class="nav-link">
                  <i class="far fas fa-file-pdf nav-icon"></i>
                  <p>Empleados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" onclick="cargar_reporte_terceros();" class="nav-link">
                  <i class="far fas fa-file-pdf nav-icon"></i>
                  <p>Terceros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" onclick="cargar_reporte_dependencias();" class="nav-link">
                  <i class="far fas fa-file-pdf nav-icon"></i>
                  <p>Dependencias</p>
                </a>
              </li>


            </ul>    
          </li>

                <br>
                <br>
                <br>
                <br>

         <?php
            }
         ?>


          <?php
            if($_SESSION['rol'] == "3" || $_SESSION['rol'] == "4"){
          ?>

            
              <li class="nav-item">
                <a href="#" onclick="cargar_entrantes_usuario();" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bandeja de Entrada</p>
                </a>
              </li>
             
         
              <?php
                foreach($carpetas as $carpeta){
              ?>
              <li class="nav-item">
                <a  href="#" onclick="cargar_entrantes_carpeta_usuarios(<?php echo $carpeta['id_carpeta']; ?>);" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $carpeta['nombre_carpeta']; ?></p>
                </a>
              </li>
              <?php
                }
              ?>

            
              <li class="nav-item">
                <a href="#" onclick="cargar_carpetas();" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva Carpeta</p>
                </a>
              </li>
         


          <?php
            }
          ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="cuerpo"  class="content">
   




      <?php
          if($_SESSION['rol'] == "1" || $_SESSION['rol'] == "2"){
      ?>

        <br> <br> <br>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Radicados Entrantes</span>
                <span class="info-box-number">
                  <?php echo $numero_entrantes; ?>
                </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-edit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Radicados Activos</span>
                <span class="info-box-number">
                <?php echo $numero_entrantes_activos; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Radicados Finalizados</span>
                <span class="info-box-number">
                <?php echo $numero_entrantes_finalizados; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-clone"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Radicados Archivados</span>
                <span class="info-box-number"><?php echo $numero_entrantes_archivados; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div> <!-- ./col -->
        </div>

        <br> 
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Radicados Salientes</span>
                <span class="info-box-number">
                  <?php echo $numero_salientes; ?>
                </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-university"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dependencias</span>
                <span class="info-box-number">
                <?php echo $dependencias; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">

                <span class="info-box-text">Empleados</span>
                <span class="info-box-number">
                <?php echo $empleados; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Terceros</span>
                <span class="info-box-number"><?php echo $terceros; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div> <!-- ./col -->
        </div>


        <?php
          }
        ?>




      <?php
          if($_SESSION['rol'] == "3" || $_SESSION['rol'] == "4"){     

            $entrantes = $EntrantesModel->getTodosUsuario();

            include("vistas/radicados/entrantes/default_usuario_inicial.php");
     
          }
        ?>






            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a target='_blank' href="https://setpsantamarta.gov.co/">SETP Santa Marta S.A.S.</a></strong>
    Todos los derechos Reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0.
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $this->ruta(); ?>plugins/chart.js/Chart.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo $this->ruta(); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $this->ruta(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $this->ruta(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $this->ruta(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $this->ruta(); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $this->ruta(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->ruta(); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $this->ruta(); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $this->ruta(); ?>dist/js/demo.js"></script>



<script type='text/javascript' src='js/sistema/funciones_sistema.js'></script>      
<!-- DataTables -->

<script type="text/javascript" src="js/plugins/noty/jquery.noty.js" ></script>
    <script type="text/javascript" src="js/plugins/noty/packaged/jquery.noty.packaged.min.js" ></script>
    
<script src="<?php echo $this->ruta(); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo $this->ruta(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script type="text/javascript" src="js/plugins/uploads/jquery.fileUploader.js"></script> 

</body>
</html>
