<?php

require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();

class UserManager {

	// Log in as a user
	public function loginUser($username ="", $password ="", $hashed_pin ="") {
		global $settings;
		$conn = new mysqli(
			$settings->get('db_servername'),
			$settings->get('db_username'),
			$settings->get('db_password'),
			$settings->get('db_name')
		);

		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Build the query to get the user record
		$sql = "SELECT userID, username, password, trophyCode, pin_crack_trophy, password_crack_trophy FROM user";

		// Determine login method
		if( !empty($hashed_pin) )
		{
			// Check if pin hash is valid
			$sql = $sql . " WHERE hashed_pin = '" . $hashed_pin . "'";
		}
		else
		{
			// Check if user/password combo is valid
			$sql = $sql . " WHERE username = '" . $username . "'";
			$sql = $sql . " AND password = '" . $password . "'";
		}

		// Execute the query, store the results, and close the connection
		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		// Return the user record
		return $result;
	}
}
