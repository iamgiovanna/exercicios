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
    
    $num = $_POST['num'];
    
    if($num>=0){
        echo "Número postivo";
    }else{
        echo "Número negativo";
    }
    
    ?>
</body>
</html>