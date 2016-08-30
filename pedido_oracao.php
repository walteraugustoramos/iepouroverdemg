<!--Start Session Msg-->
<?php
  session_start();
?>
<!--Inclusão do header-->
<?php
  include 'includes/header.php';
?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <img src="img/pedido-de-oracao.jpg" class="img-responsive" alt="" height="200" width="100%">
      </div>
    </div>
    
    <div class="row" style="margin-top:2%;">
      <div class="col-md-4 col-md-offset-4">
        <?php
          if(!empty($_SESSION['msg']['success'])){
        ?>
        <div class="alert alert-success" role="alert">
          <center><?=$_SESSION['msg']['success']?></center>
        </div>
        <?php
          unset($_SESSION['msg']['success']);
          }else if(!empty($_SESSION['msg']['error'])){
        ?>
          <div class="alert alert-danger" role="alert">
            <center><?=$_SESSION['msg']['error']?></center>
          </div>
        <?php
          unset($_SESSION['msg']['error']);
          }//fechamento do else if
        ?>
      </div><!--col-md-4 col-md-offset-4-->
    </div><!--row-msg-->

    <div class="row" style="margin-top:5%;">
      <div class="col-md-10 col-md-offset-1">
        <fieldset>
          <legend><center>Faça Seu Pedido De Oração</center></legend>

          <form action="enviar_pedido_oracao.php" method="post">
            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" class="form-control" placeholder="Nome Completo" autofocus required>
              </div>

              <div class="col-md-4">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <label for="estado">Estado: </label>
                <select id="estado" name="estado" class="form-control" required></select>
              </div>

              <div class="col-md-4">
                <label for="cidade">Cidade: </label>
                <select id="cidade" name="cidade" class="form-control" required></select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <label for="pedido">Pedido: </label>
                <textarea name="pedido" class="form-control" id="pedido" cols="30" rows="10" required></textarea>
              </div>
            </div>

            <div class="row" style="margin-top:1%;margin-bottom:1%;">
              <div class="col-md-2 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
        </fieldset>
      </div>
    </div>
  </div>
<!--Inclusão do footer-->
<?php
  include 'includes/footer.php';
?>