<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $num3=$_GET["num3"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>

    <form action="Day1greatest.php" method="get"> 
    Num1<input type="number" name="num1">
    Num2<input type="number" name="num2">
    Num3<input type="number" name="num3">
    <input type="submit" value="submit">
    </form>

    <?php } ?>
    
    <?php 
    if($num1>$num2 && $num1>$num3){
        echo "Num1: $num1";
    }
    else{ 
        if($num2>$num1 && $num2>$num3){
        echo"Num2: $num2";
        }
        else{
        echo"Num3: $num3";
        }

    } ?>

    
</body>
</html>