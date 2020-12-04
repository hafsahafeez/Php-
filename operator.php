<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Operator</title>
</head>
<body>
    <?php
    // OR Operator
    echo ("OR || operator <br>");

$age= 30;
$salary= 25000;
$lone=( $age >=30 || $salary >= 25000);
echo ("your age is $age <br> ");
echo ( " your salary is $salary <br>"); 
var_dump($lone);


    // And Operator
    echo (" <br> <br>And && operator <br>");
$age= 30;
$salary= 52000;
$lone=( $age >=30 && $salary <= 25000);
echo ("your age is $age <br> ");
echo ( " your salary is $salary <br>");
var_dump($lone);


// and+or operator
      echo ("<br> <br> and+or operator <br>");
$age= 25;
$salary= 25000;
$status= "unmarried";
$lone=( $age >=30 && ($salary >= 25000 || $mar == "unmarried"));
echo ("your age is $age <br> ");
echo ( " your salary is $salary <br>");
echo ( " your martial status is $status <br>");
var_dump($lone);
        
        
// xor Operator
     echo (" <br> <br>Xor operator <br>");

      $a = 12;
      $b = 2;
      $c = 12^2;
      var_dump($c);
         
         
// dot(.) operator
 echo ("<br> <br>Dot (.)operator <br>");

    $f = " Hafsa" . "Hafeez"; 
    echo ("$f <br>"); 

//Ternary Operator 
echo (" <br> <br> Ternary operator <br>");
$p=60;
$status= $a >= 60?"p":"f";
 echo $status;


?>

    
</body>
</html>