<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = 'vinay';
$password = 123;

$user = $con->prepare("
   SELECT * FROM users
   WHERE firstname = :first_name
   AND password = :password
");

$user->bindValue(':first_name',$first_name);
$user->bindValue(':password',$password);

$user->execute();

$user = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($user);


?>
