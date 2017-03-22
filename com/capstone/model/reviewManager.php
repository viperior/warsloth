<?php

require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();


class ReviewManager {


	// method declaration
	public function getReviews() {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));
		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM review";

		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		return $result;
	}

	// Create Review
	public function createReview($title, $text) {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));
		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO review (reviewTitle, reviewText) VALUES ('" . $title . "', '" . $text . "')";

		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();
		return $result;
	}
}
