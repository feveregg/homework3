<?php
$text = 'my text';
$obj = new main();
$obj->printthis($text);
$obj->trimthis($text);
$obj->cslash($text);
$obj->character($text);



class main {

   public function printThis($text) {
 
   echo '<h1>print function demo</h1>';
   print($text);
   echo'<hr>';
 
   }

   public function trimthis($text) {

   echo "<h1>trim function demo</h1>";
   echo chop($text, "text");
   echo "<hr>";

   }

   public function cslash($text) {
   
   echo "<h1>cslash function demo</h1>";
   echo addcslashes($text, "e");
   echo "<hr>";

   }

   public function character($text) {

   echo "<h1>character function demo</h1>";
   echo chr(074);
   echo "<hr>";

   }




}


?>
