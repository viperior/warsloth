<?php
	require '../com/capstone/model/staffManager.php';
	$staffManager = new StaffManager();

	// Get the filter text, if any
	if(isset($_POST["staffFilter"])) {
		$filter = $_POST["staffFilter"];
	}
	else {
		$filter = "";
	}

	// Get staff members. Apply filter to results if given.
	$staff = $staffManager->getStaff($filter);

	// Random staff avatar color generation
	function rand_part($min, $max) {
		return str_pad( dechex( mt_rand( $min, $max ) ), 2, '0', STR_PAD_LEFT);
	}

	// Generate random 6 digit hexadecimal color
	// To limit color palette (monochrome, only darks, only pastels, etc.),
	// adjust each color's min and max values. Full range of color is (O, 0xFF)
	function rand_color() {
		return 	rand_part(0, 0xFF) 		//red
				. rand_part(0, 0xFF) 	//green
				. rand_part(0, 0xFF); 	//blue
	}
?>

<?php include "includes/header.php"; ?>

<div class="row">
	<div class="col-sm-12">
		<h2>About Us</h2>
		<p>
			<?php echo $companyName ?> holisticly facilitates efficient niche markets. We are progressive, future-proof, mesh-proof, and web-ready. Our soldiers are trained to handle any of your business needs.
		</p>
		<p>
			Meet the members of the <?php echo $companyName ?> corporate family below.
		</p>
	</div>
</div>
<hr/>

<div class="row about-us-profiles">
	<div class="col-sm-12">
		<form action="" method="post">
			<label>
				Filter
				<input class="form-control" type="text" name="staffFilter" value="<?php echo $filter ?>" />
			</label>
			<button class="btn btn-primary">Search</button>
		</form>
		<hr/>
	</div>

	<!-- Display the staff members, with a filter if provided by user -->
	<?php while($row = $staff->fetch_assoc()) { ?>
		<div class="col-sm-6">
			<div class="about-circle" style="background-color: #<?php echo rand_color()?>"><?php echo substr($row["firstname"], 0, 1) . substr($row["lastname"], 0, 1) ?></div>
			<h2><?php echo $row["firstname"] . " " . $row["lastname"] ?></h2>
			<p><?php echo $row["staffBio"] ?></p>
		</div>
	<?php } ?>
</div>

<?php include "includes/footer.php"; ?>
