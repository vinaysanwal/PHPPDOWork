<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$users = $con->query("
       SELECT * FROM users
       WHERE id = 1
");

// $user = $users->fetch(PDO::FETCH_ASSOC);
//
// echo $user['username'];

//use this
// $user = $users->fetch(PDO::FETCH_OBJ);
//
// echo $user->username;
// echo $user->firstname;


//use this 
$user = $users->fetch(PDO::FETCH_ASSOC);

var_dump($user);
?>
