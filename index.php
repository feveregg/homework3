<?php
$text = 'my text';
$obj = new main();
$obj->printthis($text);
$obj->trimthis($text);
$obj->cslash($text);
$obj->character($text);
$obj->splitthis();
$obj->joinstring();
$obj->lowercase();
$obj->splitstring($text);
$obj->stringcmp();


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

   public function splitthis() {
   
   echo "<h1>explode function demo</h1>";
   $str = "1,2,3,4,5,6,7,8";
   print_r (explode(',',$str));
   echo "<hr>";
   
   }

   public function joinstring() {
   
   echo "<h1>implode function demo</h1>";
   $str = array("this","is","text","example");
   echo implode (" ",$str);
   echo "<hr>";
   
   }

   public function lowercase() {
   
   echo "<h1>lowercase function demo</h1>";
   $str = "HELLO WORLD";
   $str = lcfirst($str);
   echo "$str";
   echo "<hr>";
   
   }

   public function splitstring($text) {
   
   echo "<h1>splitstring function demo</h1>";
   $spt = str_split($text);
   print_r($spt);
   echo "<hr>";
   
   }

   public function stringcmp() {
   
   echo "<h1>string comarision demo</h1>";
   $var1 = "hello";
   $var2 = "world";
   if (strcmp($var1, $var2)!==0) {
     echo "var1 and var2 are not equal";
   }
   echo "<hr>";

   }




}


?>
