<?php
include_once("init.php");

$id = $_GET['id'];
$table = $_GET['table'];

$query = "DELETE FROM ".$table." WHERE id = ".$id;
$db->execute($query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>