<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $day = $_POST['day'];
    if ($day == 'Monday') {
        $meal ="Dal Chawal" ;


        
    }
    elseif ($day == 'Tuesday') {
        $meal ="Qeema" ;


    }
     elseif ($day == 'Wednesday') {
        $meal ="Sabzi" ;

        
    }
    elseif ($day == 'Thursday') {
        $meal ="Kabab" ;

        
    }
    elseif ($day == 'Friday') {
        $meal ="Fish" ;

        
    }
    elseif ($day == 'Saturday') {
        $meal ="Zinger" ;

        
    }
    else  {
        $meal ="Palao" ;
        

        
    }
    
    
    
    
    ?>
    Today Meal is <?php echo $meal ?>
</body>
</html>