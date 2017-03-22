<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Upload File</h2>
		
		<form action="getfile.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Select file to upload: 
				<input class="form-control" type="file" name="fileToUpload" id="fileToUpload" />
				</label>
				<button class="btn btn-primary" type="submit">Upload File</button>
			</div>
		</form>
  </div>
</div>
<?php include "includes/footer.php"; ?>
