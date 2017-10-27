<?php
require 'database/connection.php';
require 'functions/class.book.php';

$book 	  = $_POST['book'];
$category = $_POST['category'];
$author   = $_POST['author'];
$isbn     = $_POST['isbn'];
$price    = $_POST['price'];

$bok = new book;
$bok -> insert($isbn,$book,$category,$author,$price);

?>