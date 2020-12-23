<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    


    Abstract class Account{
        public $bal;
    
        function __construct($bal){
            $this->bal=$bal;
        }

         function getbalance(){
            echo"<h3>Welcome Komal Gawai</h3>";
            echo"Your balance is:".($this->bal)."<br>";
        }
    
        
        
    }
    interface calculate{
        function withdraw($wid);
        function deposite($dep);
        
    }
    
    class Saving extends Account implements calculate{

        public $wid;
        public $dep; 
        
        
        function withdraw($wid){
            echo "<h3>In saving:</h3>";
            echo"Withdraw Amount:".$wid."<br>";
            echo "Remaining Amount:".($this->bal-$wid)."<br>";
        }
        function deposite($dep){
            echo "Deposite Amount:".$dep."<br>";
            echo "Amount:".($this->bal+$dep)."<br>";
        }
        
    
    }



    class Current extends Account implements calculate{

        public $wid;
        public $dep; 

        function withdraw($wid){
            echo "<h3>In Current:</h3>";
            echo"Withdraw Amount:".$wid."<br>";
            echo "Remaining Amount:".($this->bal-$wid*2)."<br>";
        }
        function deposite($dep){
            echo "Deposite Amount:".$dep."<br>";
            echo "Amount:".($this->bal+$dep*2)."<br>";
        }
        
    
    }
    
    
    switch($select){
        case 'Account':
            $curr=new Current(20000);
            $curr->getbalance();
            break;
        case 'saving':
            $sav=new Saving(20000);
            $sav->withdraw(20000);
            $sav->deposite(2000);
            break;
        case 'current':
            $curr= new Current(20000);
            $curr->withdraw(20000);
            $curr->deposite(10000);    
            break;
    
    }
    

    


    ?>
    </body>
</html>