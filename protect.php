<?php

    include('css.php');

    if(!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION['id'])){

        die("<div class='containerprotect'>
                <div class='messageprotect'>
                <b>Você não pode acessar essa página</b>
                </div>
                    <a href=\"index.php\" class='buttonprotect'>Entrar</a>
                </div>");
    }

?>
  






