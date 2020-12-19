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
        <form action="Day1fab.php" method="get">
        num<input type="number" name="num1">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        
        function fab($num1){
        $n1=0;
        $n2=1;
        echo "Fab series:$n1 $n2";
        for($i=2;$i<$num1;$i++){
            $n3=$n1+$n2;
            echo" $n3";
            $n1=$n2;
            $n2=$n3;
        }
        
    }
        
    fab($num1);

    ?>

    


    
</body>
</html>