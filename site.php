<h1> Configurações gerais do Site </h1>

<?php

$sql = "select * from site";
$res = $mysqli -> query($sql);
$row = $res->fetch_object(); 

?>

<form id="form-site" class="" action="" method="post">

        <input type="hidden" name="acao" value="editar">

        <div>
            <h3>Sobre nós</h3>
            <textarea type="text" name="sobre-nos" id="sobre-nos" value="" rows="5" cols="50"><?php print $row->sobre_nos;?></textarea>
        </div>

        <div>
            <h3>Contato</h3>
            <textarea type="text" name="contato" id="contato" value="" rows="5" cols="50"><?php print $row->contato;?></textarea>
        </div>

        <div>
            <h3>Trabalhe conosco</h3>
            <textarea type="text" name="trabalhe-conosco" id="trabalhe-conosco" value="" rows="5" cols="50"><?php print $row->trabalhe_conosco;?></textarea>
        </div>

        <div class="div-buttom-registro-login">
            <button type="submit" class="btn btn-outline-success buttom_registro_login" id="form-site">Salvar</button>
        </div>

</form>

<?php

if (isset($_POST['acao'])) {
    
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

}
?>