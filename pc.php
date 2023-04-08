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
			<a href="#">Sair</a>
		</div>
		</div>
	</nav>
  <div class="container">
    <section class="card">
      <img src="pc.png">
    </section>
    <div class="clolumn">
      <h1>Monte seu Computador</h1>
      <form>
        <label for="memoriaP">Memória</label>
        <select id="memoriaP" name="memoriaP">
          <option value="4">4 GB - R$ 300</option>
          <option value="8">8 GB - R$ 500</option>
          <option value="16">16 GB - R$ 600</option>
          <option value="32">32 GB - R$ 1000</option>
        </select>
        <br>
        <label for="processadorP">Processador</label>
        <select id="processadorP" name="processadorP">
          <option value="Core i3">Intel Core i3 - R$ 300</option>
          <option value="Core i5">Intel Core i5 - R$ 500</option>
          <option value="Core i7">Intel Core i7 - R$ 800</option>
          <option value="AMD Ryzen 5">AMD Ryzen 7 - R$ 400</option>
        </select>
        <br>
        <label for="armazenamentoP">Armazenamento</label>
        <select id="armazenamentoP" name="armazenamentoP">
          <option value="128GB">128 GB - R$ 350</option>
          <option value="256GB">256 GB - R$ 500</option>
          <option value="512GB">512 GB - R$ 600</option>
          <option value="1TB">1TB - R$ 800</option>
        </select>
        <br>      
        <label for="sistemaP">Sistema Operacional</label>
        <select id="sistemaP" name="sistemaP">
          <option value="10">Windows 10 - R$ 350</option>
          <option value="11">Windows 11 - R$ 500</option>
        </select>
        <br>
        <label for="telaP">Monitor</label>
        <select name="telaP" id="telaP">
          <option value="14">Monitor LED 14 - R$ 800,00</option>
          <option value="15">Monitor LED 15 - R$ 900,00</option>
          <option value="17">Monitor LCD 17 - R$ 1000,00</option>
          <option value="39">Monitor Gamer 39 - R$ 1500,00</option>
        </select>
        <br>
        <button type="button" class="clicavel" onclick="calcularPrecoComputador()">Calcular Preço</button>
      </form>
      <br><br>
        <div id="resumoP"></div>
        <div id="precoP"></div>
    </div>
  </div>
</body>
</html>
