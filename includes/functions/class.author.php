<?php
class author{

function insert($author){
session_start();
if(!empty($author)){
$query = "INSERT into author (author) values ('$author')";
if($request = mysql_query($query)){
$_SESSION['autsuc'] = "Author Name Added Successfully";
header("Location:../add_author.php");
}
else{
$_SESSION['autmsg'] = "Failed to Add Author";
header("Location:../add_author.php");
}}
else{
$_SESSION['autmsg'] = "Please Input Author's Name";
header("Location:../add_author.php");
}}

function select_tb(){
$query = "Select * from author";
$request = mysql_query($query);
while($page=mysql_fetch_array($request)){
echo "<tr>";
echo "<td>".$page['author']."</td>";
echo "<td><a href='edit_author.php?id=$page[id]' role='button' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='includes/act_deleteauthor.php?id=$page[id]' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Delete</a></td>";
echo "</tr>";
}}

function delete($id){
$query = "DELETE from author where id='$id'";
$request = mysql_query($query);
if($request){
header("Location:../manage_author.php");
}}

function edit($author,$id){
$query = "UPDATE author set author='$author' where id='$id'";
$request = mysql_query($query);
if($request){
header("Location:../manage_author.php");
}}

}
?>