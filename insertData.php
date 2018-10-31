<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = "Jose";
$id = 1;

$user = $con->prepare("
   INSERT INTO users(firstname , username , email,active , password )
   VALUES(:first, :user, :email , :active, :pass)
");

$userExecution = $user->execute([
  'first' => 'Vinay',
  'user' => 'vinay',
  'email' => 'vinaysanwal@gmail.com',
  'active' => 1,
  'pass' => 'secretkey',

]);

?>
