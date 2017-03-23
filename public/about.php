<?php
	require '../com/capstone/model/staffManager.php';
	$staffManager = new StaffManager();

	if(isset($_POST["staffFilter"])) {
		$filter = $_POST["staffFilter"];
	}
	else {
		$filter = "";
	}

	// get staff
	$staff = $staffManager->getStaff($filter);
	
	function rand_r() {
		return str_pad( dechex( mt_rand( 0, 0xFF ) ), 2, '0', STR_PAD_LEFT);
	}
	
	function rand_g() {
		return str_pad( dechex( mt_rand( 0, 0xFF ) ), 2, '0', STR_PAD_LEFT);
	}
	
	function rand_b() {
		return str_pad( dechex( mt_rand( 0, 0xFF ) ), 2, '0', STR_PAD_LEFT);
	}
	
	function rand_color() {
		return rand_r() . rand_g() . rand_b();
	}
?>

<?php include "includes/header.php"; ?>



<div class="row">
	<div class="col-sm-12">
		<h2>About Us</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus laoreet ex quis porttitor. Pellentesque eu ligula vel massa hendrerit interdum. Sed ultricies, lorem eget ornare facilisis, libero lacus consequat lorem, sit amet volutpat ligula diam vel ipsum. Suspendisse rutrum tortor in lacinia vulputate. Curabitur in sem dapibus, porta diam sit amet, gravida sem. Sed consectetur aliquam volutpat. In vel neque sit amet sapien consequat pretium a nec massa.
		</p>
	</div>
</div>
<hr/>

<div class="row">
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
	
	<?php while($row = $staff->fetch_assoc()) { ?>
		<div class="col-sm-6">
			<div class="about-circle" style="background-color: #<?php echo rand_color()?>"><?php echo substr($row["firstname"], 0, 1) . substr($row["lastname"], 0, 1) ?></div>
			<h2><?php echo $row["firstname"] . " " . $row["lastname"] ?></h2>
			<p><?php echo $row["staffBio"] ?></p>
		</div>
	<?php } ?>
</div>

<?php include "includes/footer.php"; ?>