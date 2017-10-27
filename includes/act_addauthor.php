<?php
require 'database/connection.php';
require 'functions/class.author.php';

$author = $_POST['author'];

$aut = new author;
$aut -> insert($author);

?>