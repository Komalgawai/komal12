<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $select=$_GET["select"];

    if($select==''){?>
        <form action="Day1climate.php" method="get">
        <select name="select">
	<option>select</option>
	<option>Rainy</option>
	<option>Sunny</option>
	<option>Cold</option>
    <option>Windy</option>
        </select>
        <input type="submit" value="submit">
        
        </form>

    <?php } ?>

    <?php
      switch($select){
        case 'Rainy';
            echo"This is Rainy";
            break;
        case 'Sunny';
            echo"This is Sunny";
            break; 
        case 'Cold';
            echo"This is Cold";
            break; 
        case 'Windy';
            echo"This is Windy";
            break;            

      }
     
    ?>

    


    
</body>
</html>