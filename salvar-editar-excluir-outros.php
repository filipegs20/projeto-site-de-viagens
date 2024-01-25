<?php
include('conexao.php');
switch ($_REQUEST["acao"]) {

    case 'cadastrar': 

        if(!isset($_POST['nome'])) {
            print "<script>
                        alert('Preencha o campo nome!');
                        setTimeout(function() {
                        window.location.href = '{$_SERVER['HTTP_REFERER']}';
                        }, 1000); // 1000 milissegundos = 1 segundo
                    </script>";
            die;
        } if(!isset($_POST['email'])){
            print "<script>
                        alert('Preencha o campo email!');
                        setTimeout(function() {
                        window.location.href = '{$_SERVER['HTTP_REFERER']}';
                        }, 1000); // 1000 milissegundos = 1 segundo
                    </script>";
            die;
        } elseif (!isset($_POST['senha'])) {
            print "<script>
                        alert('Preencha o campo senha!');
                        setTimeout(function() {
                        window.location.href = '{$_SERVER['HTTP_REFERER']}';
                        }, 1000); // 1000 milissegundos = 1 segundo
                    </script>";
            die;
        } else {


        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);

        $sql = "INSERT INTO sistema (nome, email, senha) VALUES ('{$nome}','{$email}','{$senha}')";

        $res = $mysqli -> query($sql);

        if($res==true){
            print "<script> alert('Usuário criado com sucesso!');</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");        
        }
        else{
            print "<script> alert('Não foi possível criar o usuário');</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");        

        }

        }

        break;
    
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

        $sql = "UPDATE sistema SET
                  nome = '{$nome}',
                  email = '{$email}',
                  senha ='{$senha}'                  
                WHERE 
                    id=".$_REQUEST["id"];

        $res = $mysqli->query($sql);

        if($res==true){
            print "<script>
                        alert('Alterado com sucesso!');
                        setTimeout(function() {
                        window.location.href = '{$_SERVER['HTTP_REFERER']}';
                        }, 1000); // 1000 milissegundos = 1 segundo
                    </script>";
        }
        else{
            print "<script>
                        alert('Não foi possível alterar o usuário');
                        setTimeout(function() {
                        window.location.href = '{$_SERVER['HTTP_REFERER']}';
                        }, 1000); // 1000 milissegundos = 1 segundo
                    </script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM sistema WHERE id=".$_REQUEST["id"];

        $res = $mysqli -> query($sql);
        if($res==true){
            print "<script> alert('Excluído com sucesso!');</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");        
        }
        else{
            print "<script> alert('Não foi possível excluir');</script>";
            header("Location: {$_SERVER['HTTP_REFERER']}");        

        }

        break;
}

?>