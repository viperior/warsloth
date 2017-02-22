<?php include "includes/header.php"; ?>
<!DOCTYPE html>
<div class="row">
	<div class="col-sm-12">
		<h2>Upload File</h2>
    <form action="getfile.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload File" name="submit">
    </form>
  </div>
</div>
<?php include "includes/footer.php"; ?>
