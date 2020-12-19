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
        <form action="Day1sum.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        
        function sum($num1){
        $sum=0;
        while($num1>0){
             $digit=$num1%10;
             $sum+=$digit;
             $num1=$num1/10;
        }
        echo "Sum is: $sum";

        }
    sum($num1);

    ?>

    


    
</body>
</html>