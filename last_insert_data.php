<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = "Jose";
$id = 1;

$con->query("
   INSERT INTO users(firstname , username , email,active , password )
   VALUES('Akansha','akansha123','akansha@123','1','secret');
");

$user_id = $con->lastInsertId();

$con->query("
UPDATE users SET active = 0 where id = $user_id
");



?>
