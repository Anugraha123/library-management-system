<?php
require 'database/connection.php';
require 'functions/class.category.php';

	@$status=($_POST['status']==null)?"uc":"c";
	$category = $_POST['category'];


	$cat = new category;
	$cat -> insert($category,$status);



?>