<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">


</head>
<body >
<div class="header-container">
 
 <h3>SISTEMA DE LOGIN</h3>

</div>   
<nav class="navbar navbar-expand-sm  ">
  <div class="container-fluid">
    <ul class="navbar-nav">
      
      <li class="nav-item ">
        <a class="nav-link active  " href="?pagina=login">Login</a>
      </li>
      
    </ul>
    <ul class="navbar-nav">
      
      <li class="nav-item ">
        <a class="nav-link active  " href="?pagina=sair">sair</a>
        
        
      </li>
      
    </ul>

  </div>
</nav>

<div class="container"> <!-- container onde irá aparecer as paginas chamadas -->
    <?php 
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        error_reporting(E_ALL);
        ini_set('default_charset','UTF-8');
        include("./conexao.php");
        include("./consultas-bd.php");

        #caso escolha uma das opções manda pra pagina especifica.
        switch(@$_REQUEST["pagina"]){ 
            case "login":
                include ("login.php");
            break;
            case "cadastro-usuario":
                include ("cadastro-usuario.php");
            break;
            case "salvar-usuario":
              include ("acoes.php");
            break;
            case "teste-usuario":
              include ("teste.php");
            break;
            case "home":
              include ("home.php");
            break;
            case "sair":
              session_start();
              print "<script>alert('Deslogado!');</script>";
              session_destroy();
              print "<script>location.href='?pagina=login';</script>";

            break;
            default:
            print "Bem vindos!";
        }
    ?>
</div>
