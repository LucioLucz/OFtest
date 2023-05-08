<?php

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      
        $secret = '6LdQpRoUAAAAAHTdo5-_0A5feByQ_cuy_L2Yf3SK';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
			
		if($responseData->success){
			
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$mensaje = $_POST['mensaje']; 
			$para = 'ventas@o-f.com.ar'; /*mail en el que se vá a recibir*/
			//$para = 'diego@mink.com.ar'; /*mail en el que se vá a recibir*/
			$titulo = 'NUEVO CONTACTO DESDE EL SITIO';
			
			$header = "MIME-Version: 1.0" . "\r\n";
			$header = "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$header = "From:operaciones@lyon-logistics.com.ar"; /*mail del cual viene. Debe ser un mail con el @ del dominio si o si*/
			
			$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
			
			
			if (mail($para, $titulo, $msjCorreo, $header)) {
				echo json_encode(array("respuesta"=>"OK"));
				
			}else{
				echo json_encode(array("respuesta"=>"NO"));
				}
			

		}else{
			echo json_encode(array("respuesta"=>"reload"));
			}

		
}



?>




