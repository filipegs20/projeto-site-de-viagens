<h1>Dashboard</h1>
<?php

$sql_code = "SELECT count(nome) from clientes";
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);
$nomes = $sql_query -> fetch_assoc();

$sql_code = "SELECT count(nome_pacote) from pacotes";
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);
$pacotes = $sql_query -> fetch_assoc();

$dados_combinados = array_map(null, $nomes, $pacotes);

foreach ($dados_combinados as $data) {


print '<table class="table table-hover table-bordered">
    <tr>
        <td><h5>Quantidade usuários cadastrados:</h5></td>
        <td><h5>'. $dados_combinados[0][0].'</h5></td>
        <td></td>
    </tr>
    <tr>
        <td><h5>Quantidade de pacotes ativos:</h5></td>
        <td><h5>'. $dados_combinados[0][1].'</h5></td>
        <td></td>
    </tr>
    <tr>
        <td><h5>Total em pacotes vendidos:</h5></td>
        <td>valor</td>
        <td></td>
    </tr>
    <tr>
        <td><h5>Total de pacotes vendidos: R$</h5></td>
        <td>valor</td>
        <td></td>
    </tr>
</table>:';
}

?>

<div id="tela-de-carregamento">
    <div class='spinner'></div>
        <p>Acessando Backoffice...</p> 
    </div>
    
    <script src="tela-carregamento.js"></script>