<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = $con->quote($_GET['firstname']);

die($first_name);

$user = $con->query("
   SELECT * FROM users
   WHERE firstname = $first_name

");

var_dump($user->fetch(PDO::FETCH_OBJ));


?>
