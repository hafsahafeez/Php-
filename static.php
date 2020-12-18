<?php
//  static use for only constant
 class writer {
      public const prefix = "wp<br>";
      public static function writetext($text)
      
      {
        echo writer::prefix.$text;
      }
 }
//  $a = new writer;
//  $a -> writetext("hafsa hafeez");

//  $b = new writer;
//  $b -> writetext("HAFSA HAFEEZ");

writer::writetext(" HAFSA HAFEEZ <br> ");
echo writer::prefix;
?>