<?php
require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();
class StaffManager {
	// method declaration
	public function getStaff() {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));
		$sql = "SELECT staffID, firstname, lastname, staffBio FROM staff";
		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();
		return $result;
	}
}