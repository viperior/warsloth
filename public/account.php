<?php include "includes/header.php"; ?>

<div class="row">
	<div class="col-sm-12">
		<h2>Account Details</h2>

		<?php
			if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
			{
				$username = $_SESSION["username"];
				echo '<p>Welcome to your personal Cobra account, ' . $username . '.</p>';
			}
			else
			{
				echo '<p>You are not currently logged in. <a href="login.php">Login now.</a></p>';
			}
		?>

	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
