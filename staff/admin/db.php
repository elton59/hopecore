<?php
 $servername='localhost';
 $username='root';
 $password='';
 $db='hopecore';





//create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
   }

?>
