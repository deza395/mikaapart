  <?php include("secciones/head.php");?>

  <body>
      <a id="whatsapp" href="https://wa.me/5491162748624?text=Hola%20me%20gustar%C3%ADa%20saber%20las%20tarifas%20de%20los%20departamentos"> <img src="img/whatsapp.png" alt="">  </a>


    <?php include("secciones/navbar.php");?>


    <header>

<!-- CONTIENE LOGO, TITULO Y PARRAFO -->
<br><br><br><br>
   <div class="container logo">
       <h1>Mika Apart Hospital Italiano</h1>
       <br>
     <div class="imagen">
       <img src="img/logo.jpeg " alt="mika apart" id="logo">
     </div>

      <div class="">
      <h2 style="padding:15px; font-size:25px;" >Departamentos amoblados  en alquiler temporario </h2>
      </div>
     </div>

 <!-- CONTIENE LOGO, TITULO Y PARRAFO -->
</header>

<main>


  <section>

            <div class="container">
              <div class="servicios">
                <div class="title">
                    <h3>QUIENES SOMOS</h3>
                    <img src="img/img-arabezco.svg" alt="">
                </div>
              <div class="quienes-somos">

                <p>Bienvenidos a MIKA APART donde se sentiran como en casa . Los recibimos con toda la informacion que necesiten para una placentera estadia en Buenos Aires. <p></p>

                  <p>Estamos en el barrio de Almagro , el centro geografico de la ciudad con excelente comunicacion con los barrios turisticos por su proximidad a la Avenida Corrientes que nos conecta a la mayoria de los puntos turisticos. Y ademas , nos encontramos a solo 60 metros del Hospital Italiano , el mas importante de la ciudad. Brindamos informacion turistica, sin cargo, con mapas indicando los puntos mas importantes para visitar.</p>
              </div>
            </div>
          </div>

  </section>


  <!-- DEPARTAMENTOS -->
  <section id="departamentos">


      <div class="container-depto">
        <div class="title">
            <h3>DEPARTAMENTOS</h3>
              <img src="img/img-arabezco.svg" alt="">
        </div>
        <div class="row" id="deptos">
              <div class="col-12 col-md-6 col-lg-3 ideas-product">
                <div class="cosas">
                  <div class="a">
                    <a href="galeria-depto1.php"><img src="img/portada3.jpeg" alt="" class="img-fluid">
                           <div class="overlay">
                           <div class="text">ver galeria de fotos</div>
                       </div></a>
                  </div>

                       <div class="iconos">
                          <p><i class="fas fa-map-marker-alt"></i> Palestina 565 1ro C</p>
                          <p><i class="fas fa-home"></i>1 ambiente, Cocina,baño privado</p>
                          <p><i class="fas fa-user-friends"></i> Hasta 2 huespedes</p>
                        </div>

                 </div>
             </div>


             <div class="col-12 col-md-6 col-lg-3 ideas-product">
               <div class="cosas">
                 <div class="a">
                     <a href="galeria-depto2.php"><img src="img/portada2.jpeg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="text">ver galeria de fotos</div>
                      </div></a>
                 </div>

                      <div class="iconos">
                         <p><i class="fas fa-map-marker-alt"></i> Palestina 565 1ro C</p>
                         <p><i class="fas fa-home"></i>1 ambiente, Cocina,baño privado</p>
                         <p><i class="fas fa-user-friends"></i> Hasta 2 huespedes</p>
                       </div>

                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-3 ideas-product">
              <div class="cosas">
                <div class="a">
                  <a href="galeria-depto3.php"><img src="img/depto10.jpeg" alt="" class="img-fluid">
                         <div class="overlay">
                         <div class="text">ver galeria de fotos</div>
                     </div></a>
                </div>

                     <div class="iconos">
                        <p><i class="fas fa-map-marker-alt"></i> Palestina 565 1ro C</p>
                        <p><i class="fas fa-home"></i>1 ambiente, Cocina,baño privado</p>
                        <p><i class="fas fa-user-friends"></i> Hasta 2 huespedes</p>
                      </div>

               </div>
           </div>


           <div class="col-12 col-md-6 col-lg-3 ideas-product">
             <div class="cosas">
               <div class="a">
                   <a href="galeria-depto4.php"><img src="img/departamentos/mika.jpg" alt="" class="img-fluid">
                      <div class="overlay">
                        <div class="text">ver galeria de fotos</div>
                    </div></a>
               </div>

                    <div class="iconos">
                       <p><i class="fas fa-map-marker-alt"></i> Palestina 565 1ro C</p>
                       <p><i class="fas fa-home"></i>1 ambiente, Cocina,baño privado</p>
                       <p><i class="fas fa-user-friends"></i> Hasta 2 huespedes</p>
                     </div>

              </div>
          </div>



      </div>
  </div>
  </section>

<!-- servicios  -->

  <?php include("secciones/servicios.php"); ?>
<!-- fin de servicios -->


<!-- UBICACION, COMO LLEGAR Y GOOGLE MAPS  -->

<?php include("secciones/ubicacion.php"); ?>
<!-- fin de UBICACION -->
</main>


 <?php include("secciones/campo-formulario.php");?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src"js/app.js"></script>
<script src"js/validacion.js"></script>
  </body>
</html>
