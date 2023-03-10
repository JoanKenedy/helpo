<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="css/rechazo.css">
   </head>
   <body>
      <!-- Modal -->
      <div class="modal fade" id="ventana-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" >
                     ¡Pago Rechazado!
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="img-fluid">
                     <img src="image/favicon.png" alt="">
                  </div>
                  <h6>Sigue estas sugerencias:</h6>
                  <p>
                     * Asegurate siempre de tener una buena señal de intenert o estable.
                     <br>
                     * Antes de hacer cualquier pago verifica que tus datos sean correctos.
                     <br>
                     * Tienes dudas ? ¡Comunicate con nosotros y con gusto te ayudamos! : <span class="num">5545882437 </span>.
                     <br>
                     * Intentalo de nuevo.
                  </p>
               </div>
               <div class="modal-footer">
                  <a class="btn btn-danger btn-sm" href="http://helpoasistencia.com/" role="button">Pagina de Inicio</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script>
         (function () {
         
           $(function(){
             $('#ventana-modal').modal('show')
           });
         }());
           
          
         
          
         
      </script>
   </body>
</html>

