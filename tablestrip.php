<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=" " method="post">
    <div class="form-group row p-4">
        <div class="col-lg-4">
            <label for="number">Number:</label>
            <input type="number" name="num" id="num-1" placeholder="enter number" class="form-control">
        </div>

        <div class="col-lg-4">
            <label for="time">Times:</label>
            <input type="number" name="times" id="num-1" placeholder="enter number" class="form-control">
        </div>

        <div class="col-lg-4 mt-4">
            
        <input type="submit" name="" id="" class="btn btn-info p-2 mx-5" value="Go!">
        </div>

       </div> <!----row--->
  
       <table class="table">
   <tbody>
       
   <?php  
        if (isset($_POST['num']) && (isset($_POST['times']))) {
            for ($i = 0 ; $i<=$_POST['times'] ; $i++) {
                if (($i % 2
                )==0) {
                    ?>
           <tr  style="background-color:#333; color:#fff">
           <td scope="row" class="border border-secondary"><?php echo $_POST['num']?></td>
           <td  class="border border-secondary">x</td>
           <td  class="border border-secondary"><?php echo $i ?></td>
           <td  class="border border-secondary">=</td>
           <td  class="border border-secondary"><?php echo $_POST['num']*$i?></td>
       </tr>
       <?php
                } else {
                    ?>
            <tr style="background-color:#fff; color:#000">
            <td scope="row" class="border border-secondary"><?php echo $_POST['num']?></td>
            <td  class="border border-secondary">x</td>
            <td  class="border border-secondary"><?php echo $i ?></td>
            <td  class="border border-secondary">=</td>
            <td  class="border border-secondary"><?php echo $_POST['num']*$i?></td>
        </tr>
        <?php
                }
            }
        }
        ?>    
   
   </tbody>
</table>





    </form>
    
</body>
</html>