<!DOCTYPE html>
<html>
<head>
	<title>shareboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">ShareBoard</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
					<li><a href="<?php echo ROOT_URL; ?>shares">Share</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
					<li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
					
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<?php require($view); ?>
		</div>
	</div>
</body>
</html>