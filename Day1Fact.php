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
        <form action="Day1Fact.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        $facct=1;
        for($i=1; $i<=$num1;$i++){
            $facct=$facct*$i;
    
        }
        echo "Factorial is: $facct";



    ?>

    


    
</body>
</html>