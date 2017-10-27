<?php

class library{

function issue($book,$isbn,$issue_date,$std_id,$std_name) {
	$query = "INSERT INTO issue_book (book,isbn,issue_date,std_id,std_name) values ('$book','$isbn','$issue_date','$std_id','$std_name')";

	$query1 = "SELECT total_book from student where std_id='$std_id'";
	$request1 = mysql_query($query1);
	$page = mysql_fetch_assoc($request1);
	$count= $page['total_book'];
	$count= $count+1;
	$query2 = "UPDATE student set issue_date = '$issue_date',total_book=$count where std_id='$std_id'";
	$request = mysql_query($query);
	$request2 = mysql_query($query2);

	if($request && $request2){
		$_SESSION['libsuc'] = "Book Issue Successfully";
		header("Location:../issue_book.php");
	} else {
		$_SESSION['libmsg'] = "Failed to Issue Book";
		header("Location:../issue_book.php");
	}
}

function select() {
	$query = "SELECT * from student where total_book>=1";
	$request = mysql_query($query);
	while($page=mysql_fetch_array($request)){
		echo "<tr>";
		echo "<td>".$page['std_id']."</td>";
		echo "<td>".$page['Name']."</td>";
		echo "<td>".$page['issue_date']."</td>";
		echo "<td>".$page['total_book']."</td>";
		echo "<td>".$page['submitted_date']."</td>";
		echo "<td><a href='edit_issuebook.php?std_id=$page[std_id]&name=$page[Name]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='#' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
		echo "</tr>";
	}
}

function filter($std_id){
	$_SESSION['std_id']=$std_id;
	$query = "SELECT * from student where std_id='$std_id' and total_book>=1";
	$request = mysql_query($query);
	while($page=mysql_fetch_array($request)){
		echo "<tr>";
		echo "<td>".$page['std_id']."</td>";
		echo "<td>".$page['Name']."</td>";
		echo "<td>".$page['issue_date']."</td>";
		echo "<td>".$page['total_book']."</td>";
		echo "<td>".$page['submitted_date']."</td>";
		echo "<td><a href='edit_issuebook.php?std_id=$page[std_id]&name=$page[Name]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='#' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
		echo "</tr>";
		echo "</tr>";
	}
}

function view_booklist($std_id)
{
	$query = "SELECT * from issue_book where std_id='$std_id' ORDER by issue_date";
	$request = mysql_query($query);
	$query1 = "SELECT total_book from student where std_id='$std_id'";
	$request1 = mysql_query($query1);
	$book = mysql_fetch_array($request1);
	while($page=mysql_fetch_array($request)){
		echo "<tr>";
		echo "<td>".$page['isbn']."</td>";
		echo "<td>".$page['book']."</td>";
		echo "<td contenteditable='true'>".$page['issue_date']."</td>";
		echo "<td><a href='includes/act_deleteissuebook.php?o_id=$page[o_id]&student=$page[std_id]&book=$book[total_book]' role='button' class='btn btn-success'><span class='glyphicon glyphicon-ok'></span></i> Submit</a></td>";
		echo "</tr>";
	}
}

function delete_issuebook($o_id,$std_id,$book){
	$query = "DELETE from issue_book where o_id=$o_id";
	$query1 = "UPDATE student set total_book=$book where std_id=$std_id";
	$request1 = mysql_query($query1);
	$request = mysql_query($query);
	if($request && $request1){
		header("Location:../manage_issuebook.php");
	}
}


}


?>