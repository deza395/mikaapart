<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
 <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
      <link rel="stylesheet" href="css/estilos.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Arvo|PT+Serif&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Arvo:700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>mika-apart</title>
  </head>
<body>

<?php include("secciones/navbar.php"); ?>




<!-- daleria de fotoso con lightbox -->
<div class="container">
  <div class="titulo-galeria">
    <h4>Galeria de fotos</h4>
     <div class="links-depto">
       <ul>
         <div class="links-titulo">
           <div class="dropdown show">
 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  otras galerias
 </a>

 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   <a class="dropdown-item" href="#">Action</a>
   <a class="dropdown-item" href="#">Another action</a>
   <a class="dropdown-item" href="#">Something else here</a>
 </div>
</div>

         </div>
       </ul>
     </div>
  </div>



 <div class="row">
     <div id="lightgallery" class="galeria">

                  <a class="a-galeria col-5 col-md-3 col-lg-2 " href="img/departamentos/mika.jpg">
                      <img src="img/departamentos/mika.jpg" />
                  </a>

                  <a  class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/mika2.jpg">
                      <img src="img/departamentos/mika2.jpg" />
                  </a>

                  <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto1.jpg">
                      <img src="img/departamentos/depto1.jpg" />
                  </a>
                  <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto2.jpg">
                      <img src="img/departamentos/depto2.jpg" />
                  </a>
                  <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto9.jpg">
                      <img src="img/departamentos/depto9.jpg" />
                  </a>
                  <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto4.jpg">
                      <img src="img/departamentos/depto4.jpg" />
                 </a>
                 <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto5.jpg">
                     <img src="img/departamentos/depto5.jpg" />
                 </a>
                 <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto6.jpg">
                     <img src="img/departamentos/depto6.jpg" />
                 </a>
                 <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto7.jpg">
                     <img src="img/departamentos/depto7.jpg" />
                 </a>
                 <a class="a-galeria col-5 col-md-3 col-lg-2" href="img/departamentos/depto8.jpg">
                     <img src="img/departamentos/depto8.jpg" />
                </a>

    </div>
   </div>

</div>




<?php  ?>







<?php include("secciones/campo-formulario.php"); ?>


    <script src="js/lightgallery.min.js"></script>
    <script type="text/javascript">
      lightGallery(document.getElementById('lightgallery'));
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src"js/app.js"></script>
<script src"js/validacion.js"></script>
  </body>
</html>
