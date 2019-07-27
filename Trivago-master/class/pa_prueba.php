<?php 
$conn = oci_connect('DB_FLIPBOARD', 'oracle', 'localhost/XE','AL32UTF8');
			if (!$conn) {
			    $e = oci_error();
			    echo "Ups. Algo anda mal con el servidor.";
			    exit;
			}		
			$sql="
				BEGIN
				    P_LIKE(
				        :codigoNoticia,
						:codigoUsuario,
				        :codigoResultado,
				        :mensajeResultado
				    );
				END;
					";
			$procedure = oci_parse($conn, $sql);
			oci_bind_by_name($procedure, ':codigoNoticia', $codigoNoticia);//las variables de entrada, deben de haber sido declaradas previamente (in)
			oci_bind_by_name($procedure, ':codigoUsuario', $codigoUsuario);//(in)
			oci_bind_by_name($procedure, ':codigoResultado', $codigoRespuesta , 40);//No es necesario declarar previamente las variables de salida (out)
			oci_bind_by_name($procedure, ':mensajeResultado', $mensajeRespuesta , 200);//(out)
			oci_execute($procedure);			
			$resultado['codigoResp'] = $codigoRespuesta;
			$resultado['mensajeResp'] = $mensajeRespuesta;	
			$resultado['codigoNoticia'] = $codigoNoticia;			
			oci_free_statement($procedure);
			oci_close($conn);

 ?>			