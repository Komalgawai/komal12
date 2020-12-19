<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $num1=$_GET["num1"];

    if($num1==''){?>
        <form action="Day1swap.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        $len=strlen((string)$num1);
        for($i=0; $i<$len;$i++){
            $temp=$num1[$i];
            $num1[$i]=$num1[$j];
            $num1[$j]=$temp;   
        }
        echo "Swap is: $num1";



    ?>

    


    
</body>
</html>