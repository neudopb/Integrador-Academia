<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<form class="form-horizontal form-cadastro" action="index.php">
				<legend class="positionElem">
					<h2>Cadastro</h2>
				</legend>
				<hr>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtNome">Nome : </label>
					<input id="txtNome" name="txtNome" type="text" placeholder="Nome" class="form-control input-md validacao" required="">
				</div>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtEmail">E-mail : </label>
					<input id="txtEmail" name="txtEmail" type="email" placeholder="E-mail" class="form-control input-md validacao" required="">
				</div>
				<!--<div class="wrap-input100 validate-input m-b-10">
					<label for="txtMatricula">Matricula : </label>
					<input id="txtMatricula" name="txtMatricula" type="text" placeholder="Matricula"
						class="form-control input-md validacao" required="">
				</div>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtSenha">Senha : </label>
					<input id="txtSenha" name="txtSenha" type="password" placeholder="Senha"
						class="form-control input-md validacao" required="">
				</div>-->
				<div class="row">
					<div class="form-group col-md-6">
						<label for="txtMatricula">Matricula : </label>
						<input id="txtMatricula" name="txtMatricula" type="text" placeholder="Matricula" class="form-control input-md validacao" required="">
					</div>
					<div class="form-group col-md-6">
						<label for="txtSenha">Senha : </label>
						<input id="txtSenha" name="txtSenha" type="password" placeholder="Senha" class="form-control input-md validacao" required="">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="txtDataNasc">Data de Nascimento : </label>
						<input id="txtDataNasc" name="txtDataNasc" type="text" placeholder="Data de Nascimento" class="form-control input-md validacao" required="">
					</div>
					<div class="form-group col-md-6">
						<label>Sexo : </label><br>
						<div class="cor">
							<label>
								<input type="radio" name="sexo" value="M" required> Masculino
							</label>
							<label>
								<input type="radio" name="sexo" value="F" required> Feminino
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="txtCargo">Cargo : </label>
						<input id="txtCargo" name="txtCargo" type="text" placeholder="Cargo" class="form-control input-md  validacao" required="">
					</div>
					<div class="form-group col-md-6">
						<label>Tipo de conta : </label>
						<div class="cor">
							<label>
								<input type="radio" name="tipoConta" value="1" required> Usuário
							</label>
							<label>
								<input type="radio" name="tipoConta" value="2" required> Treinador
							</label>
						</div>
					</div>
				</div>

				<hr>
				<div class="positionElem">
					<button id="btnsalvar" name="btnsalvar" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/cadastro.js"></script>

</body>

</html>