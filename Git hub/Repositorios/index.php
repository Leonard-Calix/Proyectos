<?php // include("../sistema-seguridad/seguridad.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION["usuario"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/all.css">
    <link rel="shortcut icon" href="img/github-icono.ico" type="image/x-icon">
</head> 
<body>
    <!--nav-->
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
                                            <a class="dropdown-item" href="../perfil/index.php">Signed in as @<?php // echo $_SESSION["usuario"];?></a>
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
    
    <!--fin nav-->
    <div class="div-background">
        <div class="div-margenes">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 co-lg-4 col-xl-4">
                        <div class="col-12">
                            <img src="img/40452199.png" alt="" height="230">
                        </div>
                        <div class="col-12 " style="">
                            <h4>@<?php // echo $_SESSION["usuario"];?></h4>
                        </div>
                        <div class="col-12" >
                            <button type="button" class="btn btn-biografia"  >Add a bio</button>
                        </div>
                        <div class="col-12" style="">
                                <button style="margin-bottom: 10px" type="button" class="btn btn-biografia" >Edit profile</button>
                        </div>       
            </div>
                
             <div class="col-12 col-sm-8 col-md-8 co-lg-8 col-xl-8 row">
                    <div class="col-12 caja-1">
                        <p>ProTip! Updating your profile with your name, location,
                         and a profile picture helps other <a href="#" class="btn anchor-button">Edit Profile</a> GitHub users get to know you.</p>
                    </div>
                    <div class="col-12 barra-nav">
                        <nav>
                            <a href="../perfil" class="item-nav">Overview</a>
                            <a href="#" class="item-nav"><b>Repositories</b></a>
                            <a href="#" class="item-nav">Stars</a>
                            <a href="#" class="item-nav">Followers</a>
                            <a href="#" class="item-nav">Following</a>
                        </nav>
                        <hr>
                    </div>
                   <div class="col-12 row" >
                            <div class="col-8">
                                <input style="width: 60%%" type="text" placeholder="Search repositories…" class="form-control">
                            </div>
                            <div class="col-4">  
                                    <button type="button" class="btn" ><select class="">
                                    <option value="">All</option>
                                    <option value="">private</option>
                                    <option value="">public</option>
                                    <option value="">forks</option>
                                    <option value="">sources</option>
                                    <option value="">mirrors</option>
                                    <option value="">archived</option>
                                </select></button>
                                <a href="../crear-repositorio/index.php"><button type="button" class="btn btn-success btn-nuevo" style="float:right">New</button></a>
                            </div>
                            <!--<div class="col-2">
                                    <button type="button" class="btn btn-success btn-nuevo" style="float:right">New</button>
                            </div> -->
                   </div>
                   <div class="col-12" id="agregar"><hr></div>
                   <!--<div class="col-12">
                       <h5><a href="#">name</a></h5>
                       <p style="font-size:13px">Description</p>
                       <p style="font-size:13px">Uptaded time</p>
                       <hr>
                   </div>-->
                </div>
               
            </div>
            <script src="//www.powr.io/powr.js?external-type=html"></script> 
        <div class="powr-comments" id="b52c4e85_1535128795"></div>
            <hr>
            <div class="col-12 footer">
                    <ul class="footer-1">
                      <li class="elementos el1" style="font-size: 12px">© 2018 GitHub, Inc.</li>
                      <li class="elementos"><a href="#">Terms</a></li>
                      <li class="elementos"><a href="#">Privacy</a></li>
                      <li class="elementos"><a href="#">Security</a></li>
                      <li class="elementos"><a href="#">Status</a></li>
                      <li class="elementos"><a href="#">Help</a></li>
                    </ul>
                    <span style="padding-right: 30px"><a href="#" ><svg  height="24" class="octicon-2 octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg></a></span>
                    <ul class="footer-2">
                        <li class="elementos"><a href="#">Contact Github</a></li>
                        <li class="elementos"><a href="#">API</a></li>
                        <li class="elementos"><a href="#">Training</a></li>
                        <li class="elementos"><a href="#">Shop</a></li>
                        <li class="elementos"><a href="#">Blog</a></li>
                        <li class="elementos"><a href="#">About</a></li>
                      </ul>
                  </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>