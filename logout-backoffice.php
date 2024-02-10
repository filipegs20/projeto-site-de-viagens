<?php 

if(!isset($_SESSION)){
    session_start();
}

session_destroy();
?>
    <!-- //header("Location: index.php"); -->
    <div id='tela-de-carregamento'>
        <div class='spinner'></div>
        <p><b>Saindo...</b></p> 
    </div>

<script> location.href='http://localhost/projeto-site-de-viagens/index.php';</script>";






    


<script src='tela-carregamento.js'></script>