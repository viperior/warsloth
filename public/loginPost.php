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

	$hashed_pin = "";
	$login_method = "";
	if(isset($_GET["hashed_pin"]))
	{
		$hashed_pin = $_GET["hashed_pin"];
		$login_method = "pin";
	}
	else
	{
		$login_method = "password";
	}

	/*
	$login_method = "";
	if(isset($_GET["method"]))
	{
		$hashed_pin = $_GET["method"];
	}
	*/

	// get user
	$user = $userManager->loginUser($username, $password, $hashed_pin);

	include "includes/header.php";
?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Login Result</h2>

		<?php
			if( $row = $user->fetch_assoc() )
			{
				$username = $row["username"];
				$_SESSION["username"] = $username;
				$_SESSION["logged_in"] = true;
				echo '<p>Logged in as ' . $row["username"] . '.</p>';

				// Trophy for logging in as specific user.
				echo '
					<div class="jumbotron">
						<h2><a href="account.php">View your account now.</a></h2>
					</div>
					<div class="jumbotron">
						<h2>You Won A Trophy!</h2>
						<p>Give this code to the judges: ' . $row["trophyCode"] . '</p>
						<p>Reason: Logged in as the the user: ' . $username . '</p>
					</div>
				';

				// Trophy for cracking the PIN code system.
				if( $login_method == "pin" )
				{
					echo '
						<div class="jumbotron">
							<h2>You Won A Trophy!</h2>
							<p>Give this code to the judges: ' . $row["pin_crack_trophy"] . '</p>
							<p>Reason: Successfully cracked the PIN security system.</p>
							<p>Login method: ' . $login_method . '</p>
						</div>
					';
				}

				// Trophy for cracking the username / password login system.
				if( $login_method == "password" )
				{
					echo '
						<div class="jumbotron">
							<h2>You Won A Trophy!</h2>
							<p>Give this code to the judges: ' . $row["password_crack_trophy"] . '</p>
							<p>Reason: Successfully cracked the username / password security system.</p>
							<p>Login method: ' . $login_method . '</p>
						</div>
					';
				}
			}
			else
			{
				echo '
					<p>Login failed! Maybe your login details were not correct. <a href="login.php">Try again.</a></p>
				';
			}
		?>

	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
