<?php 

include('conexao.php');

switch ($_REQUEST["acao"]) {

    case 'editar':
    
    $sobre_nos = $_POST["sobre-nos"];
    $contato = $_POST["contato"];
    $trabalhe_conosco = $_POST["trabalhe-conosco"];
    
    $sql = "UPDATE site SET
            sobre_nos = '{$sobre_nos}',
            contato = '{$contato}',
            trabalhe_conosco ='{$trabalhe_conosco}'
            WHERE id='0'";

    $res = $mysqli -> query($sql);

    if($res==true){
        print "<script> alert('Salvo!');</script>";
        print "<script> location.href='?page=site';</script>";

        die;
    }
    else{
        print "<script> alert('Não foi possível criar o card');</script>";
        print "<script> location.href='?page=site';</script>";

    }
    break;

    case 'criar': {

    }
}
?>