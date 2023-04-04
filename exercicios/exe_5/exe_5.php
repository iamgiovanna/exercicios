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
    $n1 = $_POST['txtn1'];
    $n2 = $_POST['txtn2'];

    $nf = ($n1 + $n2)/2;

    if($nf>=8){
        echo "Prezado(a) aluno(a), você foi aprovado com a média " .$nf;
    } else if ($nf >=3 && $nf<6){
        echo "Prezado(a) aluno(a), você precisa fazer a recuperação, pois ficou com a média " .$nf;
    } else if ($nf <3){
        echo "Prezado(a) aluno(a), você foi reprovado, pois ficou com a média " .$nf;
    }  
    
    ?>
    
</body>
</html>