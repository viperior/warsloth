<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<hr>

<div class="row">
	<div class="col-sm-6">
		<h2>Upload File</h2>

		<?php
			if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
			{
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
			else
			{
				echo 'Please <a href="login.php">log in</a> to upload a file.';
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
