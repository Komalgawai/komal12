<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Product{
            var $brand;
            var $property;
           
            

            function __construct($brandd,$propertyy){
                $this->brand=$brandd;
                $this->property=$propertyy;
               
            }
            
            function printdetails(){
                echo"Brand is:",$this->brand,"<br>";
                echo"property is:", $this->property,"<br>";
               
                       
            }
               

        }
        class Laptop extends Product{

                public $price;
                static $accessories= array("ear-phone","charger","...");  
                function __construct($brandd,$propertyy,$pricee){
                    $this->brand=$brandd;
                    $this->property=$propertyy;
                    $this->price=$pricee;
                }

                function feature(){
                    echo "Assessiories:";
                    foreach(Laptop::$accessories as $value){
                        echo"<br>",$value;
                    }  
                }
                
                function totalcost($amount){
                    echo "Cost is:",$this->price*$amount;
                }     
            
            
        }

        $mob=new Product("redmi9pro","hiii");
        $mob->printdetails();

        $lap=new Laptop("redmi9pro","abc",20000);
        $lap->printdetails();
        $lap->feature();
        $lap->totalcost(2)
        


        

        
        
       
    ?>
</body>
</html>