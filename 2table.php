<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2's table bu using loop</title>
</head>
<body>
    
<table class="table">
   <tbody>
    
    <?php 
     for($i=1 ; $i<10; $i++) {
        // $n= $i+1;
         ?>
           <tr>
           <td scope="row">2</td>
           <td>x</td>
           <td><?php echo $i+1?></td>
           <td>=</td>
           <td><?php echo 2*($i+1)?></td>
       </tr>
       <?php
     }
    ?>
   </tbody>
</table>

    
</body>
</html>