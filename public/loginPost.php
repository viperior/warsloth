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
?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Login Result</h2>

		<?php
			if( $row = $user->fetch_assoc() )
			{
				$_SESSION["username"] = $username;
				$_SESSION["logged_in"] = true;
				echo '<p>Logged in as ' . $row["username"] . '.</p>';
				echo '
					<div class="jumbotron">
						<h2>You Won a Trophy!</h2>
						<p>Give this code to the judges: ' . $row["trophyCode"] . '</p>
					</div>
				';
			}
			else
			{
				echo '<p>Login failed! Maybe your login details were not correct.</p>';
			}
		?>

	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
