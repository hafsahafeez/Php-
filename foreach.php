<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 
        $fruits = ["Peach","Apple", "orange"];
        // echo $fruit[1];
        foreach ($variable as $item){
           echo $item ."<br>";
        }

    ?>
     
     <!-- 2nd -->
      <?php 
        $fruits = ["Peach","Apple", "orange"];
        // $colors = ["peach","red", "orange"];
      ?>


      <ul>
          <?php 
          foreach($fruits as $f){
              ?>
              <li> <?php echo $f ?> </li>
              <?php
          }
          ?>
      </ul>
<br> 
<br> 
<br> 
       <!-- for loops -->
       <?php 
        $fruits = ["Peach","Apple", "orange"];
        $colors = ["peach","red", "orange"];
      ?>

      <ul>
          <?php 
          for ($i=0 ; $i <3 ;$i++){
              ?>
              <li> 
                  <?php echo $fruits[$i] . ' '. $colors[$i] ?> hota hay.
             </li>
              <?php
          }
          ?>
      </ul>

      <br> 
<br> 
<br> 
  <?php
 $odds=  [1,3,5,7,9,11];
 $even= [2,4,6,8,10,12];
?>
    <ul>
      <?php 
         for ($i = 0 ; $i< count ($odds);$i++){
             ?>
         <li> <?php echo $odds[$i]  ?> </li>
         <li> <?php echo $even[$i]  ?> </li>
       
       <?php 
        }
      ?>

    </ul>


    
</body>
</html>