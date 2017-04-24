<?php
	require '../com/capstone/model/reviewManager.php';
	$reviewManager = new ReviewManager();

	// Process reiew form
	if(isset($_POST["reviewText"])) {
		$reviewManager->createReview($_POST["reviewTitle"], $_POST["reviewText"]);

		// Redirect to this page
		header('Location: services.php');
		die();
	}

	// Get reviews
	$reviews = $reviewManager->getReviews();
?>

<?php include "includes/header.php"; ?>

<div class="row">
	<div class="col-sm-12">
		<h2>Our Services</h2>
		<p>
			Please leave a review of your service experience. We will do our best to assist you. You may embed a screenshot using the form below to add to your review. You may also upload a file that will be needed in your transaction with us.
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
