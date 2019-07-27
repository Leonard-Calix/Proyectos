<?php //include("../sistema-seguridad/seguridad.php"); ?>
<?php 
    include_once '../conexion/conexionOracle.php';
    $conexion = new Conexion();



 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create a New Repository</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/github-icono.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/all.css">
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

    <!--aqui empieza todo el contenido-->
    <div class="main-container">


        <div>
            <h2 class="h2-font24px">Create a new repository</h2>
            <p class="p-font14px">A repository contains all the files for your project, including the revision history.</p>
        </div>

        <hr class="hr-1">

        <!--donde empieza todo lo que es formulario
        (probablemente habra que aniadir la etiqueta form)-->
        <div>

          <div class="dis-inlineblock">
            <span><label for="sct-usuario">Owner</label></span>
            <span><select id="sct-usuario" class="form-control form-custom select-custom">
              <option><?php echo $_SESSION["usuario"];?></option>
            </select></span>
          </div>

          <span class="dis-inlineblock"><p class="pclass dis-inlineblock">/</p></span>

          <div class="dis-inlineblock">
            <span><label for="txt-repository">Repository name</label></span>
            <span><input type="text" class="form-control" id="txt-repository"></span>
          </div>

          <p>Great repository names are short and memorable. Need inspiration? How about bug-free-lamp.</p>

          <div>
            <label for="txt-descripcion">Description <span style="color: gray;">(optional)</span></label>
            <input type="text" class="form-control" id="txt-descripcion">
          </div>

          <hr>

            <div>
                <table>
                <tr>
                    <td>
                        <input type="radio" name="radio-tipo" id="rbt-public" value="public" class="rbt-margin">
                    </td>
                    <td>
                        <label for="rbt-public"><i class="fas fa-book font-book-size"></i></label>
                    </td>
                    <td>
                        <label for="rbt-public" style="margin-bottom: 0px;">Public</label>
                        <p class="p-custom">Anyone can see this repository. You choose who can commit.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="radio-tipo" id="rbt-private" value="private" class="rbt-margin">
                    </td>
                    <td>
                        <label for="rbt-private"><i class="fas fa-lock font-lock-size"></i></label>
                    </td>
                    <td>
                        <label for="rbt-private" style="margin-bottom: 0px;">Private</label>
                        <p class="p-custom">You choose who can see and commit to this repository.</p>
                    </td>
                </tr>
                </table>

                
                <!--div temporalmente quitado
                    IMPORTANTE programarlo despues-->
                <div style="padding-left: 7%;" id="div-mostrar-private" class="display-none">
                    <div>
                        <i class="i-custom">Upgrade my account</i>
                        <p class="p-custom">In order to make this repository private, you’ll need to upgrade your account. <br>
                                This will cost $7 / month and you’ll get unlimited private repositories. You can cancel anytime.</p>
                    </div>

                    <span class="span-pago">Choose your payment method</span>
                    <div class="form-check form-check-inline ml-18px">
                        <input class="form-check-input rbt-credit" type="radio" name="modo-pago" id="rbt-credit" value="credit">
                        <label class="form-check-label label-credit" for="rbt-credit">Credit card</label>
                    

                    
                        <input class="form-check-input rbt-paypal" type="radio" name="modo-pago" id="rbt-paypal" value="paypal">
                        <label class="form-check-label label-paypal" for="rbt-paypal">PayPal account</label>
                    </div>

                </div>
            

            </div>

            <hr style="margin: 0px">

            <div class="div-chk">
                <input type="checkbox" id="chk-repository" class="chk-repository">
                <label for="chk-repository" class="label-chk">Initialize this repository with a README</label>
                <span class="p-custom" style="display: block;">This will let you immediately clone the repository to your computer. Skip this step if you’re importing an existing repository.</span>
                <div class="dis-inlineblock">
                    <div class="dropdown">
                        <button class="btn form-custom dropdown-toggle select-custom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Add .gitignore:
                                <span>none</span><!--cuando se haga la idea del select recordar tomar el valor seleccionado y anexarlo al span con un .val tal vez funciona-->
                        </button>
                        <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
                            <!--aqui se hara la lista en php-->
                            <a class="dropdown-item" href="#"><strong>.gitignore</strong></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><input type="text" class="form-control width-selected"></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">C++</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">java</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">HTML</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">CSS</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">javascript</option></a>
                        </div>
                    </div>
                </div>

                <div class="dis-inlineblock">
                    <div class="dropdown">
                        <button class="btn form-custom dropdown-toggle select-custom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Add a license:
                                <span>none</span><!--cuando se haga la idea del select recordar tomar el valor seleccionado y anexarlo al span con un .val tal vez funciona-->
                        </button>
                        <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
                            <!--aqui se hara la lista en php-->
                            <a class="dropdown-item" href="#"><strong>Licenses</strong></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><input type="text" class="form-control width-selected"></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">license 1</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">license 2</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">license 3</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">license 4</option></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><option class="option-custom" value="">license 5</option></a>
                        </div>
                    </div>
                </div>

            </div>

            

        </div>
        <!--termina la etiqueta de formulario-->
        <hr>
        <button type="button" class="btn btn-success btn-signup" id="crear-repositorio">Create repository</button>
    </div>

    

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
                
                <a href="../landing-page/index.html" class="github-icon-margin"><i class="fab fa-github github-icon-custom"></i></a>

                <ul class="display-flex ul-footer">
                    <li class="mr-16px"><a href="#" class="fontsize-12px">Contact GitHub</a></li>
                    <li class="mr-16px"><a href="#" class="fontsize-12px">Pricing</a></li>
                    <li class="mr-16px"><a href="#" class="fontsize-12px">API</a></li>
                    <li class="mr-16px"><a href="#" class="fontsize-12px">Training</a></li>
                    <li class="mr-16px"><a href="#" class="fontsize-12px">Blog</a></li>
                    <li><a href="#" class="fontsize-12px">About</a></li>
                </ul>
            </div>
    


    <script src="js/jquery.min.js"></script>
    <script src="js/controlador.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
</body>
</html>