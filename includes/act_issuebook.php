<?php
require 'database/connection.php';
require 'functions/class.libray.php';

session_start();

$isbn = $_POST['isbn'];

if(isset($_POST['fetch'])){

$query = "SELECT book from book where isbn='$isbn'";

if($request = mysql_query($query)){

$page = mysql_fetch_array($request);

$_SESSION['book']=$page['book'];
$_SESSION['isbn']=$isbn;

header("Location:../issue_book.php");

}
}
else{
	$book = $_POST['book'];
	$issue_date = $_POST['date'];
	$std_id = $_POST['std_id'];
	$std_name = $_POST['std_name'];

	$lib = new library;
	$lib -> issue($book,$isbn,$issue_date,$std_id,$std_name); 
}
?>