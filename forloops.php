<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <!-- for loops -->
    <!-- loops means repatation (body will be repeated) -->
    <!-- for example i have rto repeat code 10times 
          10 times is limit or condition here
          loops always strat from 0 to 9 --->
          <!-- increment in values i++  -->
          <!-- three parts of loops for(start ; condition ; increment/decrement) -->
          <!--for($i=0; i<10; i++)  -->
    <?php 
        for($i=0 ; $i<10 ; $i++){
          
            echo "<h5> $i ESME </h5> \n";
     }
    ?>

<table class="table">
   <tbody>
    
    <?php 
     for($i=0 ; $i<10; $i++) {
        $n= $i+1;
         ?>
           <tr>
           <td scope="row">2</td>
           <td>x</td>
           <td><?php echo $n?></td>
           <td>=</td>
           <td><?php echo $n*2?></td>
       </tr>
       <?php
     }
    ?>
   </tbody>
</table>
<br>
<br>
<br>

<ul>
    <?php 
    for($i = 2; $i < 7; $i++){
        ?>
        <li> <?php echo $i*$i?>  </li>
        <?php
    }
   ?>
   </ul>
   


    
</body>
</html>