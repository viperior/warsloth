<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<hr>

<div class="row">
	<div class="col-sm-6">
		<h2>Upload File</h2>

		<?php
			echo '<form method="post" enctype="multipart/form-data">
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
							<button class="btn btn-primary" type="submit">Upload</button>
						</div>
					</div>
				</div>
			</form>';
		?>

  </div>
</div>

<script>
	document.getElementById("fileToUpload").onchange = function () {
    document.getElementById("displayFile").value = this.value;
};
</script>
<?php include "includes/footer.php"; ?>