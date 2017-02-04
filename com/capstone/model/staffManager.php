<?php 

require __DIR__ . '/../settings/settings.php';
$settings = new SettingsManager();


class StaffManager {


	// method declaration
	public function getStaff($filter ="") {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));
		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT staffID, firstname, lastname FROM staff";
		if($filter != "") {
			$sql = $sql . " WHERE firstname = '" . $filter . "'";
		}

		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		return $result;
	}
}