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
			<img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
			<h2><?php echo $row["firstname"] . " " . $row["lastname"] ?></h2>
			<p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
		</div>
	<?php } ?>
</div>


<?php include "includes/footer.php"; ?>
