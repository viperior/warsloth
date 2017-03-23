<?php
	require dirname(__FILE__) . '/../com/capstone/model/userManager.php';
	$userManager = new UserManager();

	$username = "";
	if(isset($_POST["username"])) {
		$username = $_POST["username"];
	}
	$password = "";
	if(isset($_POST["password"])) {
		$password = $_POST["password"];
	}

	// get user
	$user = $userManager->loginUser($username, $password);

	include "includes/header.php";
	$_SESSION["username"] = $username;
	$_SESSION["logged_in"] = true;
?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Login Result</h2>

		<?php if($row = $user->fetch_assoc()) { ?>
			<p>Logged in as <?php echo $row["username"] ?></p>

			<div class="jumbotron">
				<h2>You Won a Trophy!</h2>
				<p>Give this code to the judges: <?php echo $row["trophyCode"] ?></p>
			</div>
		<?php } else { ?>
			<p>Login failed!</p>
		<?php } ?>


	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
