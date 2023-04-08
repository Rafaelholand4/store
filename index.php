<?php
  session_start();
  $nome = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Tela Inicial</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- link para o arquivo CSS -->
	<script src="https://kit.fontawesome.com/376379091d.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
	<nav>
		<div class="logo">
		<a href="index.php">
			<img src="logo.jpg" alt="Logotipo da Minha Empresa">
		</a>
		</div>
		<div class="search-box">
			<input type="text" placeholder="Pesquisar...">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
		</div>
		<div class="icons">
			<a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
		</div>
		<div class="profile">
		<a href="#"><i class="fa-solid fa-circle-user"></i></a>
		<div class="profile-info">
			<span>Olá, <?php echo $nome ?></span>
			<a href="logout.php">Sair</a>
		</div>
		</div>
	</nav>
        </div>
    </header>
	<main>
		<section class="card">
    <a href="notebook.php">
      <img src="notebook.jpg" class="clicavel" onclick="exibirMenu1()">
    </a>
			<h2>Monte seu Notebook</h2>
			<p>Aqui na InfoTech, você pode montar seu noteboook do jeito que sempre sonhou!</p>
			<button>Montar Agora</button>
		</section>

		<section class="card">
    <a href="pc.php">
      <img src="pc.png" class="clicavel" onclick="exibirMenu2()">
    </a>
			<h2>Monte seu PC</h2>
			<p>Já sonhou em ter aquele PC do seu jeitinho?</p>
			<button>Montar Agora</button>
		</section>
	</main>
 
  <footer>
		<p>Todos os direitos reservados &copy; 2023</p>
	</footer>
  </body>
</html>
