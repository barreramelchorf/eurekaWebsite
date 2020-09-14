<?php 
      $nombrec=$_POST['nameContact'];
	  $correoc=$_POST['emailContact'];
	  $mensajec=$_POST['messageContact'];

      $contenido='<br> <span style="font-weight:300; font-family:Arial; color:#333333;">Nombre:</span> 
	  <span style="font-weight:300; font-family:Arial; color:#ff4800;">'.$nombrec.'</span> 
	  
	  <br><br>
	  <span style="font-weight:300; font-family:Arial; color:#333333;">Correo electronico:</span> 
	  <span style="font-weight:300; font-family:Arial; color:#ff4800;">'.$correoc.'</span>
	  
	  <br><br>
	  <span style="font-weight:300; font-family:Arial; color:#333333;">Mensaje:</span> 
	  <span style="font-weight:300; font-family:Arial; color:#ff4800;">'.$mensajec.'</span>

	  <br>';

      $subject= "¡Contacto Eureek'a!";
      //Preparamos las primeras cabeceras del correo
      require("class.phpmailer.php");
      $correo="diana.miil@outlook.com";
      $mail = new PHPMailer();

      /////////////Correo el cual es enviado///////////////////
      $mail->From= ($correo);
      /////////////Nombre quien envia mensaje///////////////////
      $mail->FromName = "eurekaa.netlify.app";
      $mail->AddAddress($correo);
      $mail->AddBCC("diana.miil@outlook.com","Eureek'a");
      //$mail->AddBCC("correo@dominio.com","Powerbox");
      //$mail->AddBCC("correo@dominio.com","Powerbox");
      $mail->Subject  =  $subject;
      $mail->Body     =  $contenido;
      $mail->AltBody  =  strip_tags($contenido);  
      $mail->IsHTML(false);     // send as HTML   
      $mail->CharSet = 'UTF-8';
      
      if($mail->Send())
       {echo "<script>location.href ='received-form.html';</script>";
       }
       else
       {echo "<script>location.href ='javascript:history.back()';</script>";
       }  
?>

