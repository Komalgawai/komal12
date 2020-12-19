<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $y=$_GET["year"];

    if($num1==''){?>
        <form action="Day1year.php" method="get">
        Enter year<input type="number" name="year">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        
        function checkyear($y){
            if($y %400 ==0){
                echo"This is lear year",$y;
            }
            elseif($y%100==0){
                echo"This is lear year",$y;
            }
            elseif($y%4==0){
                echo"This is lear year",$y;
            }
            else{
                echo"This is not leap year";
            }
        }
        
    
     
    checkyear($y);

    ?>

    


    
</body>
</html>