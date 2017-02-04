<?php

class SettingsManager {
	public $settings = [
		'db_servername' => "localhost",
		'db_username' => "root",
		'db_password' => "",
		'db_name' => "capstone_webops"
	];

	// method declaration
	public function get($attribute) {
		return $this->settings[$attribute];
	}
}