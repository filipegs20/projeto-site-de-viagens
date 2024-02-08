<?php 

if(!isset($_SESSION)){
    session_start();
}

session_destroy();

//header("Location: index.php");  
print "<div id='tela-de-carregamento'>
<div class='spinner'></div>
<p>Deslogando...</p> 
</div>'

<script> location.href='?page=principal';</script>";

?>




    


<script src='tela-carregamento.js'></script>