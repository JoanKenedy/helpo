
<?php include("contact.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php echo $titulo; ?></title>
      <meta name="description" content="<?php echo $descripcion; ?>">
      <link rel="canonical" href="<?php echo $canonical; ?>"/>
      <meta property="og:image" content="images/favicon/icon.jpg">
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="plugins/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="plugins/font-awesome/font-awesome-animation.min.css" rel="stylesheet">
      <script src="plugins/font-awesome/fontawesome-all.min.js"></script>
      <link href="plugins/aos/aos.css" rel="stylesheet">
      <script src="plugins/aos/aos.js"></script>
      <!-- Codigo de Seguimiento Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171473389-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-171473389-1');
      </script>
      <!-- Codigo de Seguimiento Google Ads - Etiqueta Global -->
      <!-- Codigo de Seguimiento Google Ads - Visitas del Sitio Web -->
      <!-- Codigo de Seguimiento Google Ads - Llamada -->
      <!-- Codigo de Seguimiento Google Ads - WhatsApp -->
      <!-- Pixel de Facebook - Visitas -->
      <!-- Pixel de Facebook - Messenger -->
   </head>
   <body>
      <?php
         if(isset($_POST['membresia'])) {
         
           // valida los datos ingresados por el usuario
           if(!isset($_POST['membresia']) ||
             !isset($_POST['codigo'])) {
         
               echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
               echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
               die();
             }
         
             $membresia    = $_POST['membresia'];
             $codigo    = $_POST['codigo'];
      
         }
      ?>

      <div class="section-linea"></div>
      <section class="section-header">
         <div class="row">
            <div class="col-lg-12 text-center">
               <a href="http://helpoasistencia.com/"><img class="img-responsive img-fluid img-logo-form" src="images/logos/logo_helpu.png"></a>
            </div>
         </div>
      </section>
      <img class="img-responsive img-fluid" src="images/objetos/linea-2.png" width="100%">
      <div class="container">
         <div class="">
            <div class="form">
               <form action="enviar.php" class="" name="" method="post">
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Membresía:</label>
                     <input type="text" class="form-control form-uppercase" name="membresia" readonly="readonly" value="<?php if($membresia=='individual'){echo "DESCUENTOS HELPO";} else if($membresia=='familiar'){echo "MEMBRESIA HELP YOU";} ?>">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Costo:</label>
                     <input type="text" class="form-control form-uppercase" name="costo" readonly="readonly" value="<?php if($membresia=='individual'){echo  "$349.00";} else if($membresia=='familiar'){echo "$749.00";} ?>">
                  </div>

                  <!-- Validación de Código Promocional -->
                  
                    <?php if($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" || $codigo=="HELPU1" ||$codigo=="HELMAX"|| $codigo=="MM25" || $codigo=="FAINUSHELPO" || $codigo=="KISSLOUNGE" || $codigo=="ENREDHADAS"|| $codigo=="HEALTHYMOM"|| $codigo=="PENTAXTI"|| $codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" ||$codigo=="HELP2" || $codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" || $codigo=="YOU1" ||$codigo=="HELPO1"|| $codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" ||$codigo=="HELP05" || $codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5"): ?>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Cupón Validado:</label>
                     <input type="text" class="form-control form-uppercase" name="cupon" readonly="readonly" value="<?php echo $codigo; ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="cupon" value="0">
                  <?php endif; ?>

                   <?php if($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" || $codigo=="HELPU1" ||$codigo=="HELMAX" || $codigo=="MM25" || $codigo=="FAINUSHELPO" || $codigo=="KISSLOUNGE" || $codigo=="ENREDHADAS" || $codigo=="HEALTHYMOM" || $codigo=="PENTAXTI"|| $codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" ||$codigo=="HELP2" || $codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" || $codigo=="YOU1" ||$codigo=="HELPO1"||$codigo=="MAMISRUS"|| $codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" ||$codigo=="HELP05" || $codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5"): ?>
                 
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Descuento:</label>
                     <input type="text" class="form-control form-uppercase" name="descuento" readonly="readonly" value="<?php 
                        if($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" || $codigo=="HELPU1" || $codigo=="HELMAX" || $codigo=="MM25" || $codigo=="FAINUSHELPO" || $codigo == "KISSLOUNGE" || $codigo=="ENREDHADAS"|| $codigo=="HEALTHYMOM" || $codigo=="PENTAXTI"){echo "25%";}
                        else if($codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" || $codigo=="HELP2"){echo "20%";}
                        else if($codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" ||$codigo=="YOU1" ||$codigo=="HELPO1" || $codigo=="MAMISRUS"){echo "15%";}
                        else if($codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" || $codigo=="HELP05"){echo "10%";}
                        else if($codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5"){echo "5%";}
                        ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="descuento" value="0">
                  <?php endif; ?>


                 <?php if($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" || $codigo=="HELPU1" ||$codigo=="HELMAX" || $codigo=="MM25" || $codigo=="FAINUSHELPO" || $codigo=="KISSLOUNGE"|| $codigo=="ENREDHADAS"||$codigo=="HEALTHYMOM"||$codigo=="PENTAXTI"||$codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" ||$codigo=="HELP2" || $codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" || $codigo=="YOU1" ||$codigo=="HELPO1"||$codigo=="MAMISRUS" || $codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" ||$codigo=="HELP05" || $codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5"): ?>
                  
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Costo Total:</label>
                     <input type="text" class="form-control form-uppercase" name="total" readonly="readonly" value="<?php 
                        if($membresia=="individual" && ($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" || $codigo=="HELPU1" || $codigo=="HELMAX" || $codigo=="MM25" || $codigo=="FAINUSHELPO" || $codigo=="KISSLOUNGE"|| $codigo=="ENREDHADAS" || $codigo=="HEALTHYMOM"||$codigo=="PENTAXTI" )){echo "$261.75";}
                        else if($membresia=="individual" && ($codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" || $codigo=="HELP2")){echo "$279.2";}
                        else if($membresia=="individual" && ($codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" ||$codigo=="YOU1" ||$codigo=="HELPO1")){echo "$296.65";}
                        else if($membresia=="individual" && ($codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" || $codigo=="HELP05")){echo "$314.00";}
                        else if($membresia=="individual" && ($codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5")){echo "$331.55";}
                        else if($membresia=="familiar" && ($codigo=="HELPUMAX" || $codigo=="HELPLUS" || $codigo=="PROMAX1" 
                        || $codigo=="HELPU1" || $codigo=="HELMAX" || $codigo=="MM25" || $codigo=="FAINUSHELPO" ||  
                        $codigo=="KISSLOUNGE" || $codigo=="ENREDHADAS" || $codigo=="HEALTHYMOM" || $codigo=="PENTAXTI" )){echo "$561.75";}
                        else if($membresia=="familiar" && ($codigo=="HPLUS20" || $codigo=="HPLUS2" || $codigo=="PROMO20" || $codigo=="HYOU20" || $codigo=="HELP2")){echo "$599.2";}
                        else if($membresia=="familiar" && ($codigo=="PLUS10" || $codigo=="PLUS1" || $codigo=="PROM1" ||$codigo=="YOU1" ||$codigo=="HELPO1" || $codigo=="MAMISRUS")){echo "$636.65";}
                        else if($membresia=="familiar" && ($codigo=="HPLUS" || $codigo=="PROM05" || $codigo=="YOU05" || $codigo=="HELP05")){echo "$674.00";}
                        else if($membresia=="familiar" && ($codigo=="HELPO5" || $codigo=="HYOU5" || $codigo=="PROMO5" || $codigo=="PLUS5" || $codigo=="HPO5"))
                        {echo "$711.55";}
                        ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="total" value="0">
                  <?php endif; ?>


                  <!-- Datos Personales -->
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Nombre (s):</label>
                     <input type="text" class="form-control form-uppercase" name="nombre" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Apellido Paterno:</label>
                     <input type="text" class="form-control form-uppercase" name="paterno" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Apellido Materno:</label>
                     <input type="text" class="form-control form-uppercase" name="materno" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Fecha de Nacimiento:</label>
                     <input type="date" class="form-control form-uppercase" name="nacimiento" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Número Telefónico:</label>
                     <input type="tel" class="form-control form-uppercase" name="telefono" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Correo Electrónico:</label>
                     <input type="email" class="form-control form-lowercase" name="correo" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Calle y Número:</label>
                     <input type="text" class="form-control" name="calle" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Colonia:</label>
                     <input type="text" class="form-control" name="colonia" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Delegación/Municipio:</label>
                     <input type="text" class="form-control" name="delegacion" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Ciudad/Estado:</label>
                     <input type="text" class="form-control" name="ciudad" placeholder="" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Código Postal:</label>
                     <input type="text" class="form-control" name="postal" placeholder="" required="required">
                  </div>

                  <p class="" style="color: #bdc3c7; font-weight: normal; font-size: 12px;">Si requieres factura debes solicitarla el mismo mes al correo electrónico: helpyou@helpoasistencia.com</p>
                  <br>
                  <button type="submit" class="btn btn-danger btn-block">Siguiente</button>
               </form>
            </div>
         </div>
      </div>
      <div class="section-footer">
            <div class="row">
               <div class="col-lg-12  text-center">
                  <p style="font-size: 15px; margin-bottom: 10px; padding-top: 5px;"">
                     <a href="http://www.helpoasistencia.com/aviso.html"  target="_blank" style="color: #fff; text-decoration: none;">Aviso de Privacidad</a>   
                  </p>
               </div>
            </div>
         </div>
      <style type = "text/css">
         .btn-personalizado {
         background-color:#000000;
         color:#ffffff;
         border-radius: 50px;
         }
      </style>
      <!-- Inicializacion AOS Animation -->
      <script>AOS.init();</script>
      <!-- jQuery -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <!-- Popper -->
      <script src="js/popper.min.js"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>

