<DOCTYPE html>

<html>

	<head>
   		<meta charset="utf-8">
    		<title>Minha tela de login</title>
    		<link rel="stylesheet" href="styles.css">
		<script src="script.js"></script>
  	</head>

	<body>
		<div class="login-container dark-mode">
			<h2>Login</h2>
 			<form name="f_acad" action="validaLogin.php" method="POST">
				<input type="text" id="nome" name="f_nome" placeholder=Nome required>
				<input type="email" id="email" name="f_email" placeholder=Email required>
				<input type="password" id="senha" name="f_senha"placeholder=Senha>
				<input type="submit" value="ENVIAR">
			</form>
		</div>
	</body>
</html>
