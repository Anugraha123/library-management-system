<?php
class book{

function insert($isbn,$book,$category,$author,$price){
session_start();
$query="INSERT into book (isbn,book,category,author,price,status) values ('$isbn','$book','$category','$author','$price','c')";
if($request = mysql_query($query)){
$_SESSION['boksuc'] = "Book Added Successfully";
header("Location:../add_book.php");
}
else{
$_SESSION['bokmsg'] = "Failed to Add Book";
header("Location:../add_book.php");
}
}

function select_tb(){
$query = "Select * from book where status='c'";
$request = mysql_query($query);
while($page=mysql_fetch_array($request)){
echo "<tr>";
echo "<td>".$page['book']."</td>";
echo "<td>".$page['author']."</td>";
echo "<td>".$page['category']."</td>";
echo "<td>".$page['isbn']."</td>";
echo "<td>".$page['price']."</td>";
echo "<td><a href='edit_book.php?id=$page[isbn]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='includes/act_deletebook.php?id=$page[isbn]' onClick='return confirm('Are you Sure want to delete?')' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
echo "</tr>";
}}

function filter($book,$author,$category){
	$query = "SELECT * from book where book Like '$book%' AND (author='$author' OR category='$category')";
	$request = mysql_query($query);
while($page=mysql_fetch_array($request)){
echo "<tr>";
echo "<td>".$page['book']."</td>";
echo "<td>".$page['author']."</td>";
echo "<td>".$page['category']."</td>";
echo "<td>".$page['isbn']."</td>";
echo "<td>".$page['price']."</td>";
echo "<td><a href='edit_book.php?id=$page[isbn]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='includes/act_deletebook.php?id=$page[isbn]' onClick='return confirm('Are you Sure want to delete?')' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
echo "</tr>";
}
}

function delete($id){
$query = "DELETE from book where id='$id'";
$request = mysql_query($query);
if($request){
header("Location:../manage_category.php");
}}

}
?>