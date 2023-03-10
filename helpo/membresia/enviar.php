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

      

      if($membresia=="INDIVIDUAL" && $cupon=="0"){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-52b8ddfc-30eb-43ca-9297-d76400dbc043'
               </script>";
      }
      else if($membresia=="INDIVIDUAL" && ($cupon=="PROMO5" || $cupon=="promo5" || $cupon=="Promo5")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-2d65dc00-d2c8-4ac4-a230-42c4dc906702'
               </script>";
      }
      else if($membresia=="INDIVIDUAL" && ($cupon=="HELP-U5" || $cupon=="help-u5" || $cupon=="Help-u5")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-5aee5946-ed38-4087-8c52-b87ff2905265'
               </script>";
      }
      else if($membresia=="INDIVIDUAL" && ($cupon=="HELP10" || $cupon=="help10" || $cupon=="Help10")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-2ad6ec34-cfe8-4436-9ceb-c394a410f1f9'
               </script>";
      }
      else if($membresia=="INDIVIDUAL" && ($cupon=="PROM10" || $cupon=="prom10" || $cupon=="Prom10")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-bc7da59c-7ff8-4ea3-a54e-81f8d5464e28'
               </script>";
      }
      else if($membresia=="INDIVIDUAL" && ($cupon=="PROMAX15" || $cupon=="promax15" || $cupon=="Promax15")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-a4c00be5-d34a-4e81-8c4c-14d0deae5496'
               </script>";
      }
      else if($membresia=="FAMILIAR" && $cupon=="0"){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-41141508-bb7e-40c5-a724-ff9546910961'
               </script>";
      }
      else if($membresia=="FAMILIAR" && ($cupon=="PROMO5" || $cupon=="promo5" || $cupon=="Promo5")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-1d3d2912-bdd4-42d8-9a4b-52ea146b7903'
               </script>";
      }
      else if($membresia=="FAMILIAR" && ($cupon=="HELP-U5" || $cupon=="help-u5" || $cupon=="Help-u5")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-3363231f-6d42-4c65-a86d-11bc5eab0e62'
               </script>";
      }
      else if($membresia=="FAMILIAR" && ($cupon=="HELP10" || $cupon=="help10" || $cupon=="Help10")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-3069a1ca-ca60-48cb-bd93-8c657f35a634'
               </script>";
      }
      else if($membresia=="FAMILIAR" && ($cupon=="PROM10" || $cupon=="prom10" || $cupon=="Prom10")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-01649386-31e2-4425-bbfa-785dd63495a7'
               </script>";
      }
      else if($membresia=="FAMILIAR" && ($cupon=="PROMAX15" || $cupon=="promax15" || $cupon=="Promax15")){
         echo "<script>
                  alert('¿Procesar Pago?');window.location= 'https://www.mercadopago.com.mx/checkout/v1/redirect?pref_id=600368040-a2d6fd99-55eb-47b9-b422-9b873a232045'
               </script>";
      }
      else {
         echo "<script>alert('Lo sentimos, hubo un error. Por favor intentalo nuevamente');window.location= 'index.php'</script>";
      }



}

?>