<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro Hotelero</title>
 	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="../img/logo-trivago.png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- jquery-->
  <script type="text/javascript" src="../libs/jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--bootstrap date picker -->
  <link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
  <script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- nuevos iconos -->
  <link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  	<link rel="stylesheet" href="../css/estandares.css">
    <style type="text/css">
      @media screen and (min-width: 1500px){
           #form-registro-hotelero{
              width: 40%;
              margin-left: 20px;
            }

      }  

      @media screen and (max-width: 1500px){

           #info-registro-hotelero{
              width: 100%;
            }

             #form-registro-hotelero{
              width: 100%;
              margin: 40px;
            }
      }    
    </style>
</head>
<body>

<div style="max-width: 2000px; box-sizing: border-box;">
   <nav class="navbar  navbar-fixed-top" style="background-color: #ffffff; border-color: #9a9d9f; width: 100%" >
	   <div class="container " style="padding: 12px; height: 60px; width: 100%;">  
	     <div class=row style="width: 100%">
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="width: 100%;">
     	        <a href="#"> <img src="../img/trivagoHM.png" style="margin-top: 5px"> </a>
          </div>
       </div>
     </div>
     <div style="background-color: #9a9d9f; height: 1px; border-color:#9a9d9f; "></div>
  </nav>


  <div class="container-fluid" style="padding-bottom: 25px; padding-top: 75px; width: 100%;">
    <div class="row" style="width: 100%;">
      
      <div id="info-registro-hotelero" class="col-md-6" style="text-align: justify;  ">
  	    <div class="card card-inverse" style="background-color: #5e666a; border-color: #5e666a; padding: 10px;background-color: rgba(0,0,0,0.65); margin-top: 25px; margin-left: 25px;">
         <div class="card-block">
            <h3 class="card-title" style="color:#ffffff; font-weight: 600; padding: 20px">Encuentre su hotel y cree una cuenta gratis</h3>
            <p class="card-text" style="color:#ffffff; font-size-adjust: 15px; padding: 20px;" > Está a un paso de empezar a gestionar sus hoteles en trivago. Rellene el formulario para ayudarnos a verificar su identidad. Sus datos personales están a salvo y no los compartiremos.</p>
         </div>
       </div>
      </div>
    <!--</div>
  </div>-->
    <form method="GET" id="form2">
      <div id="form-registro-hotelero" class="col-md-6" style="border-style: ridge;padding-bottom: 15px;  margin-top: 22px; margin-left: 10px; display: inline-block;"> 
  	   	<div style="padding: 20px;">
  		  	<table  >	
  			   <tr>    
  			   		<td colspan="2"  style="padding-top: 20px;">
  			   			<label for="txt_hotel">Nombre Del Hotel</label>
                <select name="nombre_hotel" id="txt_hotel" placeholder="Busque su Hotel" style="width: 95%; height: 50px;">
                <option value="" selected="">Seleccione Su Hotel</option>
                <option value="1">Hotel Marriot</option>
                <option value="2">Hotel Clarion</option>

                <option value="3">Hotel Sula</option>

                <option value="4">Hotel San Jose</option>

                <option value="5">Hotel Internacional</option>
                <option value="6">Kingston National Hotel</option>
                <option value="7">Vancouver Resort</option>
                <option value="8"> Heaven of toronto</option>
                <option value="9">Spirit of York</option>
                <option value="10">Sky of York</option>
                <option value="11"> Miami beach Hotel</option>
                <option value="12">Chicagos Galaxy</option>
                <option value="13">The Grand Hotel</option>
                <option value="14">Spirit of San Francisco</option>
                <option value="15">DF internacional</option>
                <option value="16">Real Guadalajara</option>
                <option value="17">Cancun Resort</option>
                <option value="18">Cielo de Cancun</option>
                <option value="19"> Real Bogota</option>
                <option value="20">CL Medellin</option>
                <option value="21">Sao Paulo BZ</option>
                <option value="22">Rio</option>
                <option value="23">Grupo BA</option>
                <option value="24">Hotel Plata</option>
                <option value="25">Grand Hotel Le Paris</option>
                <option value="26">Carlson Marsella</option>
                <option value="27">EG Strarburg</option>
                <option value="28">Westin Palace</option>
                <option value="29">Mercer Palace</option>

                <option value="30"> Bulgari Hotel</option>
                <option value="31">45 Park Laner</option>
                <option value="32"> The Halkin</option>
                <option value="33"> Aldon Kenskpinki </option>
                <option value="34">Arena of Heaven </option>
                <option value="35"> Westin Roma</option>
                <option value="36">Milano Amore</option>
                <option value="37"> Grand Genova X</option>
                <option value="38">CSKA International</option>
                <option value="39">Grand Zenit</option>
                <option value="40">Ramses Hilton</option>
                <option value="41">54 On Bath </option>
                <option value="42">Banyan Treen Ringha</option>
                <option value="43">Pudong Century Park</option>
                <option value="44">Ramada Encore</option>
                <option value="45"> Sakura Hotel Ikebukuro</option>
                <option value="46">Sunchine City Prince</option>
                <option value="47"> Shinbuya Granbell Hotel</option>
                <option value="48"> IBIS BUGDGE ST PETERS</option>


                <option value="49">Kiwi International Hotel</option>

                
                
                
                










                </select>
 	 			   		  <p class="hint-formfield p-0">
  			   		</p>
 				    </td>
  			   </tr>
  			   <tr>
  			   	  <td colspan="2"  style="padding-top: 20px;">
  			   			<label for="slc_tra">Tratamiento</label>
  			   			<select name="selcttra" class="form-control" id="slc_tra" class="form-control" style="height: 50px; width: 95%;"> 
  			   			  	<option value="1">Señor</option>
                    <option value="2">Señora</option>
                </select>
  			   		</td>
  			   </tr>  
  			 
  			   <tr style="padding-top: 30px;">
  			   		<td>
                <div class="form-group"  style="padding-top: 20px;">
                    <label  for="nombre-usr"> Nombre</label>
                    <input type="text" name="nombre_txt" id="nombre_txt" class="form-control"  style="width: 90%; height: 50px;" >
                </div>
              </td>
              <td  style="padding-top: 20px;">
  			   	    <div class="form-group" style="padding-right: 80px">
  						    <label class="Apellido" for="apellido-usr">Apellido</label>
  					     	<input type="text" class="form-control"  name="apellido-txt" id="apellido-txt" style="width: 153%; height: 50px"> 
						    </div>
              </td>
  			   </tr>	
  			  
  			   	<tr>
  			   		  <td colspan="2"  style="padding-top: 20px;">
  			   		    <label for="correo">E-mail </label>
  			   		  	<input type="E-mail" class="form-control" name="emailof" id="correo" placeholder="E-mail@trivago.com" style="height: 50px; width: 95%;">
  			   		  </td>
  			   	</tr>
  			   	<tr>
  			   		  <td colspan="2"  style="padding-top: 20px;">
  			   		    <label for="pwd">Contraseña </label>
  			   		    <input type="password" class="form-control" name="password_txt" id="pwd" placeholder="*******" style="height: 50px; width: 95%;">
  			   		   
  			   		  </td>
  			   	</tr>
  			    <tr>
  			       	<td colspan="2"  style="padding-top: 20px;">
     		             <input type="checkbox" name="chk_frances" id="chk_frances"> Confirmo que soy un empleado autorizado y acepto los terminos y condiciones de Trivago Hotel Manager 
                </td>
            </tr>
            <tr>
               <th>

               <button id="btn_guardar_ajustes"  type="submit" class="btn btn-warning"   >Crear Cuenta Gratuita</button> 
                              	
               </th>	
            </tr>
      </table>
      <div style="background-color: #ebeced; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 10px">
       Ya tienes cuenta?<a href="#"> Inicie Sesion</a>
     </div>
     </div>
     
   </div>
   </div>
   </div>

  </form>

 		<div style="background-color: #293339;"  >
 		  <div class="row">
		 	       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top: 15px; padding-left: 200px;" >
   	       	     	       <table>
   	       	     	          <th style="color: #ffffff;"  >trivago GmbH <small style="color: #ffffff; width: px" >Bennigsen-Platz 1, 40474 Düsseldorf, Deutschland</small><th>sassdad
   	       	     	        </table>




   	       	     	 
   	    		    </div>
   	    		    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="padding-right: 100px; padding-top: 45px; padding-left: 200px " >
   	    		         <select name="slctpais" id="slctpaisid" class="form-control"  
   	    		         style="background-color: #293339;; color: #ffffff; height: 45px;"> 
   	    		         	<option style="padding: 10px" value="1">
   	    		         	España	
   	    		         	</option>
   	    		         	<option value="2">
   	    		         		Japon
   	    		         	</option>
   	    		         	<option value="3">
   	    		         		USA
   	    		         	</option>
   	    		         	<option value="4">
   	    		         		Honduras
   	    		         	</option>
   	    		         	<option value="5">
   	    		         		Mexico
   	    		         	</option>


   	    		         </select>
   	    		    	
   	    		    </div>
                 </div>
                 <div style="padding-left: 175px">
                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px; margin: 10px;">
                 	 </a> 

                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px; margin-right: 10px" >
                 	 </a>

                 	 <a href="www.faceook.com"><img src="../img/facebook.png" alt="..." class="img-circle" style="width: 32px; height: 32px">
                 	 </a>

                 </div>
              

             <div class="container-fluid" style="background-color: #293339; padding: 30px;">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff; text-align: left; padding-left: 145px">
               
			   Nosotros<br>
			   Empleo<br>
			   Puestos vacantes<br>
			   Empleo<br>
			   Prensa<br>
			   Ayuda<br>
			   Expedia<br>
     	
     		  </div>
     		  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff;  padding: 50px; padding-top: 0px;">
     		    Aplicaciones móviles: estés donde estés<br>
				Hotel Manager: la plataforma para hoteleros<br>
				Blog de Hotel Manager: ideas para hoteleros<br>
				Comunidad: para amantes de los hoteles<br>
				Room5: inspiración para tus viajes<br>
     	
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff; ">
     	       Preguntas frecuentes<br>
				Contacto<br>
				Iniciar sesión<br>
				Restablecer contraseña<br>
				Términos y condiciones<br>
				Política de privacidad<br>
				Información legal<br>
              </div>
            </div>  




            <div class="container-fluid" style="background-color: #37454d; padding: 35px;" >
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="color: #ffffff">

                <img src="../img/logoabajo.png" style="padding-left: 80px;"><br>
                 <small style="padding: 20px; color:#9ba2a6;">       Copyright 2017 | trivago Todos los derechos reservados</small>


              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
              </div>
            	

            </div>
            

               
 	   	 </div>
      </div> 		
  		<script type="text/javascript" src="../js/registro-hoteleros.js" >  </script>
</body>
</html>