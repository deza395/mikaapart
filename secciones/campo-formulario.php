<!-- CONTACTO-->
 <div class="contacto" id="campo-formulario">
       <div class="container">
         <div class="title">
             <h3>CONTACTO</h3>
           <img src="img/img-arabezco.svg" alt="">
        </div>
        <div class="contacto2">
           <div class="row">
                      <div class="col-12 col-md-8 col-lg-6 datos" style="padding:20px;">
                         <h4 style="font-size:23px; padding-bottom:30px; "> Para consultas o reservas no dudes en comunicarte con nosotros, te estaremos contestando a la brevedad</h4>
                         <div class="telefono-y-wpp" style="padding-bottom:50px;">
                           <div class="icono">
                             <i class="fas fa-mobile-alt"> </i>
                           </div>
                           <div class="titulo-contacto">
                            <h5 style="font-size:29px; padding-top:10px;padding-bottom:18px;"> Telefono y Whatsapp</h5>
                               <h6 style="font-size:21px; padding-bottom:10px;" >+5491162748624 <span style="padding-left:8px;font-size:18px;">Sra Teresa</span> </h6>
                               <h6 style="font-size:21px; padding-bottom:10px;" >+5491130771016 <span style="padding-left:8px;font-size:18px;">Sr Alberto</span> </h6>
                            </div>
                            </div>
                            <div class="email-contacto">
                               <div class="icono">
                                  <i class="far fa-envelope"></i>
                               </div>
                           <div class="titulo-email">
                             <h5 style="font-size:28px; padding-top:10px; padding-left:8px;">Email</h5>
                               <h6 style="font-size:21px; padding-bottom:10px;">teresaylopez@hotmail.com</h6>
                           </div>

                          </div>
                        </div>
              <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

      <?php
      } else{
      ?>

          <!--FORMULARIO DE CONTACTO  -->
                <div class=" col-12 col-md-8 col-lg-6 ">

                   <form  class="formulario" action="envio-formulario.php" method="post" enctype="multipart/form-data">

                      <input id="nombre" class="nombre" type="text" placeholder="Nombre" name="nombre" required>

                      <input id="telefono" class="telefono" type="phone" placeholder="Telefono" name="telefono" >

                      <input id="email" class="email" type="email" placeholder="Email" name="email" required>

                      <textarea id="mensaje" class="mensaje" placeholder="Mensaje" name="mensaje" required></textarea>

                      <button id="enviar" class="btn-enviar" type="submit" name="action"> Enviar
                                  <i class="far fa-paper-plane"></i>
                      </button>


                  </form>
                <?php } ?>

              </div>
              </div>
          </div>
      </div>
   </div>
