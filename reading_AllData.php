<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$users = $con->query("
       SELECT * FROM users
");

$user = $users->fetchAll(PDO::FETCH_OBJ);

//var_dump($user);

foreach ($user as $users) {
  echo $users->username . "<br>";
}

?>
