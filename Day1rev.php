<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $ch=$_GET["ch"];

    if($ch==''){?>
        <form action="Day1rev.php" method="get">
        Enter name<input type="text" name="ch">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        function Reverse($ch){
        $len=strlen($ch);
        for($i=0,$j=$len-1; $i<$j; $i++,$j--){
           $temp=$ch[$i];
           $ch[$i]=$ch[$j];
           $ch[$j]=$temp;
        }
        return $ch;
        
    }
    $result=Reverse($ch);
    echo"Reverse string is: $result ";


    ?>

    


    
</body>
</html>