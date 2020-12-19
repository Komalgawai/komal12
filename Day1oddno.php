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
        <form action="Day1oddno.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        for($i=0; $i<$num1;$i++){
            if($i%2 !=0){
                echo "Odd No: $i <br>";
            }
            else{
                echo"Even no: $i <br>";
            }
        }

    ?>

    


    
</body>
</html>