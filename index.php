<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Igreja Evangelica Pentecostal Ouro Verde de Minas</title>
    
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Script Combobox Cidade e Estados-->
    <script type="text/javascript">
      window.onload = function() {
          new dgCidadesEstados( 
              document.getElementById('estado'), 
              document.getElementById('cidade'), 
              true
          );
      }
    </script>
  </head>
  <body>
    <!--INICIO BANNER PLACA-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <img src="img/placa.jpg" alt="" class="img-responsive" height="170px" width="100%">
        </div>
      </div>
    </div>
    <!--FIM BANNER PLACA-->
    
    <nav class="navbar navbar-default">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div><!--navbar-header-->
      
      <!--INICIO MENU-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Galeria de Fotos</a></li>
                <li><a href="#">Pastor e Equipe</a></li>
                <li><a href="pedido_oracao.php">Pedido de Oração</a></li>
                <li><a href="#">Sicam</a></li>
                <li><a href="#">Moodle</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- col-md-8 col-md-offset-2 -->
        </div><!--row-->
      </div><!--container-->
      <!--FIM MENU-->
    </nav><!--navbar-->

    <!--INICIO CARROUSEL DE IMAGENS-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="carousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
            </ol><!--carousel indicators-->

            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/quartas-feiras.jpg" alt="">
              </div>
              
              <div class="item">
                <img src="img/quintas-feiras.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/sabados.jpg" alt="">
              </div>

              <div class="item">
                <img src="img/domingos.jpg" alt="">
              </div>

            </div><!--carousel inner-->

            <a href="#carousel" class="left carousel-control" data-slide="prev">
              <i class="glyphicon glyphicon-chevron-left"></i>
            </a>

            <a href="#carousel" class="right carousel-control" data-slide="next">
              <i class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </div><!--carousel slide-->
        </div><!--col-md-10-->
      </div><!--row-->
    </div><!--FIM container-fluid-->
    <!--FIM CARROUSEL DE IMAGENS-->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <center><h4>Nosso Canal no Youtube</h4></center>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">    
          <div class="col-md-4">
            <center><p>1º Aniversário da IEP Ouro Verde/MG Parte I</p></center>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ne8sMwrESOc" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          
          <div class="col-md-4">
            <center><p>1° Aniversário da IEP Ouro Verde/MG Part II</p></center>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oflyuZKco6A" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-md-4">
            <center><p>2º Culto de Missões da IEP Ouro Verde/MG</p></center>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jGzSZLOzclc" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div><!--FIM row-->
    </div><!--FIM container-fluid-->

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <center><h4>Grupos da IEP Ouro Verde de Minas</h4></center>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-4">
            <img class="img-responsive thumbnail" src="img/grupo-adoradores-do-rei.jpg" alt="">
          </div>

          <div class="col-md-4">
            <img class="img-responsive thumbnail" src="img/grupo-adoradores-por-excelencia.jpg" alt="">
          </div>

          <div class="col-md-4">
            <img class="img-responsive thumbnail" src="img/grupo-lirio-dos-vales.jpg" alt="">
          </div>
        </div>
      </div>
    </div><!--FIM container-fluid-->     

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <!-- Script Combobox Cidade e Estados -->
    <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
    <!--Script para controlar a velocidade do carousel de imagens da home e permitir avançar as imagens com as setas do teclado do usuario-->
    <script>
      $('.carousel').carousel({
        interval:5000,
        keyboard:true
      })
    </script>
  </body>
</html>