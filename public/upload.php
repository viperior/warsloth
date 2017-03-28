<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<hr>
<style>
.selectFile {
    position: relative;
    overflow: hidden;
	margin: 0 10px 0 0;
	display:table-cell;
}
.selectFile input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

label {
	margin: 0;
	font-weight: normal;
}

#uploadSubmit {
	font-weight: bold;
	margin: 10px 0;
}

#upload-background {
	background-color: white;
    border: 1px solid #00dddd;
    padding: 10px 0;
	margin-left: 15px;
	display:table;
	border-spacing: 10px 0;
}

#displayFile input {
	display:table-cell;
	width: 100%;
	padding:0;
	height: 100%
}

#displayFile {
	padding: 0;
	padding-left: 10px;
	display: inline-block;
	height: 32px;
	width: 100%;
}
</style>

<div class="row">
	<div class="col-sm-6">
		<h2>Upload File</h2>
		
		<form action="getfile.php" method="post" enctype="multipart/form-data">
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
		</form>
  </div>
</div>

<script>
	document.getElementById("fileToUpload").onchange = function () {
    document.getElementById("displayFile").value = this.value;
};
</script>
<?php include "includes/footer.php"; ?>
