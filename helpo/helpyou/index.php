<?php include("contact.php"); ?>
<?php include("codigos_promocionales.php"); ?>
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
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177019189-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-177019189-1');
      </script>
      <!-- Codigo de Seguimiento Google Ads - Etiqueta Global -->
      <!-- Codigo de Seguimiento Google Ads - Visitas del Sitio Web -->
      <!-- Codigo de Seguimiento Google Ads - Llamada -->
      <!-- Codigo de Seguimiento Google Ads - WhatsApp -->
      <!-- Pixel de Facebook - Visitas -->
      <!-- Pixel de Facebook - Messenger -->
      <style type="text/css">
         html{overflow-x:hidden;}
      </style> 
   </head>
   <body>
      <section class="section-header">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  text-center">
               <a href="http://helpoasistencia.com/"><img class="img-responsive img-fluid img-logo" src="images/logos/logo_helpu.png"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-6 text-center">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 col-6 ">
               <a href="tel:<?php echo $telefono; ?>" target="_blank"><img class="img-responsive img-fluid img-membresia" src="images/iconos/llamar.png"></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">
               <a  href="<?php echo $whatsapp; ?>" target="_blank"><img class="img-responsive img-fluid img-btn-comprar-menu" src="images/iconos/mensaje.png"></a>
            </div>
         </div>
      </section>
      <div class="bg-seccion-1">
         <section class="text-center">
            <div class="container">
               <br><br>
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <img class="img-responsive img-fluid img-tarjeta" src="images/objetos/texto1.png" data-aos="fade-up">
                     <br><br>
                     <img class="img-responsive img-fluid img-hashtag" src="images/objetos/texto_membresia.png" data-aos="fade-up">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                     <img class="img-responsive img-fluid img-texto img-tarjeta-roja" src="images/objetos/tarjeta-helpu.png" data-aos="fade-right">
                     <div class="seccion-desktop">
                        <div class="text-center ">
                        <br>
                           <a data-toggle="modal" href="#familiar"><img class="img-responsive img-fluid img-btn-comprar" src="images/objetos/comprar.png" data-aos="fade-up"></a>
                        </div>
                     </div>
                     <div class="seccion-movil mt-4">

                        <a data-toggle="modal" href="#familiar"><img class="img-responsive img-fluid img-btn-comprar" src="images/objetos/comprar.png" data-aos="fade-up"></a>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
         <br><br><br><br>
      </div>
      <div class="bg-seccion-2">
      <br><br>
         <h2 class="text-center mb-5"> <img src="images/objetos/beneficios.png" class="txt-beneficios" data-aos="fade-up"></h2>
         <div class="row">
         	<div class="col-lg-1 col-lg-1"></div>
            <div class="row col-lg-7 col-md-7 col-sm-12 col-xs-12 tex-center beneficios-section">
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/chek_up.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Check Up</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/asistencia_funeraria.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Asistencia <br>  Funeraria</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/coordinacion.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Citas Médicas</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/medica.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Asesoria <br>  Médica</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/medico_domicilio.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Médico a  <br> Domicilio</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/asistencia veterinaria.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Asistecia <br>  Veterinaria</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/grua.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Grúa por  <br> Avería</p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-6 text-center">
                  <img class="img-responsive img-fluid img-tamaño" data-aos="fade-up" src="images/objetos/tarjeta_descuento.png">
                  <p class="txt-beneficios-p" data-aos="fade-up">Tarjeta de  <br> Descuento</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 co-xs-12">
            	
            </div>
         </div>
         </section>
      </div>
         <div class="bg-seccion-3">
            <section class="text-center">
            <br><br>
         
                  <h2 class="text-center"> <img src="images/objetos/membresia.png" class="txt-beneficios" data-aos="fade-up"></h2>
            
               <div class="container">
                  <br><br>
                  <div class="row">
                       <div class="col-md-6">
                        <img  class="img-fluid img-responsive img-precio-1" src="images/objetos/precio1.png" alt="" data-aos="fade-up">
                        <br>
                        <img class="img-responsive img-fluid img-tarjeta-roja" src="images/objetos/tarjeta-helpu.png" data-aos="fade-left">
                        <br><br>
                        <a data-toggle="modal" href="#familiar"><img class="img-responsive img-fluid text-center img-btn-comprar mb-2" src="images/objetos/comprar.png" data-aos="fade-up"></a>
                     </div>
                     <div class="col-md-6 text center">
                        <img class="img-responsive img-fluid img-texto-desde" src="images/objetos/texto_desde.png" data-aos="fade-up">
                       <div> <a  href="download/detalles.PDF" target="_blank"><img class="img-responsive img-fluid img-btn-masinfo" src="images/objetos/info.png" data-aos="fade-up"></a>
                       	</div>
                     </div>
                   
                  </div>
               </div>
            </section>
            <br>
         </div>
      
         <div class="bg-seccion-4">
            <section class="text-center">
               <div class="container">
                  <br><br>
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3 class="membresia" data-aos="fade-up">MEMBRESÍA DE DESCUENTOS</h3>
                        <img class="img-responsive img-fluid img-adquiere" src="images/objetos/texto_adquiere.png" alt="" data-aos="fade-up">
                        <img class=" img-responsive img-fluid img-empieza" src="images/objetos/texto_empieza.png" alt="" data-aos="fade-up">
                        <br><br>
                        <a data-toggle="modal" href="#individual"><img  class="img-responsive img-fluid img-btn-comprar  mb-4" src="images/objetos/comprar.png"></a>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <img  class="img-responsive img-fluid img-tarjeta-negra" src="images/objetos/tarjeta_negra.png" alt="" data-aos="fade-up">
                        <img class="img-responsive img-fluid img-precio-2 " src="images/objetos/precio2.png" alt="" data-aos="fade-up">
                     </div>
                     
                  </div>
               </div>
            </section>
         </div>
         <div class="bg-seccion-movil">
            <section class="text-center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <a href="download/HelpoAsisTProteccionCovid(vb).pdf" target="_blank"><img class="img-responsive img-fluid" src="images/objetos/tarjeta-helpu.png"></a>
                        <br><br><br>
                        <a href="download/HelpoAsisTProteccionCovid(vb).pdf" target="_blank"><img class="img-responsive img-fluid" src="images/objetos/tarjeta_negra.png"></a>
                        <br><br><br>
                        <a data-toggle="modal" href="#comprar"><img class="img-responsive img-fluid img-btn-comprar" src="images/objetos/btn-comprar.png"></a>
                        <br><br><br>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <br><br><br>
         <div class="bg-seccion-movil-2">
            <section class="text-center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <img class="img-responsive img-fluid" src="images/objetos/foto.png" width="100%">
                     </div>
                  </div>
               </div>
               <br><br><br>
               <br><br><br>
            </section>
         </div>
         <!-- Botones Dinamicos -->
         <div class="flotante seccion-movil">
            <figure><a class="phone" href="tel:<?php echo $telefono; ?>" target="_blank"><img src="images/iconos/llamada.png" width="60" border="0"/></a></figure>
            <figure><a class="whatsapp" href="<?php echo $whatsapp; ?>" target="_blank"><img src="images/iconos/whatsapp.png" width="60" border="0"/></a></figure>
         </div>
         <div class="section-footer">
            <div class="row">
               <div class="col-lg-12  text-center">
                  <p style="font-size: 15px; margin-bottom: 10px; padding-top: 5px;"">
                     <a href="http://www.helpoasistencia.com/aviso.html" target="_blank" style="color: #fff; text-decoration: none;">Aviso de Privacidad</a>   
                  </p>
               </div>
            </div>
         </div>
         

         <div class="modal fade bd-example-modal-sm" id="familiar">
            <div class="modal-dialog modal-md">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" style="font-weight: normal; font-size: 16px;">Helpo Asistencia:</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                     <div class="box-body">
                        <div class="modal-body">
                           <div class="row text-center">
                              <div class="col-lg-12">
                                 <form action="comprar.php" class="" name="" method="post">
                                    <div class="form-group">
                                       <select class="form-control" name="membresia" required="required">
                                          <option value="familiar">MEMBRESIA HELP YOU</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="codigo" placeholder="Código Promocional">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-danger btn-block">Siguiente</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade bd-example-modal-sm" id="individual">
            <div class="modal-dialog modal-md">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" style="font-weight: normal; font-size: 16px;">Helpo Asistencia</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                     <div class="box-body">
                        <div class="modal-body">
                           <div class="row text-center">
                              <div class="col-lg-12">
                                 <form action="comprar.php" class="" name="" method="post">
                                    <div class="form-group">
                                       <select class="form-control" name="membresia" required="required">
                                          <option value="individual">DESCUENTOS HELPO</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="codigo" placeholder="Código Promocional">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-danger btn-block">Siguiente</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Estilos BTN -->
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

