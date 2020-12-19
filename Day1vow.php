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
        <form action="Day1vow.php" method="get">
        Enter <textarea name="ch"></textarea>
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php

        function vowels($ch){
            $count=0;
        for($i=0; $i<=strlen($ch);$i++){
            if($ch[$i]=="a" ||$ch[$i]=="e" ||$ch[$i]=="i" ||$ch[$i]=="o" ||$ch[$i]=="u"){
                $count++;
            }
        }
        return $count;    
    }
    $output=vowels($ch);
    echo("Vowels are: $output");

    ?>

    


    
</body>
</html>