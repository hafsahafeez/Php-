


<?php

// private mumber always avaliable with in class/no inheritance
// protected work in inheritance
// public
function br(){
 echo "<br>";
}
function hr(){
    echo "<hr>";
   }
   class father
   {
       private $atmpin= "1234";
       protected $email = "father@gmail.com";
       public $name = "ali";
       public function __construct()
       {
           echo $this->name;
           br();
           echo $this->email;
           br();
           echo $this->atmpin;

       }
   }

   class child extends father
   {
     
    public function __construct()
    {
        echo $this->name;
        br();
        echo $this->email;
        br();
        // echo $this->atmpin;

    }
    public function __destruct()
    {
        hr();
        echo "<pre>     THE END <pre>";
    }

   }
$f = new child();

  echo ".......HAFSA";
?>

