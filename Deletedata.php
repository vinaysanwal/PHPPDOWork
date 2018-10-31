<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$first_name = "Jose";
$id = 1;

$user = $con->prepare("
   DELETE FROM users
   WHERE id = :id
");

$userExecution = $user->execute([
  'id' => $id,

]);

?>
