<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Maquinas Recreativas</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text" >
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="Digital" class="light-logo" />

                     </span>
                     <!-- Logo icon -->
                     <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">


                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inicio</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="maquinas.php" aria-expanded="false"><i class="mdi mdi-wrench"></i><span class="hide-menu">Maquinas</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="proveedor.php" aria-expanded="false"><i class="mdi mdi-truck"></i><span class="hide-menu">Proveedor</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Tecnico.php" aria-expanded="false"><i class="mdi mdi-human-greeting"></i><span class="hide-menu">Tecnicos</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="comercio.php" aria-expanded="false"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Comercio</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Informe.php" aria-expanded="false"><i class="mdi mdi-note-text"></i><span class="hide-menu">Informes</span></a></li>


                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->



                <!-- ============================================================== -->
                <!-- Contenido -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="container">
                        <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
                            <ul class="nav nav-tabs justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>                  
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Comercio</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="userList" class="table table-bordered table-hover table-striped">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Zona</th>
                                                            <th scope="col">Tipo Comercio</th>

                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tabla-comercio" >

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Comercio</h4>
                                        </div>
                                        <div class="card-body">
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Zona</label>
                                                    <div class="col-lg-9">
                                                        <input id="zona" class="form-control" type="text" >
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Tipo Comercio</label>
                                                    <div class="col-lg-9">
                                                        <input id="tipo" class="form-control" type="email">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-lg-12 text-center">
                                                        <input type="reset" class="btn btn-secondary" value="Cancelar">
                                                        <button class="btn btn-primary" onclick="agregar();" >Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <form class="form" role="form" autocomplete="off">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Zona</label>
                                <div class="col-lg-9">
                                    <input id="zona2" class="form-control" type="text" >
                                    <input type="hidden" id="id" name="">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Tipo Comercio</label>
                                <div class="col-lg-9">
                                    <input id="tipo2" class="form-control" type="email">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button onclick="actualizar();" type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="js/comercio.js"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
        <!-- Charts js Files -->
        <script src="assets/libs/flot/excanvas.js"></script>
        <script src="assets/libs/flot/jquery.flot.js"></script>
        <script src="assets/libs/flot/jquery.flot.pie.js"></script>
        <script src="assets/libs/flot/jquery.flot.time.js"></script>
        <script src="assets/libs/flot/jquery.flot.stack.js"></script>
        <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="dist/js/pages/chart/chart-page-init.js"></script>

    </body>

    </html>