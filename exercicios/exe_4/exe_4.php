<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $usuario = $_POST['usuario'];
    $senha= $_POST['senha'];
    if($usuario == "ETE" && $senha == "ETE"){
        echo "Bem vindo ao sistema";
        }else if ($usuario != "ETE" && $senha != "ETE"){
            echo "Usuário ou senha iválida, tente novamente mais tarde!";
        }
    
    
    
    ?>
</body>
</html>