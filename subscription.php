<?php
require_once("db.php");
$email = $_POST["email"];
SmartcarDB::getInstance()->create_subscription($email);
header('Location: index.php');
?>

