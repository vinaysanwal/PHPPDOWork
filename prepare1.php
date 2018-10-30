<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$user = $con->prepare("
   SELECT * FROM users
   WHERE first_name = :first_name
");

$userExecution = $user->execute([

  'first_name' => $_GET['first_name'],

]);

if($userExecution){
$user = $user->fetchAll(PDO::FETCH_OBJ);
var_dump($user);
}

?>
