<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="containet">
    <?php

    $valor01=$_POST['valor01'];
    $valor02=$_POST['valor02'];

    if($valor01>$valor02){
        echo"<h1> O valor 1 é maior que o valor 2</h1>";

    }else if($valor01==$valor02){
        echo"<h1> OS dois valores são iguais</h1>";

    }
    else{
        echo "<h1> O valor 2 é maior que o valor 1</h1>";
    }
    ?>

</div>
    
</body>
</html>