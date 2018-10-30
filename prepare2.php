<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = 'vinay';
$password = 123;

$user = $con->prepare("
   SELECT * FROM users
   WHERE firstname = ?
   AND password = ?
");

$userExecution = $user->execute([$first_name, $password]);

$user = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($user);


?>
