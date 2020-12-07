<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- switch have no condition 
         only work on variables($var) and case
        when we have limited choise (Enumevation) -->
    

<h1> Select your Day ?</h1>
<form action="" method="post">
    <div class="Form-group p-4">
        <label for="perc">Kindly Select the day First:</label>
       <select name="day" id="">
           <option> Monday </option>
           <option> Tuesday  </option>
           <option> Wednesday  </option>
           <option> Thursday  </option>
           <option>  Friday </option>
           <option> Saturday  </option>
           <option> Sunday </option>
    </select>
    </div>
  <input type="submit" value="  Go!" class="btn btn-info mx-4">
</form>

<!-- php -->
<div class="container">
<?php
     if (isset( $_POST['day'])) {

        $day = $_POST['day'];
        // switch have no condition 
        //  only work on variables($var) and case
        // when we have limited choise (Enumevation)
    
       switch ($day) {
           case 'Monday':
            $meal = "Daal Roti";
           break;
       }
       switch ($day) {
        case 'Tuesday':
         $meal = "Biryani";
        break;
    }
    switch ($day) {
        case 'Wednesday':
         $meal = "Pizza";
        break;
    }
    switch ($day) {
        case 'Thursday':
         $meal = "Qeema";
        break;
    }
    switch ($day) {
        case 'Friday':
         $meal = "Palao";
        break;
    }
    switch ($day) {
        case 'Saturday':
         $meal = "Zinger";
        break;
    }
    switch ($day) {
        case 'Sunday':
         $meal = "Tikka";
        break;
    }
        echo " <br> Today Meal Is $meal";
    }
 ?>
</div>   
</body>
</html>