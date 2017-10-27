<?php
require 'database/connection.php';
require 'functions/class.author.php';
session_start();

$author = $_POST['author'];
$id = $_SESSION['edit_id'];

	$cat = new author;
	$cat -> edit($author,$id);

?>