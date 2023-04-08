<?php


require_once("funcaoValidaLogin.php");


 $login=$_POST["f_email"];
 $senha=$_POST["f_senha"];
 $nome = $_POST["f_nome"];


 $validar=validaLogin($login,$senha);


if ($validar == true) {
  session_start(); // inicia a sessão para armazenar as informações
  $_SESSION["nome"] = $nome; // exemplo de como armazenar o nome do usuário
  header('Location: index.php');
  exit;

}else {
    echo "Acesso Negado!";
}
 ?>