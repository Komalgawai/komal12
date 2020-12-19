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
    $oper=$_GET["oper"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>

    <form action="Day1cal.php" method="get"> 
    Num1<input type="number" name="num1">
    Num2<input type="number" name="num2">
    Operator<input type="text" name="oper">
    <input type="submit" value="submit">
    </form>

    <?php } ?>
    
    <?php
        
             if($oper=='+'){
                $result=$num1+$num2;
                 echo"Addition is:",$result;
             }
             if($oper=='-'){
                $result=$num1-$num2;
                echo "Subtraction is:",$result;
            }
            if($oper=='*'){
                $result=$num1*$num2;
                echo"multiplication is:",$result;
            }
            if($oper=='/'){
                $result=$num1/$num2;
                echo"Division is:",$result;
            }
             
         
    
    ?>

    
</body>
</html>