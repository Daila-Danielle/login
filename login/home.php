<?php

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:?pagina=login');
  }

$logado = $_SESSION['email'];

$foto = consulta_foto($logado)

?>

<div>
<h1>PARABENS <?php echo $logado ?> EFETUOU O LOGIN</h1>

<img src="<?php echo $foto['foto_perfil'] ?>">
</div>