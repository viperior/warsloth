<?php

require dirname(__FILE__) . '/../settings/settings.php';
$settings = new SettingsManager();

class ReviewManager {

	// Get the reviews from the database
	public function getReviews() {
		global $settings;
		$conn = new mysqli($settings->get('db_servername'), $settings->get('db_username'), $settings->get('db_password'), $settings->get('db_name'));

		// Check connection
		if($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Get all the reviews from the review table
		$sql = "SELECT * FROM review";

		// Execute the query, store the results, and close the connection
		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		// Return the review records
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

		// Build the query to insert a new review record
		$sql = "INSERT INTO review (reviewTitle, reviewText) VALUES ('" . $title . "', '" . $text . "')";

		// Execute the query, store the result, and close the connection
		$conn->multi_query($sql);
		$result = mysqli_store_result($conn);
		$conn->close();

		// Return the result of the record insertion
		return $result;
	}
}
