<?php
session_start();    

include("protect.php");

$logado = $_SESSION['nome'];

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="body-background">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <div class="backoffice_header">
        <div class="back_header_itens">
            <h1>Bem-vindo(a) ao Backoffice</h1>
        </div>
        
        <button class="btn btn-outline-success btn-outline-danger" type=""> <a href="?page=logout" class="button_login">Sair</a></button>

    </div>
    
    <?php include ('css.php')?>
    <nav class="nav nav-pills nav-fill">
  <a class="nav-link btn  botoes-nav-operador" aria-current="page" href="?page=dashboard">Dashboard</a>
  <a class="nav-link btn  botoes-nav-operador" href="?page=packages">Pacotes</a>
  <a class="nav-link btn  botoes-nav-operador" href="?page=site">Site</a>
  <a class="nav-link  botoes-nav-operador" href="?page=usuarios">Usuários</a>
  <a class="nav-link  botoes-nav-operador" href="?page=outros">Outros</a>

</nav>

<div class="container_page_complet">
    <?php
          include ("css.php");
          include('conexao.php');

          switch(@$_REQUEST["page"]){
            case "packages":
                include ("packages.php");
                break;
            case "dashboard":
                include ("dashboard.php");
                break;
            case "site":
                include ("site.php");
                break;
            case "editar":
                include ("form-edit-card.php");
                break;
            case "usuarios":
                include ("usuarios.php");
                break;
            case "outros":
                include ("outros.php");
                break;
            case "editar-usuarios":
                include ("editar-usuarios.php");
                break;
            case "logout":
                include ("logout-backoffice.php");
                break;
            default:
                include ("dashboard.php");
              }
    ?>
</div>


</body>

</html>


