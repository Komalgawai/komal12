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

    <form action="Day1sumavg.php" method="get"> 
    Num1<input type="number" name="num1">
    Num2<input type="number" name="num2">
    Num3<input type="number" name="num3">
    <input type="submit" value="submit">
    </form>

    <?php } ?>
    
    <?php 
    
    $sum=$num1+$num2+$num3;
    $avg=$sum/3;

    if($avg>=90){
        echo"Grade-A";
    }
    elseif($avg>=80){
        echo"Grade-B";
    }
    elseif($avg>=70){
        echo"Grade-C";
    }
    else{
        echo"Grade-F";
    }
    
    ?>

    
</body>
</html>