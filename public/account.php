<?php include "includes/header.php"; ?>

<div class="row">
	<div class="col-sm-12">
		<h2>Account Details</h2>

		<?php
			if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
			{
				$username = $_SESSION["username"];
				echo '<p>Welcome to your personal ' . $companyName . ' account, ' . $username . '.</p>';

				if($username == 'ceo') {
					?>
						<h2>Messages</h2>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											From: IT Admin - Subject: Possible Security Issue
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Hey Boss! I think I found a small security issue on the website's about page. It looks like the filter input could be used to execute SQL commands in the database. It's probably not a big deal. I mean, who would find it anyways right?
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											From: Marketing - Subject: Strange Reviews
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										I noticed some weird formatting on a few reviews on the services page. I talked with Doug from IT and he kept going on about escaping HTML or something like that. I have no idea what he was talking about.
									</div>
								</div>
							</div>
							<!-- <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Collapsible Group Item #3
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div> -->
						</div>

					<?php
				}
			}
			else
			{
				echo '<p>You are not currently logged in. <a href="login.php">Login now.</a></p>';
			}
		?>

	</div>
</div>
<!-- /.row -->

<?php include "includes/footer.php"; ?>
