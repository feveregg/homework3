<?php
$text = 'my text';
$obj = new main();
$obj->printthis($text);
$obj->cslash($text);

class main {

   public function printThis($text) {
 
   echo '<h1>print function demo</h1>';
   print($text);
   echo'<hr>';
 
   }

   public function cslash($text) {

   echo "<h1>trim function demo</h1>";
   echo chop($text, "text");
   echo "<hr>";

   }

}


?>
