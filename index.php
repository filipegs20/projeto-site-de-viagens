<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FGS Trip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="?page=default">FGS Trip</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=default">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=pacotes">Pacotes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promoções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FGS indica!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=sobre-nos">Sobre nós</a>
          </li>
        </ul>
      <form class="d-flex" action="?page=pesquisa" method="post" role="search"> 
        <input class="form-control me-2" type="search" name="pesquisa" placeholder="Pesquisar" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form> 
        
      
      <?php 
      //mudanca de layout para usuario logado
      if(isset($_SESSION['nome'])) { ?>
        <button class='btn btn-outline-success botao_login' type=''>
            <a href='pefil do usuário' class='button_login'><?php echo $_SESSION['nome']; ?></a>
        </button>
        <button class='btn btn-outline-success btn-outline-danger' type=''>
            <a href='logout.php' class='button_login'>Sair</a>
        </button>
      <?php } else { ?>
        <button class='btn btn-outline-success botao_login' type=''>
            <a href='?page=login' class='button_login'>Login</a>
        </button>
        <button class='btn btn-outline-success' type=''>
            <a href='?page=registro' class='button_login'>Cadastro</a>
        </button>
        <?php } ?>

        
    </div>
  </div>
</nav>
<div class="container_page_complet">
      <?php
          include "css.php";
          include('conexao.php');
          
          switch(@$_REQUEST["page"]){
            case "pacotes":
                include ("cards.php");
                break;
            case "sobre-nos":
                include ("sobre-nos.php");
                break;
            case "contato":
                include ("contato.php");
                break;
            case "trabalhe_conosco":
                include ("trabalhe_conosco.php");
                break;
            case "login":
                include ("login.php");
                break;                     
            case "registro":
                include ("registro.php");
                break;
            case "salvar":
                include ("salvar-usuario.php");
                break;
            case "login-back":
                include ("login-backoffice.php");
                break;
            case "pesquisa":
                include ("pesquisa.php");
                break;
            case "pacote";
                include ("pacote.php");
                break;
            case "pagamento":
                include ("pagamento.php");
                break;
               
            default:
            include ("principal.php");
          }
      
      ?>
</div>
</body>


<footer>
  <div class="footer content">
        <div>
          <a href="?page=sobre-nos" class="links_footer">Sobre Nós</a>
        </div>

        <div>
          <a href="?page=contato" class="links_footer">Contato</a>
        </div>

        <div>
          <a href="?page=trabalhe_conosco" class="links_footer">Trabalhe conosco</a>
        </div>

        <div class="cartoes_footer">
          <b>Pague com:</b></br>
          <img src="https://www.cvc.com.br/imageproc/image/upload/v1/global/logos/cards/visa.svg" alt="">
          <img src="https://www.cvc.com.br/imageproc/image/upload/v1/global/logos/payments/mastercard.svg" alt="">
          <img src="https://www.cvc.com.br/imageproc/image/upload/v1/global/logos/cards/elo.svg" alt="">
          <img src="https://www.cvc.com.br/imageproc/image/upload/v1/global/logos/cards/american-express.svg" alt="AmericanExpress">
        </div>

        <div style="text-align: center;">
          Copyright. Direitos reservados.
        </div>
  </div>
</footer>







</html>