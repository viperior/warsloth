<?php 
	// change this to be the desired team
	$team = "footclan";

	$settings = array(
		'cobra' => array(),
		'motherbrain' => array(),
		'redfalcon' => array(),
		'footclan' => array(),
		'decepticons' => array()
	);

	// Cobra
	$settings['cobra']['companyName'] = "Cobra";
	$settings['cobra']['companyBodyClass'] = "cobra";
	$settings['cobra']['ceoEmail'] = "ceo@cobra.com";

	// Motherbrain
	$settings['motherbrain']['companyName'] = "Motherbrain";
	$settings['motherbrain']['companyBodyClass'] = "motherbrain";
	$settings['motherbrain']['ceoEmail'] = "ceo@motherbrain.com";

	// Red Falcon
	$settings['redfalcon']['companyName'] = "Red Falcon";
	$settings['redfalcon']['companyBodyClass'] = "redfalcon";
	$settings['redfalcon']['ceoEmail'] = "ceo@redfalcon.com";

	// Foot Clan
	$settings['footclan']['companyName'] = "Foot Clan";
	$settings['footclan']['companyBodyClass'] = "footclan";
	$settings['footclan']['ceoEmail'] = "ceo@footclan.com";

	// Decepticons
	$settings['decepticons']['companyName'] = "Decepticons";
	$settings['decepticons']['companyBodyClass'] = "decepticons";
	$settings['decepticons']['ceoEmail'] = "ceo@decepticons.com";

	// init settings
	$companyName = $settings[$team]['companyName'];
	$companyBodyClass = $settings[$team]['companyBodyClass'];
	$ceoEmail = $settings[$team]['ceoEmail'];

 ?>