<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
    <h1>Welcome to SBI bank</h1>
        <table border=5>
        <tr>
            <th>Enter Pin</th>
            <th><input type="number" name="pin"></th>
        </tr>
        <tr>
            <th>Select option</th>
            <th><Select name="choice">
            <option value="select">Select</option>
            <option value="Account">Account</option>
            <option value="saving">Saving</option>
            <option value="current">Current</option>
        </Select></th>
        </tr>
        <tr>
        <th colspan=2><input type="submit" value="submit"></th>
        </tr>

        </table>



        
    
    </form>

    <?php
        
        $pin=$_GET['pin'];
        $select=$_GET['choice'];
        
        include "Atmphp.php";
    ?>
</body>
</html>