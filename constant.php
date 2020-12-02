<?php 
   
//   constant Example

       $salary = 25000;
       $sale =200000;
       $commision_percentage = 10;
   
       $commision = ($sale * $commision_percentage) / 100 ;
   
       $deduction= 500;
    //    constant 1st in define variables name write in Capital letters
       define("INCOME", $salary + $commision -$deduction);
        
        echo "My income is" .INCOME;
   
   
   
   ?> 




