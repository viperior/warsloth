<?php

require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();

class StaffManager {

	// Get the staff records
	public function getStaff($filter ="") {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));

		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Build the query to fetch staff records
		$sql = "SELECT staffID, firstname, lastname, staffBio FROM staff";
		if($filter != "") {
			$sql = $sql . " WHERE firstname = '" . $filter . "'";
		}

		// Execute the query, store the results, and close the connection
		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		// Return the staff records
		return $result;
	}
}
