<?php
require_once("db.php");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$tel = $_POST["tel"];
$email = $_POST["mail"];
SmartcarDB::getInstance()->create_guru($fname,$lname,$tel,$email);
header('Location: index.php');
?>
