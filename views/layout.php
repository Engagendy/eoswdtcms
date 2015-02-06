<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?= $title ?>
	</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
	-->
	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="assets/css/style.css"></head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CMS EOSWDT</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li
					 <?php if($active == "home") echo 'class="active"'; ?>>
						<a href="/">
							Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li 
				<?php if($active == "authors") echo 'class="active"'; ?>>
						<a href="authors.php">Authors</a>
					</li>

				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<section class="container">
		<div class="row">
			<?php include $view; ?></div>

	</section>
	<!-- end of container -->

	<footer class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p>CopyRights by EOSWDT !</p>
			</div>
		</div>
		<!-- end of row -->
	</footer>

</body>
</html>