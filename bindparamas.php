<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = $_GET['firstname'];

$user = $con->prepare("
   SELECT * FROM users
   WHERE firstname = :firstname

");

$user->bindParam(':firstname', $first_name);

$first_name = "Akansha";

$user->execute();

$user = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($user);


?>
