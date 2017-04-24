<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<hr>

<div class="row">
	<div class="col-sm-6">
		<h2>Upload File</h2>

		<?php
			// Check whether the user is logged in
			if( isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true )
			{
				// Check whether the user is on the 'test' account
				if( isset($_SESSION["username"]) && $_SESSION["username"] == "test" )
				{
					// Show restriction message to test user
					echo '<p>Sorry, the <em>test</em> user does not have permission to access the file upload tool.</p><p>Please <a href="logout.php">log out</a> and then log in again with a normal account to upload a file.</p>';
				}
				else
				{
					// User is logged in and is an account other than 'test'.
					// Display upload file system.
					echo '<form action="getfile.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12" id="upload-background">
									<div class="selectFile btn btn-primary">
										<label>Select File
										<input class="form-control upload" type="file" name="fileToUpload" id="fileToUpload"/>
										</label>
									</div>
									<input id="displayFile" placeholder="Select file" disabled="disabled" />
								</div>

								<div class="col-sm-12">
									<button class="btn btn-primary" type="submit" id="uploadSubmit">Upload</button>
								</div>
							</div>
						</div>
					</form>';
				}
			}
			else
			{
				// User is not logged in. Display error message
				echo '<p>Please <a href="login.php">log in</a> to upload a file.</p>';
			}
		?>

  </div>
</div>

<script>
	document.getElementById("fileToUpload").onchange = function () {
    document.getElementById("displayFile").value = this.value;
};
</script>
<?php include "includes/footer.php"; ?>
