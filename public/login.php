<?php include "includes/header.php"; ?>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h2>Login</h2>


		<form method="post">
			<div class="form-group" id="login">
				<label>Username<br/>
					<input class="form-control" type="text" />
				</label>
				<label>Password<br/>
					<input class="form-control" type="password" />
				</label>
				<button class="btn btn-primary" type="submit">Login</button>
			</div>
		</form>

		<h2>PIN Login</h2>

		<form class="form-inline">
			<div class="form-group">
				<input class="form-control" type="number"/>
				<button class="btn" type="button">Login</button>
			</div>
		</form>

	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>