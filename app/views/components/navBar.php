<!DOCTYPE html>
<html>

<head>
	<!-- <meta charset="UTF-8"> -->
	<link rel="stylesheet" href="public/css/navBar.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>NavBar</title>
</head>

<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="index.php">
				<span class="nav-brand">FAsTFOOD</span>
				<!-- <img class="nav-logo" src="../src/img/navbrand.png" alt=""> -->
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">
							<span class="nav-cus">Home</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?c=pages&a=food">
							<span class="nav-cus">Menu</span>
						</a>
					</li>
					<li id="admin-signal" class="nav-item" style="display: none">
						<a class="nav-link" href="index.php?c=pages&a=admin">
							<i class="fas fa-cogs nav-cus"></i>
						</a>
					</li>
				</ul>
				<ul class="navbar-nav mr-auto login">
					<li id="login-signal" class="nav-item">
						<a class="nav-link" href="index.php?c=account&a=showLogin">
							<span class="nav-cus">Login</span>
						</a>
					</li>
					<li id="logout-signal" class="nav-item" >
						<a class="nav-link" href="index.php?c=account&a=logout">
							<i class="fas fa-sign-out-alt nav-cus"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>