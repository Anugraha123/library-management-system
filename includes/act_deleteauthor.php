<?php
require 'database/connection.php';
require 'functions/class.author.php';

$id = $_GET['id'];

$cat = new author;
$cat -> delete($id);
?>