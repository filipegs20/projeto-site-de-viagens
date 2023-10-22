<?php

include('conexao.php');

$sql = "DELETE FROM pacotes WHERE id=".$_REQUEST["id"];

$res = $mysqli->query($sql);

if($res==true){
    print "<script> alert('Excluído com sucesso!');</script>";
    print "<script> location.href='backoffice.php?page=packages';</script>";
}
else{
    print "<script> alert('Não foi possível excluir');</script>";
    print "<script> location.href='backoffice.php?page=packages';</script>";

}

?>