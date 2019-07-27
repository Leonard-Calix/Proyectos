<?php // include("../sistema-seguridad/seguridad.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create a new Gist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/all.css">
    <link rel="shortcut icon" href="img/github-icono.ico" type="image/x-icon">
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
                                    <a class="nav-link anchor-nav" href="../generica/index.html">Pull request</a>
                                </li>
        
                                <li class="nav-item ">
                                    <a class="nav-link anchor-nav" href="../generica/index.html">Issues</a>
                                </li>
        
                                <li class="nav-item ">
                                    <a class="nav-link anchor-nav" href="../generica/index.html">Marketplace</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link anchor-nav" href="../generica/index.html">Explore</a>
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
                                            <a class="dropdown-item" href="../generica/index.html">Import repository</a>
                                            <a class="dropdown-item" href="../new-gist/index.php">New gist</a>
                                            <a class="dropdown-item" href="../generica/index.html">New organization</a>
                                            <!--<div class="dropdown-divider">
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>-->
                                    </li>
                                    
                                    <li class="nav-item dropdown li-custom">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/40452199.png" height="20px;" alt="logo usuario" class="img-usuarios">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Signed in as @<?php echo $_SESSION["usuario"];?></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../perfil/index.php">Your profile</a>
                                            <a class="dropdown-item" href="../repositorios/index.php">Your repositories</a>
                                            <a class="dropdown-item" href="#">Your stars</a>
                                            <a class="dropdown-item" href="../new-gist/mostrar-gist.php">Your gists</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="../generica.html">Help</a>
                                            <a class="dropdown-item" href="../generica.html">Settings</a>
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
                <div class="background">
                  <div class="margenes">

                        <div class="col-12 encabezado" style="padding:40px;">
                        <h1 class="titulo">Instantly share code, notes, and snippets.</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="margenes">
                    <div class="col-12">
                         
                        <input id="gist-description" type="text" class="form-control input-1" placeholder="Gist description…" style="margin-bottom:10px">
                        
                        <div class=" col-12 header row " style="margin:0%">
                            <div class="col-8">
                                <input id="nombre-extension" style="width:40%" type="text" class="form-control" placeholder="Filename including extension…">
                            </div>
                            <div class="col-4" >
                                <select name="" id="" class="form-select">
                                    <option value="">Spaces</option>
                                    <option value="">Tabs</option>
                                </select>
                                <select name="" id="" class="form-select">
                                        <option value="">2</option>
                                        <option value="">4</option>
                                        <option value="">8</option>
                                </select>
                                <select name="" id="" class="form-select">
                                        <option value="">No wrap</option>
                                        <option value="">Soft wrap</option>
                                </select>

                            </div>
                            
                        </div>
                        <div class="col-12 col-xl-12 " style="padding:0%">
                            <textarea name="" id="contenido-gist" cols="" rows="17"></textarea>
                        </div>
                        <div class="col-12 row">
                            <div class="col-6"style="padding:0%" >
                                <button type="button" class="btn btn-agregar">Add file</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-secreto" id="">Create secret gist</button>
                               <!-- <a  href="mostrar.html"><button type="button" class="btn btn-agregar" id="btn-crear-gist"> Create public gist</button></a>-->
                                <!--<a href="#" class="btn btn-agregar" id="btn-crear-gist"> Create public gist</a>-->
                                
                                <button type="button" class="btn btn-agregar" id="btn-crear-gist"> Create public gist</button>
                                
                            </div>
                        </div>
                    </div>    
                    <hr>

                </div>
                
                
        


    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script> 
    <script src="js/controlador-gist.js"></script>  
</body>
</html>