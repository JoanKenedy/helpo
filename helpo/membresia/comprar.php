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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 text-center">
               <a href="http://helpoasistencia.com/"><img class="img-responsive img-fluid img-logo" src="images/logo/logo.png"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6 text-center">
               <img class="img-responsive img-fluid img-membresia" src="images/objetos/membresia.png">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center">
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
                     <input type="text" class="form-control form-uppercase" name="membresia" readonly="readonly" value="<?php if($membresia=='individual'){echo "INDIVIDUAL";} else if($membresia=='familiar'){echo "FAMILIAR";} ?>">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Costo:</label>
                     <input type="text" class="form-control form-uppercase" name="costo" readonly="readonly" value="<?php if($membresia=='individual'){echo "$729.64";} else if($membresia=='familiar'){echo "$1,309.64";} ?>">
                  </div>
                  <?php if($codigo=="PROMO5" || $codigo=="HELP-U5" || $codigo=="HELP10" || $codigo=="PROM10" ||$codigo=="PROMAX15" || $codigo=="promo5" || $codigo=="help-u5" || $codigo=="help10" || $codigo=="prom10" ||$codigo=="promax15" || $codigo=="Promo5" || $codigo=="Help-u5" || $codigo=="Help10" || $codigo=="Prom10" ||$codigo=="Promax15"): ?>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Cupón Validado:</label>
                     <input type="text" class="form-control form-uppercase" name="cupon" readonly="readonly" value="<?php echo $codigo; ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="cupon" value="0">
                  <?php endif; ?>


                  <?php if($codigo=="PROMO5" || $codigo=="HELP-U5" || $codigo=="HELP10" || $codigo=="PROM10" ||$codigo=="PROMAX15" || $codigo=="promo5" || $codigo=="help-u5" || $codigo=="help10" || $codigo=="prom10" ||$codigo=="promax15" || $codigo=="Promo5" || $codigo=="Help-u5" || $codigo=="Help10" || $codigo=="Prom10" ||$codigo=="Promax15"): ?>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Descuento:</label>
                     <input type="text" class="form-control form-uppercase" name="descuento" readonly="readonly" value="<?php 
                        if($codigo=="PROMO5" || $codigo=="promo5" || $codigo=="Promo5"){echo "5%";}
                        else if($codigo=="HELP-U5" || $codigo=="help-u5" || $codigo=="Help-u5"){echo "5%";}
                        else if($codigo=="HELP10" || $codigo=="help10" || $codigo=="Help10"){echo "10%";}
                        else if($codigo=="PROM10" || $codigo=="prom10" || $codigo=="Prom10"){echo "10%";}
                        else if($codigo=="PROMAX15" || $codigo=="promax15" || $codigo=="Promax15"){echo "15%";}
                        ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="descuento" value="0">
                  <?php endif; ?>



                  <?php if($codigo=="PROMO5" || $codigo=="HELP-U5" || $codigo=="HELP10" || $codigo=="PROM10" ||$codigo=="PROMAX15" || $codigo=="promo5" || $codigo=="help-u5" || $codigo=="help10" || $codigo=="prom10" ||$codigo=="promax15" || $codigo=="Promo5" || $codigo=="Help-u5" || $codigo=="Help10" || $codigo=="Prom10" ||$codigo=="Promax15"): ?>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Costo Total:</label>
                     <input type="text" class="form-control form-uppercase" name="total" readonly="readonly" value="<?php 
                        if($membresia=="individual" && ($codigo=="PROMO5" || $codigo=="promo5" || $codigo=="Promo5")){echo "$693.2";}
                        else if($membresia=="individual" && ($codigo=="HELP-U5" || $codigo=="help-u5" || $codigo=="Help-u5")){echo "$693.2";}
                        else if($membresia=="individual" && ($codigo=="HELP10" || $codigo=="help10" || $codigo=="Help10")){echo "656.7";}
                        else if($membresia=="individual" && ($codigo=="PROM10" || $codigo=="prom10" || $codigo=="Prom10")){echo "656.7";}
                        else if($membresia=="individual" && ($codigo=="PROMAX15" || $codigo=="promax15" || $codigo=="Promax15")){echo "620.2";}
                        else if($membresia=="familiar" && ($codigo=="PROMO5" || $codigo=="promo5" || $codigo=="Promo5")){echo "$1,244.2";}
                        else if($membresia=="familiar" && ($codigo=="HELP-U5" || $codigo=="help-u5" || $codigo=="Help-u5")){echo "$1,244.2";}
                        else if($membresia=="familiar" && ($codigo=="HELP10" || $codigo=="help10" || $codigo=="Help10")){echo "1,178.7";}
                        else if($membresia=="familiar" && ($codigo=="PROM10" || $codigo=="prom10" || $codigo=="Prom10")){echo "1,178.7";}
                        else if($membresia=="familiar" && ($codigo=="PROMAX15" || $codigo=="promax15" || $codigo=="Promax15")){echo "1,113.2";}
                        ?>">
                  </div>
                  <?php endif; ?>

                  <?php if($codigo==""): ?>
                  <input type="hidden" class="form-control form-uppercase" name="total" value="0">
                  <?php endif; ?>



                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Nombre (s):</label>
                     <input type="text" class="form-control form-uppercase" name="nombre" placeholder="Nombre (s)" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Apellido Paterno:</label>
                     <input type="text" class="form-control form-uppercase" name="paterno" placeholder="Apellido Paterno" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Apellido Materno:</label>
                     <input type="text" class="form-control form-uppercase" name="materno" placeholder="Apellido Materno" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Fecha de Nacimiento:</label>
                     <input type="date" class="form-control form-uppercase" name="nacimiento" placeholder="Fecha de Nacimiento" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Número Telefónico:</label>
                     <input type="tel" class="form-control form-uppercase" name="telefono" placeholder="Número Telefónico" required="required">
                  </div>
                  <div class="form-group">
                     <label for="" style="color: #eb0e0e">Correo Electrónico:</label>
                     <input type="email" class="form-control form-lowercase" name="correo" placeholder="Correo Electrónico" required="required">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-danger btn-block">Siguiente</button>
               </form>
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

