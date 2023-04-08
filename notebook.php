<?php
  session_start();
  $nome = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- link para o arquivo CSS -->
	<script src="https://kit.fontawesome.com/376379091d.js" crossorigin="anonymous"></script>
    <title>Monte seu notebook</title>
  </head>
<body>
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
    <div class="container">
        <section class="cardV">
            <img src="notebook.jpg">
        </section>
        <div class="column">
            <h1>Monte seu notebook</h1>
            <form>
                <label for="memoria">Memória</label>
                <select id="memoria" name="memoria">
                    <option value="4">4 GB - R$ 300</option>
                    <option value="8">8 GB - R$ 500</option>
                    <option value="16">16 GB - R$ 600</option>
                    <option value="32">32 GB - R$ 1000</option>
                </select>
                <br>                
                <label for="processador">Processador</label>
                <select id="processador" name="processador">
                    <option value="Core i3">Intel Core i3 - R$ 300</option>
                    <option value="Core i5">Intel Core i5 - R$ 500</option>
                    <option value="Core i7">Intel Core i7 - R$ 800</option>
                    <option value="AMD Ryzen 5">AMD Ryzen 7 - R$ 400</option>
                </select>
                <br>
                <label for="armazenamento">Armazenamento</label>
                <select id="armazenamento" name="armazenamento">
                    <option value="128GB">128 GB - R$ 350</option>
                    <option value="256GB">256 GB - R$ 500</option>
                    <option value="512GB">512 GB - R$ 600</option>
                    <option value="1TB">1TB - R$ 800</option>
                </select>
                <br> 
                <label for="sistema">Sistema Operacional</label>
                <select id="sistema" name="sistema">
                    <option value="10">Windows 10 - R$ 350</option>
                    <option value="11">Windows 11 - R$ 500</option>
                </select>
                <br>
                <button type="button" class="clicavel" onclick="calcularPrecoNotebook()">Calcular Preço</button>
            </form>
            <br><br>
                <!-- Área onde o resumo das seleções e o preço serão exibidos -->
                <div id="resumo"></div>
                <div id="preco"></div>
        </div>
    </div>
</body>
</html>
