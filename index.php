<!DOCTYPE html>
<html class="" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="Sistema Administrativo Soto GoodYear">
  <meta name="author" content="Sturio">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
  <title>Administración Soto GoodYear</title>
  <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="assets/css/theme.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="assets/css/ui.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
<link href="../builder/page-builder/plugins/slider-pips/jquery-ui-slider-pips.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <![endif]-->
</head>
<!-- BEGIN BODY -->
<body class="fixed-sidebar color-primary bg-light-blue theme-sltl">

  <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1><a href="dashboard.html">&nbsp;</a></h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4>Usuario</h4>
                <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                    <i class="online"></i><span>Conectado</span><i class="fa fa-angle-down"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-title">
            <span>Sistema</span>
          </div>
          <ul class="nav nav-sidebar">
            <li class="tm nav-active active"><a href="my-link.html"><i class="icon-home"></i><span>Inicio</span></a></li>
            <li class="tm nav-parent">
              <a href="#"><i class="icon-puzzle"></i><span>Registros</span> <span class="fa arrow"></span></a>
              <ul class="children collapse" style="display: none;">
                <li class=""><a href="submenu1.html">Usuarios</a></li>
                <li class=""><a href="submenu2.html">Clientes</a></li>
                <li class=""><a href="submenu3.html">Productos</a></li>
              </ul>
            </li>
            <li class="tm nav-parent">
              <a href="#"><i class="icon-puzzle"></i><span>Movimientos</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="submenu1.html">Listado</a></li>
                <li><a href="submenu2.html">Cotizador</a></li>
                <li><a href="submenu3.html">Inventarios</a></li>
              </ul>
            </li>
            <li class="tm nav-parent">
              <a href="#"><i class="icon-bulb"></i><span>Utilerias</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="submenu1.html">Credito y Cobranza</a></li>
              </ul>
            </li>
          </ul>
          <div class="sidebar-widgets"></div>
          <div class="sidebar-footer clearfix" style="">
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
            <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
          </div>
        </div>

        <div class="page-content">


          <div class="header">
            <h2><strong>Credito y Cobranza</strong></h2>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="icon-bulb"></i> Credito y Cobranza </h3>
                </div>
                <div class="panel-content p-t-0">
                  <p> Selecciona tipo de Producto. Para filtrar, escribe el código de barras y/o marca y/o clave, y/o modelo y/o nombre. Selecciona un producto de la lista y elige el tipo de operacion a realizar.</p>
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Cliente</label>
                        <input type="text" class="form-control" placeholder="Filtrar por Cliente">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Estatus</label>
                        <input type="text" class="form-control" placeholder="Filtrar por Estatus-">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary btn-square">Buscar</button>
                    </div>
                    <div class="col-md-12 border-top" style="border-top:1px;">
                      <div class="panel-content">
                        <table class="table table-striped tablet-tools">
                          <thead>
                            <tr>
                              <th>Cliente</th>
                              <th>Saldo</th>
                              <th>Facturas Pendientes</th>
                              <th>Estatus</th>
                              <th>Estatus</th>
                              <th>Ultimo Contacto</th>
                              <th>Usuario</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Alfonso Gutierrez Figueroa</td>
                              <td>$-2,930.91</td>
                              <td>F1098A, F0191A</td>
                              <td>Convenido</td>
                              <td>17/03/16</td>
                              <td>Mauricio</td>
                              <td><button type="button" class="btn btn-primary btn-square">Seguimiento</button></td>
                            </tr>
                            <tr>
                              <td>Alfonso Gutierrez Figueroa</td>
                              <td>$-2,930.91</td>
                              <td>F1098A, F0191A</td>
                              <td>Convenido</td>
                              <td>17/03/16</td>
                              <td>Mauricio</td>
                              <td><button type="button" class="btn btn-primary btn-square">Seguimiento</button></td>
                            </tr>
                            <tr>
                              <td>Alfonso Gutierrez Figueroa</td>
                              <td>$-2,930.91</td>
                              <td>F1098A, F0191A</td>
                              <td>Convenido</td>
                              <td>17/03/16</td>
                              <td>Mauricio</td>
                              <td><button type="button" class="btn btn-primary btn-square">Seguimiento</button></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset"> <span>Copyright <span class="copyright">©</span> 2016 </span> <span>Sturio</span>. <span>Soto GoodYear, todos los derechos reservados.. </span> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="loader-overlay">
  <div class="spinner">
    <div class="bounce1">asadfsadf</div>
    <div class="bounce2">qwrqwer</div>
    <div class="bounce3">zxvzxcv</div>
  </div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/plugins/gsap/main-gsap.min.js"></script> <!-- HTML Animations -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
<script src="assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
<script src="assets/plugins/bootbox/bootbox.min.js"></script>
<script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
<script src="assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
<script src="assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="assets/plugins/retina/retina.min.js"></script>  <!-- Retina Display -->
<script src="assets/plugins/jquery-cookies/jquery.cookies.js"></script> <!-- Jquery Cookies, for theme -->
<script src="assets/plugins/bootstrap/js/jasny-bootstrap.min.js"></script> <!-- File Upload and Input Masks -->
<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
<script src="assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
<script src="assets/plugins/bootstrap-loading/lada.min.js"></script> <!-- Buttons Loading State -->
<script src="assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
<script src="assets/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
<script src="assets/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
<script src="assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
<script src="assets/plugins/autosize/autosize.min.js"></script> <!-- Textarea autoresize -->
<script src="assets/plugins/icheck/icheck.min.js"></script> <!-- Icheck -->
<script src="assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
<script src="assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- File Upload and Input Masks -->
<script src="assets/plugins/prettify/prettify.min.js"></script> <!-- Show html code -->
<script src="assets/plugins/slick/slick.min.js"></script> <!-- Slider -->
<script src="assets/plugins/countup/countUp.min.js"></script> <!-- Animated Counter Number -->
<script src="assets/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
<script src="assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
<script src="assets/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
<script src="assets/plugins/visible/jquery.visible.min.js"></script> <!-- Visible in Viewport -->
<script src="assets/js/builder.js"></script>
<script src="assets/js/sidebar_hover.js"></script>
<script src="assets/js/application.js"></script> <!-- Main Application Script -->
<script src="assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
<script src="assets/js/widgets/notes.js"></script>
<script src="assets/js/quickview.js"></script> <!-- Quickview Script -->
<script src="assets/js/pages/search.js"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
<script src="assets/plugins/summernote/summernote.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<script src="assets/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/js/widgets/widget_weather.js"></script>
<script src="assets/js/widgets/todo_list.js"></script>
<script src="../builder/page-builder/plugins/slider-pips/jquery-ui-slider-pips.min.js"></script>
<script src="../builder/page-builder/plugins/saveas/saveAs.js"></script>
<script src="../builder/page-builder/js/builder_page.js"></script>
<!-- END PAGE SCRIPTS -->
</body>
</html>
