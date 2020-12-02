<!-- variable Types -->
<?php 
 $name = "Hafsa";
 $age = 20+2;
 $agee = "21" + '2';
 $height = 5.6;

var_dump($name );
var_dump($age);
var_dump($height);
var_dump($agee);

?>
<br>
<br>
<?php 
echo "2nd Variable & Operators Example <br> <br>";
    $salary = 25000;
    $sale =200000;
    $commision_percentage = 10;

    $commision = ($sale * $commision_percentage) / 100 ;

    $deduction= 500;
    $income = $salary + $commision -$deduction;
     
     echo "My income is $income";



?> 

