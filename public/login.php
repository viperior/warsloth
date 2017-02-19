<?php include "includes/header.php"; ?>
	
<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Login</h2>


		<form action="loginPost.php" method="post">
			<div class="form-group">
				<!-- test user: test:password -->
				<label>Username<br/>
					<input class="form-control" type="text" name="username" />
				</label>
				<label>Password<br/>
					<input class="form-control" type="password" name="password" />
				</label>
				<button class="btn btn-primary" type="submit">Login</button>			
			</div>
		</form>
	</div>
</div>
<!-- /.row -->


<?php include "includes/footer.php"; ?>