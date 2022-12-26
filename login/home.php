<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:?pagina=login');
  }

$logado = $_SESSION['email'];
?>

<div>
<h1>PARABENS <?php echo $logado ?> EFETUOU O LOGIN</h1>
<img src="https://cdn.dicionariopopular.com/imagens/imagem-de-perfil-gato.jpg">
</div>