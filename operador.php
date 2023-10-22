
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php include ('css.php');?>
    <nav class="nav nav-pills nav-fill">
  <a class="nav-link btn  botoes-nav-operador" aria-current="page" href="?page=dashboard">Dashboard</a>
  <a class="nav-link btn  botoes-nav-operador" href="?page=packages">Pacotes</a>
  <a class="nav-link btn  botoes-nav-operador" href="?page=site">Site</a>
  <a class="nav-link  botoes-nav-operador" href="?page=outros">Outros</a>
</nav>
<?php
session_start();    
    switch (@$_REQUEST["page"]){
        case "packages":
            include ("packages.php");
            break;
        case "package":
            include ("");
            break;
        case "package":
            include ("");
            break;
        default:
            include('dashboard.php');


    }



?>


</body>
</html>