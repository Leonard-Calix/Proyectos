<?php // include("../sistema-seguridad/seguridad.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GitHub</title>
    <link rel="icon" href="img/fluidicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-custom">
        <div class="container div-nav-custom">
            <a class="navbar-brand" href="../inicio/index.php"><i class="fab fa-github github-icon-nav"></i></a>

                <form class="form-inline my-2 my-lg-0 form-display-none">
                    <input class="form-control txt-search" type="text" placeholder="Search or jump to…" aria-label="Search">
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                                    
                        <li class="nav-item">
                            <a class="nav-link anchor-nav" href="#">Pull request</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link anchor-nav" href="#">Issues</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link anchor-nav" href="#">Marketplace</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link anchor-nav" href="#">Explore</a>
                        </li>

                        <div class="container div-position-custom">
                            <li class="nav-item li-custom">
                                <a href="#" class="nav-link"><i class="fas fa-bell font-awesome-customs"></i></a>
                            </li>

                            <li class="nav-item dropdown li-custom">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-plus font-awesome-customs"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../crear-repositorio/index.php">New repository</a>
                                    <a class="dropdown-item" href="#">Import repository</a>
                                    <a class="dropdown-item" href="../new-gist/index.php">New gist</a>
                                    <a class="dropdown-item" href="#">New organization</a>
                                    <!--<div class="dropdown-divider">
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>-->
                            </li>
                            
                            <li class="nav-item dropdown li-custom">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/40452199.png" alt="logo usuario" class="img-usuarios">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../perfil/index.php">Signed in as @<?php echo $_SESSION["usuario"];?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../perfil/index.php">Your profile</a>
                                    <a class="dropdown-item" href="../Repositorios/index.php">Your repositories</a>
                                    <a class="dropdown-item" href="#">Your stars</a>
                                    <a class="dropdown-item" href="../new-gist/mostrar-gist.php">Your gists</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Help</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="../sistema-seguridad/logout.php">Sign out</a>
                                </div>
                                <!--<div class="dropdown-divider">
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>-->
                            </li>
                    </div>
                                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="fondo">
      <div class="container">
        <div class="contenido-superior">
            <h2 id="titulo">Learn Git and GitHub without any code!</h2>
            <p class="parrafo-superior">Using the Hello World guide, you’ll create a repository, start a branch, write comments, and open a<br> pull request.</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <button type="button" class="btn btn-success superior">Read the guide</button>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <a href="../crear-repositorio/index.php"><button type="button" class="btn superior-blanco">Start a project</button></a>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="div-repositories">
              <h3 style="display: inline-block;">Gists</h3>
              <a href="../crear-repositorio/index.php"><button style="display: inline-block;" type="button" class="btn btn-success inferior">New repository</button></a>
            </div>
            <div class="div-repositories-lista">
              <ul id="ul-repositorios">
                <!--<li class="li-list-style"><i class="fas fa-book fa-book-custom"></i><a href="#" class="anchor-list-repositories">dataderepositorios</a></li>
                <li class="li-list-style"><i class="fas fa-book fa-book-custom"></i><a href="#" class="anchor-list-repositories">dataderepositorios</a></li>
                <li class="li-list-style"><i class="fas fa-book fa-book-custom"></i><a href="#" class="anchor-list-repositories">dataderepositorios</a></li>
                <li class="li-list-style"><i class="fas fa-book fa-book-custom"></i><a href="#" class="anchor-list-repositories">dataderepositorios</a></li>-->
              </ul>
            </div>
          </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
              <div class="encabezado">
                <h6>Browse activity</h6><a href="#" style="margin-left: auto;">Discover <br>repositories</a>
              </div>
              <hr>
              <div class="box">
                <h2>Discover interesting projects and people to populate<br> your personal news feed.</h2>
                <p style="font-size: 16px">Your news feed helps you keep up with recent activity on repositories you <a class="anchors" href="#">watch</a><br> and people you <a class="anchors" href="#"> follow.</a></p>
                <button type="button" class="btn btn-outline">Explore Github</button>
              </div>
            </div> 
        </div> 
        <hr>
        <div class="display-flex div-footer">
            <ul class="display-flex ul-footer">
                <li class="fontsize-12px mr-16px">
                    © 2018 GitHub, Inc.
                </li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Terms</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Privacy</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Security</a></li>
                <li><a href="#" class="fontsize-12px">Status</a></li>
            </ul>
            
            <a href="../inicio/index.php" class="github-icon-margin"><i class="fab fa-github github-icon-custom"></i></a>

            <ul class="display-flex ul-footer">
                <li class="mr-16px"><a href="#" class="fontsize-12px">Contact GitHub</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Pricing</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">API</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Training</a></li>
                <li class="mr-16px"><a href="#" class="fontsize-12px">Blog</a></li>
                <li><a href="#" class="fontsize-12px">About</a></li>
            </ul>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/controlador.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>