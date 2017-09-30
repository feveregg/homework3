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
$obj->stringlen($text);




$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$obj->printarray($array);
$obj->uppercase();
$obj->arraychunk();
$obj->arrcombine();
$obj->arrcount();
$obj->arrmerge();
$obj->arrsort();
$obj->arrproduct();
$obj->arrreverse();
$obj->arrsearch();


class main {

   public function printThis($text) {
   
   echo "<h1>String</h1>";
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

   public function stringlen($text) {
   
   echo "<h1>string length function demo</h1>";
   echo strlen($text);
   echo "<hr>";
   
   }








 


   public function printarray($array) {
   
   echo "<h1>Array</h1>";
   echo "<h1>print array demo</h1>";
   print_r($array);
   echo "<hr>";
   
   
   }


   public function uppercase() {
   
   echo "<h1>uppercase array demo</h1>";
   $array1 = array("hello"=>"first", "world"=>"second");
   print_r(array_change_key_case($array1, CASE_UPPER));
   echo "<hr>";
   
   }


   public function arraychunk() {
   
   echo "<h1>array chunk demo</h1>";
   $array2 = array(a, b, c, d, e, f);
   print_r(array_chunk($array2, 2));
   echo "<hr>";
   
   }


   public function arrcombine() {
   
   echo "<h1>array combine function demo </h1>";
   $fname = array("Peter", "Ben", "Joe");
   $age = array("35" ,"37", "43");
   print_r(array_combine($fname, $age));
   echo "<hr>";
   
   }


   public function arrcount() {
   
   echo "<h1>array count function demo</h1>";
   $fruits = array("apple", "lemon", "banana", "apple", "banana");
   print_r(array_count_values($fruits));
   echo"<hr>";
   
   }


   public function arrmerge() {
   
   echo"<h1>array merge function demo</h1>";
   $sentence1 = array("hello ", "i ", "am ");
   $sentence2 = array("Kevin ", "Kao ", "!");
   print_r(array_merge($sentence1, $sentence2));
   echo "<hr>";
   
   }


   public function arrsort() {
   
   echo "<h1>array sort function demo</h1>";
   $arrayA = array(20,70,30,90);
   $arrayB = array(7,3,5,9);
   array_multisort($arrayA,$arrayB);
   var_dump($arrayA);
   var_dump($arrayB);
   echo "<hr>";
   
   }


   public function arrproduct() {
   
   echo "<h1>array product function demo</h1>";
   $arrayC = array(2,3);
   echo array_product($arrayC);
   echo "<hr>";
   
   }


   public function arrreverse() {
   
   echo "<h1>array reverse demo</h1>";
   $imput = array(1,2,3,4,5);
   $reverse = array_reverse($imput);
   print_r($imput);
   print_r($reverse);
   echo "<hr>";
   
   }


   public function arrsearch() {
   
   echo"<h1>array search demo</h1>";
   $arraycolor = array("blue","red","yellow");
   print_r(array_search("yellow", $arraycolor));
   echo "<hr>";
   
   }










}

?>

