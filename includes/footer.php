    <!--INICIO RODAPÉ-->
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <address>
              <h4>Venha nos Visitar</h4>
              <span>Igreja Evangélica Pentecostal</span></br>
              <span>Rua Santa Izabel, n° 225, Centro</span></br>
              <span>Ouro Verde de Minas - Cep 39.855-000</span></br>
              <span>Pr. Paulo Henrique Ribeiro</span></br>
              <span>Tel/Whatsapp: (33)988792993</span></br>
              <span>Email: iep.ouroverdemg@gmail.com</span>
            </address>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <p>© 2016 Copyright by Augusto Ramos. All rights reserved.</p>
        </div>
      </div>
    </div><!--FIM container-fluid-->
    <!--FIM RODAPÉ-->

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <!--Script Combobox Cidade e Estados-->
    <script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade'),
        estado: document.getElementById('estado')
      })
    </script>
    <!--Script para controlar a velocidade do carousel de imagens da home e permitir avançar as imagens com as setas do teclado do usuario-->
    <script>
      $('.carousel').carousel({
        interval:5000,
        keyboard:true
      })
    </script>

    <script>
      jQuery(document).ready(function($) {
        $('#myCarousel').carousel({
                interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
          var id_selector = $(this).attr("id");
          try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
          } catch (e) {
            console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
      });
    </script>
  </body>
</html