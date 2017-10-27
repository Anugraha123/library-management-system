<?php

class category{

	function insert($category,$status){
		session_start();

		if(!empty($category)){
			$query = "INSERT into category (category,status) values ('$category','$status')";
			if($request = mysql_query($query)){
				$_SESSION['catsuc'] = "Category Added Successfully";
				header("Location:../add_category.php");
			}
			else{
				$_SESSION['catmsg'] = "Failed to Add Category";
				header("Location:../add_category.php");
			}
		}

		else{
			$_SESSION['catmsg'] = "Please Input Category";
			header("Location:../add_category.php");
		}
	}

	function select_tb(){
		$query = "Select * from category";
		$request = mysql_query($query);
		while($page=mysql_fetch_array($request)){
		echo "<tr>";
		echo "<td>".$page['category']."</td>";
		if($page['status']=="c"){
		echo "<td><button class='btn btn-success'>On</button></td>";
		}
		else{
		echo "<td><button class='btn btn-danger'>off</button></td>";
		}
		echo "<td><a href='edit_category.php?id=$page[id]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='includes/act_deletecategory.php?id=$page[id]&category=$page[category]' onClick='return confirm('Are you Sure want to delete?')' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
		echo "</tr>";
		}
	}

	function delete($id,$category){
	$query = "DELETE from category where id=+'$id'";
	$query1 = "DELETE from book where category='$category'";
	$request = mysql_query($query);
	$request1 = mysql_query($query1);
	if($request && $request1){
	header("Location:../manage_category.php");
	}}

	function edit($category,$status,$id){
	$query = "UPDATE category set category='$category' , status='$status' where id='$id'";
	$query1 = "UPDATE book set status='$status' where category='$category'";
	$request = mysql_query($query);
	$request1 = mysql_query($query1);
	if($request && $request1){
	header("Location:../manage_category.php");
	}
	else{
	echo "Failed";
	}}

}
?>