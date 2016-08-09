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

		<div class="row" style="margin-top:5%;">
			<div class="col-md-10 col-md-offset-1">
				<fieldset>
					<legend><center>Faça Seu Pedido De Oração</center></legend>

					<form action="">
						<div class="row">
							<div class="col-md-4 col-md-offset-2">
								<label for="nome">Nome: </label>
								<input type="text" name="nome" class="form-control" placeholder="Nome Completo" autofocus required>
							</div>

							<div class="col-md-4">
								<label for="email">Email: </label>
								<input type="email" name="email" class="form-control" placeholder="Email">
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
								<label for="pedido-oracao">Pedido: </label>
								<textarea name="pedido-oracao" class="form-control" id="pedido-oracao" cols="30" rows="10"></textarea>
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
    <!--Inclusão do rodapé-->
    <?php
      include 'includes/footer.php';
    ?>