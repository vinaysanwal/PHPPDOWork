<?php

try {

$con = new PDO('mysql:host=127.0.0.1;dbname=pd_Db','root','');

}
catch (PDOException $e){

  die("Database Connection failed");

}

?>
