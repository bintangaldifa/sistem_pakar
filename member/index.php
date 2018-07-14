<!DOCTYPE html>
<html>
	<?php
	session_start();

	// Check Login
	if (!isset($_SESSION['username'])) {
		header('location:../index.php');
		# code...
	}
	include("functions/master.php");

	include("views/_partial/head.php");

	?>

	<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	  
	 <?php 
	  	include("views/_partial/nav.php");
	?>
	  <div class="content-wrapper">

		<?php
			include("views/_partial/content.php");
			include("views/_partial/foot.php");
		?>

	  </div>
	</body>
</html>