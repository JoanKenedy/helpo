<?php
include("contact.php");


if(isset($_POST['correo'])) {

   // valida los datos ingresados por el usuario
   if(!isset($_POST['correo']) ||
      !isset($_POST['membresia']) ||
      !isset($_POST['costo']) ||
      !isset($_POST['cupon']) ||
      !isset($_POST['descuento']) ||
      !isset($_POST['total']) ||
      !isset($_POST['nombre']) ||
      !isset($_POST['paterno']) ||
      !isset($_POST['materno']) ||
      !isset($_POST['nacimiento']) ||
      !isset($_POST['calle']) ||
      !isset($_POST['colonia']) ||
      !isset($_POST['delegacion']) ||
      !isset($_POST['ciudad']) ||
      !isset($_POST['postal']) ||
      !isset($_POST['telefono'])) {

         echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
         echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
         die();
      }

      $correo     = $_POST['correo'];
      $membresia  = $_POST['membresia'];
      $costo      = $_POST['costo'];
      $cupon      = $_POST['cupon'];
      $descuento  = $_POST['descuento'];
      $total      = $_POST['total'];
      $nombre     = $_POST['nombre'];
      $paterno    = $_POST['paterno'];
      $materno    = $_POST['materno'];
      $nacimiento = $_POST['nacimiento'];
      $calle      = $_POST['calle'];
      $colonia    = $_POST['colonia'];
      $delegacion = $_POST['delegacion'];
      $ciudad     = $_POST['ciudad'];
      $postal     = $_POST['postal'];
      $telefono   = $_POST['telefono'];


      // Se envia el Correo al Destinatario
      $email_to = $correo;
      $email_subject = "¡Registro exitoso!";
      $email_message = "
                  <!DOCTYPE html>
                  <html lang='en'>
                     <head>
                        <meta charset='UTF-8'>
                     </head>
                     <body>
                        <div align='center'>
                           <img src='http://helpoasistencia.com/membresia/images/logo/logo.png' width='30%'>
                        </div>
                        <br>
                        <p style='font-size: 20px; color: navy; font-family: arial; text-align:center; margin:auto;'>$titulo</p>
                        <br><br>
                        ¡Hola $nombre, te has registrado exitosamente!. Nos contactaremos lo más pronto posible contigo.
                        <br><br>  
                        <p style='font-size: 16px; color: navy; font-family: arial;'>El equipo Helpo.</p>
                        <br><br>
                        <p style='font-size: 12px; color: gray; font-family: arial;'>Este e-mail se ha generado por un sistema automático. Por favor, no respondas a este e-mail directamente. Si necesitas ayuda <a href='http://helpoasistencia.com/'>Contáctanos</a>.</p>
                     </body>
                  </html>
                  ";
      $headers = 'From: Helpo Membresía <noreply@helpoasistencia.com>' . "\r\n";
      $headers .= 'MIME-Version: 1.0' . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      mail($email_to, $email_subject, $email_message, $headers);


      // Se envia el Correo al Remitente
      $email_to2 = $email_remitente;
      $email_subject2 = "Helpo Membresía";
      $email_message2 = "
                  <!DOCTYPE html>
                  <html lang='en'>
                     <head>
                        <meta charset='UTF-8'>
                     </head>
                     <body>
                        <div align='center'>
                           <img src='http://helpoasistencia.com/membresia/images/logo/logo.png' width='30%'>
                        </div>
                        <br>
                        <p style='font-size: 20px; color: navy; font-family: arial; text-align:center; margin:auto;'>$titulo</p>
                        <br><br>
                        Se registro una compra desde el sitio web.
                        <br>
                        <b>Datos de la membresía:</b>
                        <br>
                        Tipo: $membresia
                        <br>  
                        Costo: $costo
                        <br>  
                        Cupón: $cupon
                        <br>  
                        Descuento: $descuento
                        <br>  
                        Costo Total: $total
                        <br><br>
                        <b>Datos del cliente:</b>
                        <br>
                        Nombre: $nombre
                        <br>  
                        Apellido Paterno: $paterno
                        <br>  
                        Apellido Materno: $materno
                        <br>  
                        Fecha de Nacimiento: $nacimiento
                        <br>  
                        Teléfono: $telefono
                        <br>  
                        Email: $correo
                        <br>  
                        <br> 
                        Dirección: 
                        <br>  
                        Calle y Número: $calle
                        <br>  
                        Colonia: $colonia
                        <br>  
                        Delegación/Municipio: $delegacion
                        <br>  
                        Ciudad/Estado: $ciudad
                        <br>  
                        Código Postal: $postal
                        <br><br>  
                        <p style='font-size: 16px; color: navy; font-family: arial;'>El equipo Helpo.</p>
                        <br><br>
                        <p style='font-size: 12px; color: gray; font-family: arial;'>Este e-mail se ha generado por un sistema automático. Por favor, no respondas a este e-mail directamente. Si necesitas ayuda <a href='http://helpoasistencia.com/'>Contáctanos</a>.</p>
                     </body>
                  </html>
                  ";
      $headers2 = 'From: Helpo Membresía <noreply@helpoasistencia.com>' . "\r\n";
      $headers2 .= 'MIME-Version: 1.0' . "\r\n";
      $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      mail($email_to2, $email_subject2, $email_message2, $headers2);

      

      if($membresia=="DESCUENTOS HELPO" && $cupon=="0"){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1FbmQY9'
               </script>";
      }
      else if($membresia=="DESCUENTOS HELPO" && ($cupon=="HELPUMAX" || $cupon=="HELPLUS" || $cupon=="PROMAX1" || $cupon=="HELPU1" || $cupon=="HELMAX" || $cupon=="MM25" || $cupon=="FAINUSHELPO" || $cupon=="KISSLOUNGE" || $cupon=="ENREDHADAS" || $cupon=="HEALTHYMOM" || $cupon=="PENTAXTI")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/2SynUxs'
               </script>";
      }
      else if($membresia=="DESCUENTOS HELPO" && ($cupon=="HPLUS20" || $cupon=="HPLUS2" || $cupon=="PROMO20" || $cupon=="HYOU20" || $cupon=="HELP2")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1Tfvy2j'
               </script>";
      }
      else if($membresia=="DESCUENTOS HELPO" && ($cupon=="PLUS10" || $cupon=="PLUS1" || $cupon=="PROM1" || $cupon=="YOU1" || $cupon=="HELPO1")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1Bn87L7'
               </script>";
      }
      else if($membresia=="DESCUENTOS HELPO" && ($cupon=="HPLUS" || $cupon=="PROM05" || $cupon=="YOU05" || $cupon=="HELP05")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1TXciHm'
               </script>";
      }
      else if($membresia=="DESCUENTOS HELPO" && ($cupon=="HELPO5" || $cupon=="HYOU5" || $cupon=="PROMO5" || $cupon=="PLUS5" || $cupon=="HPO5")){
          echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1xT6KSb'
               </script>";

      }

      

      else if($membresia=="MEMBRESIA HELP YOU" && $cupon=="0"){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/117tFE7'
               </script>";
      }
      else if($membresia=="MEMBRESIA HELP YOU" && ($cupon=="HELPUMAX" || $cupon=="HELPLUS" || $cupon=="PROMAX1" || $cupon=="HELPU1" || $cupon=="HELMAX"|| $cupon=="MM25" || $cupon=="FAINUSHELPO" || $cupon=="KISSLOUNGE" || $cupon=="ENREDHADAS" || $cupon=="HEALTHYMOM" || $cupon=="PENTAXTI")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/26ou6Qa'
               </script>";
      }
      else if($membresia=="MEMBRESIA HELP YOU" && ($cupon=="HPLUS20" || $cupon=="HPLUS2" || $cupon=="PROMO20" || $cupon=="HYOU20" || $cupon=="HELP2")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1R1YgWm'
               </script>";
      }
      else if($membresia=="MEMBRESIA HELP YOU" && ($cupon=="PLUS10" || $cupon=="PLUS1" || $cupon=="PROM1" || $cupon=="YOU1" || $cupon=="HELPO1" || $cupon=="MAMISRUS")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1SijTew'
               </script>";
      }
      else if($membresia=="MEMBRESIA HELP YOU" && ($cupon=="HPLUS" || $cupon=="PROM05" || $cupon=="YOU05" || $cupon=="HELP05")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/1oewAdX'
               </script>";
      }
       else if($membresia=="MEMBRESIA HELP YOU" && ($cupon=="HELPO5" || $cupon=="HYOU5" || $cupon=="PROMO5" || $cupon=="PLUS5" || $cupon=="HPO5")){
          echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://mpago.la/23Ux7qU'
               </script>";

      }
      else {
         echo "<script>alert('Lo sentimos, hubo un error. Por favor intentalo nuevamente');window.location= 'index.php'</script>";
      }



}

?>