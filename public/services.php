<?php
	require '../com/capstone/model/reviewManager.php';
	$reviewManager = new ReviewManager();

	// Process reiew form
	if(isset($_POST["reviewText"])) {
		$reviewManager->createReview($_POST["reviewTitle"], $_POST["reviewText"]);

		// redirect to this page
		header('Location: /services.php');
		die();
	}

	// get reviews
	$reviews = $reviewManager->getReviews();
?>

<?php include "includes/header.php"; ?>
	

<div class="row">
	<div class="col-sm-12">
		<h2>Our Services</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus laoreet ex quis porttitor. Pellentesque eu ligula vel massa hendrerit interdum. Sed ultricies, lorem eget ornare facilisis, libero lacus consequat lorem, sit amet volutpat ligula diam vel ipsum. Suspendisse rutrum tortor in lacinia vulputate. Curabitur in sem dapibus, porta diam sit amet, gravida sem. Sed consectetur aliquam volutpat. In vel neque sit amet sapien consequat pretium a nec massa.
		</p>
	</div>
</div>
<!-- /.row -->
<h2>Reviews</h2>
<div class="row">
	<?php while($row = $reviews->fetch_assoc()) { ?>
		<div class="col-sm-6">
			<div class="well">
				<h2><?php echo $row["reviewTitle"] ?></h2>
				<p><?php echo $row["reviewText"] ?></p>
			</div>
		</div>
	<?php } ?>
</div>

<h2>Leave a Review</h2>
<div class="container">
	<form name="reviewForm" id="reviewForm" action="" method="post">
		<div class="row" >
			<label for="reviewTitle">Review Title</label>
			<input type="text" name="reviewTitle" id="reviewTitle" class="form-control" value="" required="true" placeholder="Enter a Review Title" />
			<br/>
			<label for="reviewTitle">Review Text</label>
			<textarea name="reviewText" id="reviewText" class="form-control" rows="7" required="true"></textarea>
			<br/>
		</div>
		<div class="row" style="text-align: right;">
			<button type="submit" class="btn btn-primary">Submit Review</button>
		</div>
	</form>
</div>


<?php include "includes/footer.php"; ?>