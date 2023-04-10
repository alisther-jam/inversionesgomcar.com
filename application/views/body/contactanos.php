<section id="cabecera">
    <div class="container">
        <h1>Contáctanos</h1>
    </div>
</section>
<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <div class="col-lg">
                    <h3 class="mb-3">Envíanos un mensaje</h3>
                    <hr>
                     <div class="confirmacion" style="text-align: center;margin: 0px 0px 10px;"></div>
                    <form id="form-mini" class="contactenos" method="post">
                        <div class="row-input d-flex">
                            <input type="text" required name="name" placeholder="Nombre *" class="first-item">
                            <input class = "border border-info" type="email" required name="email" placeholder="E-mail *">
                        </div>
                        <div class="row-input d-flex">
                            <input type="text" required name="telefono" placeholder="telefono" class="first-item">
                            <input type="text" required name="asunto" placeholder="asunto">
                        </div>
                        <textarea name="message" required id="textarea" placeholder="Mensaje"></textarea>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>

                </div>
            </div>
            <div class="col-md-4 info-col">
               
                    <h3 class="mb-3">Datos de Contácto</h3>
                    <p class="mb-4">Si deseas que nos reunamos puedes solicitarlo desde el formulario, o puedes comunicarte directamente con nosotros.</p>
                    <div class="info-wrapper d-flex align-items-center mb-3">
                        <span class="d-flex justify-content-center align-items-center"><i class="fa fa-map-marker"></i></span>
                        <a> Sector 2 Grupo 24 Mz. D Lt. 09 - V.E.S</a>
                    </div>
                    <div class="info-wrapper d-flex align-items-center mb-3">
                        <span class="d-flex justify-content-center align-items-center"><i class="fa fa-phone"></i></span>
                            <a href="tel:" > (01) 259 2516 - 995 911 487</a>
                    </div>
                    <div class="info-wrapper d-flex align-items-center mb-4">
                        <span class="d-flex justify-content-center align-items-center"><i class="fa fa-envelope"></i></span>
                        <a href="mailto:" > informes@inversionesgomcar.com</a>
                    </div>
               
                
                 </div>
        </div>
    </div>
</section>
<section><div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.2432548131624!2d-76.96856199114404!3d-12.2008447266735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b99dd6259473%3A0xb38ca8c0f9b213f2!2sUrbanizacion+Villaflores!5e0!3m2!1ses-419!2spe!4v1510613945895" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div></section>
<script type="text/javascript">
          $(function(){
            $(".contactenos").on("submit", function(e){
                e.preventDefault();
                    //formData.append(f.attr("name"), $(this)[0].files[0]);
                    $.ajax(
                    {
                        url: "contactanos/mail",
                        type: "post",
                        data: $( this ).serialize()
                    }).done(function(res){
                        if (res == 1) {
                          $(".confirmacion").addClass("alert alert-success");
                          $(".confirmacion").text("El mensaje se ha enviado, pronto estaremos en contacto contigo");
                          setTimeout(function(){ 
                            $(".confirmacion").removeClass("alert alert-success");
                            $(".confirmacion").html("");
                           }, 15000);
                          $(".contactenos")[0].reset();
                        }else{
                          $(".confirmacion").addClass("alert alert-danger");
                          $(".confirmacion").text("Error al enviar el mensaje y vuelva a intentarlo");
                          setTimeout(function(){
                           $(".confirmacion").removeClass("alert alert-danger"); 
                           $(".confirmacion").html("");
                         }, 15000);
                        }
                    })
                })
            });
        </script>