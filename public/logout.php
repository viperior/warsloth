<?php
	include "includes/header.php";
	session_unset();
	session_destroy();
?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>You have been logged out. <a href="login.php">Log in again.</a></h2>
	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
