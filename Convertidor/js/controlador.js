	

	$("#btn-convertir").click(function(){
		var centigrados ;
		var kelvin ;
		var farenheit;
		console.log("hola");
    
        if ($("#Centigrados").val() == '' && $("#Farenheit").val() == '' && $("#Kelvin").val() == '') {
        	alert("Por Favor Ingrese Un Valor");
        }

           if ($("#Centigrados").val() != '') {
               centigrados  = parseInt($("#Centigrados").val());
               farenheit  = 0;
    	       kelvin = 0;

           }
           if ( $("#Kelvin").val() != '') {
               kelvin  = parseInt($("#Kelvin").val());
               farenheit  = 0;
    	       centigrados = 0;
    	       console.log("hola");

           }
           if ($("#Farenheit").val() != '') {
               farenheit  = parseInt($("#Farenheit").val());
               centigrados  = 0;
    	       kelvin = 0;

           }
           
            console.log(centigrados );

            if (farenheit == 0 && centigrados == 0 && kelvin != 0 ) {

            	var convercionC = kelvin - 273 ;
            	var convercionF = (9/5)*(kelvin-273.15) + 32;
            	$("#Centigrados").val(convercionC);
				$("#Farenheit").val(convercionF);
				console.log("hola"+convercionC + convercionF);

            }
            if (farenheit == 0 && centigrados != 0 && kelvin == 0  ) {

            	var convercionK = centigrados + 273.15 ;
            	var convercionF = (1.80*centigrados) + 32 ;
            	$("#Kelvin").val(convercionK);
				$("#Farenheit").val(convercionF);
            	
            }
            if (farenheit != 0 && centigrados == 0 && kelvin == 0  ) {

            	var convercionC = (farenheit - 32 ) / 1.80 ;
            	var convercionK = (( farenheit - 32 ) / 1.80) + 273.15;
            	$("#Centigrados").val(convercionC);
				$("#Kelvin").val(convercionK);
            }

           

		});

	$("#btn-limpiar").click(function(){
		
			//JS Nativo:  document.getElementById("txt-usuario").value
			//alert("JQuery: " + $("#txt-usuario").val());

			//JS Nativo:  document.getElementById("contenido").innerHTML = document.getElementById("txt-usuario").value +", "+ document.getElementById("txt-password").value;
			//Si se quiere anexar contenido html utilizar la function append() en vez de html()
			//$("#contenido").html("<h1>"+$("#txt-usuario").val() + "," + $("#txt-password").val()+"</h1>");
			
			//JS Nativo: document.getElementById("txt-usuario").classList.add("input-invalido");
			//$("#txt-usuario").addClass("input-invalido"); //Utilizar removeClass para quitar una clase css
            $("#Centigrados").val("");
			$("#Farenheit").val("");
			$("#Kelvin").val("");

		});