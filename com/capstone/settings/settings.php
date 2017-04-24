<?php

// This file is where you need to have the correct MySQL user and password.
// By default, this is the "root" user with no password.
// This is why db_password is left blank below.
// Note: This user must have both read and write permissions for the site
//	to function correctly.

class SettingsManager {
	public $settings = [
		'db_servername' => "localhost",
		'db_username' => "root",
		'db_password' => "",
		'db_name' => "capstone_cobra"
	];

	// method declaration
	public function get($attribute) {
		return $this->settings[$attribute];
	}
}
