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
        <form action="Day1pali.php" method="get">
        Enter name<input type="text" name="ch">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php
        
        $len=strlen($ch);
        for($i=0; $i<=$len;$i++){
            if($ch[$i]==$ch[$len-1-$i]){
                echo"This is palindrom string: $ch";
                break;
            }
            else{
                echo"This is not palindrom string: $ch";
                break;
            }
    
        }
        


    ?>

    


    
</body>
</html>