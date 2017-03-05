<?php

require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();


class UserManager {


	// method declaration
	public function loginUser($username ="", $password ="") {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));
		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT userID, username, password, trophyCode FROM user";
		$sql = $sql . " WHERE username = '" . $username . "'";
		$sql = $sql . " AND password = '" . $password . "'";

		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		return $result;
	}
}
