<?php

require 'database/connection.php';
require 'functions/class.libray.php';

$o_id = $_GET['o_id'];
$std_id = $_GET['student'];
$book = $_GET['book'];
$book =  $book-1;

$lib = new library;
$lib -> delete_issuebook($o_id,$std_id,$book);

?>