<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php
session_start();
if(isset($_SESSION['login'])!=1){
	$_SESSION['err']="Please Login to continue";
	header("Location:index.php");
}
?>

<link href="source/admin/css/bootstrap.min.css" rel="stylesheet">
<script src="source/admin/js/jquery.js"></script>
<script src="source/admin/js/bootstrap.min.js"></script>

</style>
</head>
<body>

	<nav class="navbar navbar-default">
	<div class="container">

	<ul class="nav navbar-nav">
			<li><a href="dashboard.php" title=""><span class="glyphicon glyphicon-home"></span> &nbsp;Home</a></li>
			<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Modules <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="manage_category.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Manage Category</a></li>
			<li><a href="add_category.php"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Category</a></li>
			<li class="divider"></li>
			<li><a href="manage_author.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Manage Authors</a></li>
			<li><a href="add_author.php"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Author</a></li>
			<li class="divider"></li>
			<li><a href="manage_book.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Manage Books</a></li>
			<li><a href="add_book.php"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Book</a></li>
		</ul>

			</li>
			<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Issue Book <span class="caret"></span></a>

		<ul class="dropdown-menu">
			<li><a href="manage_issuebook.php"><span class="glyphicon glyphicon-cog"></span> &nbsp;Manage Issue Book</a></li>
			<li><a href="issue_book.php"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;New Book Issue</a></li>
		</ul>

			</li>
	</ul>

	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> &nbsp;Admin&nbsp; <span class="caret"></span></a>

		<ul class="dropdown-menu">
			<li><a href="manage_profile.php"> &nbsp;Manage Profile</a></li>
			<li><a href="logout.php" name="logout"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
		</ul>
		</li>
	</ul>
	</div>
	</nav>
</body>
</html>