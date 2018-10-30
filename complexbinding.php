<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = $_GET['firstname'];

$user = $con->prepare("
   SELECT * FROM users
   WHERE firstname LIKE :firstname

");

$user->bindValue(':firstname',"%$first_name%");
$user->execute();

$user = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($user);


?>
