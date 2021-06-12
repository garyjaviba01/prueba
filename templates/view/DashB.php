<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="au theme templates">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme templates">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!-- Title Page-->
    <title>PRUEBA | Konecta </title>
    <!-- Fontfaces CSS-->
    <link href="templates/view/css/font-face.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="templates/view/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="templates/view/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="templates/view/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="icon" type="image/png"  href="templates/view/images/icon-tit.png">
    <!-- Main CSS-->
    <link href="templates/view/css/theme.css" rel="stylesheet" media="all">
    <script src="templates/view/js/jquery.js"></script>
    <script src="templates/view/js/javascript.js" ></script>
    <script  >
      var veces=0;
      var temp3;
      $( document ).ready(function() {
      Cargar('templates/view/Productos.php','container')
      
      
      });
        
         
    </script>
  </head>
  <body class="animsition">
    <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="#">
            <h1>LOGO</h1>
            </a>
            <button class="hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </button>
          </div>
        </div>
      </div> 
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li>
              <i style="color:#ced4da;">Usuario - rol </i><br><br>
            </li>
            <li onclick="Cargar('templates/view/Productos.php','container')"  >
              <a class="js-arrow" href="#" >
              Crear</a>
            </li>
            <li onclick="MostrarTabla('listMat')" >
              <a href="#" >
              Listado</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="index.html">
        <h1>LOGO</h1>
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li>
              <i style="color:#ced4da;">Usuario - rol </i><br><br>
            </li>
            <li onclick="Cargar('templates/view/Productos.php','container');CambiarFoco(0)" class="">
              <a class="js-arrow itemMenu itemMenuActive" href="#" >
              Crear</a>
            </li>
            <li onclick="MostrarTabla('listPro');CambiarFoco(1)" class="">
              <a  class="itemMenu" href="#" >
              Listado</a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-container" >
    <header class="header-desktop" >
      <div class="section__content section__content--p30">
      <div class="container-fluid">
      <div class="header-wrap">
        <div class="header-button">
          <div class="noti-wrap">
            <div class="noti__item js-item-menu" onclick="location.reload()">
              <a href="/" style="color:#fcc15a;">Productos</a>
            </div>
            <div class="noti__item js-item-menu">
              <li class="fa fa-times-circle" style="color:#FFF;">
                </i>
                <div class="mess-dropdown js-dropdown" >
                  <br>
                  <a href="javascript:alert('sin funcion')" style="color:#000;font-family:'Material-Design-Iconic-Font';">Salir</a> 
                  <br><br>
                </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="main-content" id="header">
    <div class="section__content section__content--p30">
    <div class="container-fluid" id="container">
    </div>
    </div>
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="mediumModalLabel">Job Info</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body" id="modal-body">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <div id="button"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="mediumModalLabel2">Work Order Info</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body" id="modal-body2">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    <!-- Jquery JS-->
    <script src="templates/view/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="templates/view/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="templates/view/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="templates/view/vendor/slick/slick.min.js"></script>
    <script src="templates/view/vendor/wow/wow.min.js"></script>
    <script src="templates/view/vendor/animsition/animsition.min.js"></script>
    <script src="templates/view/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="templates/view/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="templates/view/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="templates/view/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="templates/view/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="templates/view/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="templates/view/vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="templates/view/js/main.js"></script>
  </body>
</html>

  
  
