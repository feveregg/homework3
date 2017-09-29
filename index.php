<?php
$text = 'my text';
$obj = new main();
$obj->printthis($text);


class main {

 public function printThis($text) {
 
 echo '<h1>print function demo</h1>';
 print($text);
 echo'<hr>';
 
 }


}


?>
