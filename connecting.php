<?php
$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_Db','root','');

$drivers = PDO::getAvailableDrivers();
var_dump($drivers);

?>
