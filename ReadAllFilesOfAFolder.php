<?php

$path = "img/";
$files = scandir($path);
foreach ($files as &$value) {
   //echo $value . '<br>';
    if(strlen($value) >= 3){
        echo "<img src='http://localhost/img/". $value . "' alt='' width='500' height='600'><br><br><br>";
    }
    
}

?>
