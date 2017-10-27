<?php

require 'functions/class.login.php';
require 'database/connection.php';

$username = $_POST['uname'];
$password = $_POST['pname'];

$admin = new login;

if($admin -> check($username,$password)){
	header("Location:../dashboard.php");
}
else{
	header("Location:../index.php");
}

?>