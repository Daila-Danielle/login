<?php

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:?pagina=login');
  }

$logado = $_SESSION['email'];

$foto = consulta_foto($logado);

?>

<div>
<h4>PARABENS <?php echo $logado ?> EFETUOU O LOGIN</h4>

<center><img class="img" src="<?php echo $foto['foto_perfil'] ?>"></center>
</div>
