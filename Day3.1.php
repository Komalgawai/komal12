<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Mobile{
            var $brand;
            var $price;
            var $model;
            static $accessories= array("ear-phone","charger");

            function __construct($brand,$price,$model){
                $this->brand=$brand;
                $this->price=$price;
                $this->model=$model;
            }

            function printdetails(){
                echo"Brand is:",$this->brand,"<br>";
                echo"Price is:", $this->price,"<br>";
                echo"Model Number:", $this->model,"<br>";
                echo"Accessories:";
                foreach(Mobile::$accessories as $value){
                    echo"<br>",$value;
                }  
                
            }
           function discount($amount){

                echo"Discount:",$this->price-$amount,"<br>";
            }
            

        }
        $mob=new Mobile("Redmi9pro",15000,"M2003J6A71");
        $mob->printdetails();
        $mob->discount(3000);


        $mob1=new Mobile("Nokia",20000,"M2003J6A71");
        $mob1->printdetails();
        $mob1->discount(5000);
        
        
    ?>
</body>
</html>