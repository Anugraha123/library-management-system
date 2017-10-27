<?php
require 'blank_page.php';
?>
<body>
	<div class="container">
	<?php
		if(isset($_SESSION['dshmsg'])){
	?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo "<b>".$_SESSION['dshmsg']."</b>"; 
				unset($_SESSION['dshmsg']);
			 ?>
		</div>
		<?php
		}
	?>
	<h2 class="page-header">Admin Dashboard</h2>
		<img src="images/library.jpg" class="img-responsive">
	</div>
	<div class="container-fluid text-center">
	<h1 class="page-header">Library Management System</h1>
	<h3>Developed by: Anugraha Acharya</h3>
	</div>
</body>