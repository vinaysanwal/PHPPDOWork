<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = "Jose";
$id = 1;

$update = $con->query("
   UPDATE users SET firstname = 'ashwini'
   where id = 2
");

echo $update-> rowCount();


?>
