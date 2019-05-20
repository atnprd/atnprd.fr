<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	</head>
	<body>
		@section('header')
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			<a class="navbar-brand" href="#"><i class="fas fa-code"></i> atnprd</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Présentation<span class="sr-only"></span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Parcours
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Expérience professionelle</a>
							<a class="dropdown-item" href="#">Formation</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Compétences<span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Réalisations<span class="sr-only"></span></a>
					</li>
				</ul>
			</div>
		</nav>
		@show
		<div class="container-fluid col-md-10 offset-md-1">
			@yield('content')
		</div>
		@section('footer')
		<footer>
			<div class="container-fluid text-center">
				<div class="row">
					<div class="container-fluid text-md-left">
						<div class="row">
							<div class="col-md-5 offset-md-2">
							<h5 class="text-uppercase font-weight-bold">atnprd.fr</h5>
							<p>
								Ce site est une présentation de mon travail et de mon CV, mais c'est aussi un site d'expérimentation. Si vous rencontrez d'éventuels problèmes ou bugs, n'hésitez pas à me les faire remarquer !
							</p>
						</div>
						<div class="col-md-3 offset-md-2">
							<h5 class="font-weight-bold text-uppercase">Catégories</h5>
							<ul class="list-unstyled">
								<li>
									<a href="#!">Présentation</a>
								</li>
								<li>
									<a href="#!">Parcours</a>
								</li>
								<li>
									<a href="#!">Compétences</a>
								</li>
								<li>
									<a href="#!">Réalisations</a>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex justify-content-center flex-center">
							<a>
								<i class="fab fa-facebook-f fa-2x"> </i>
							</a>
							<a>
								<i class="far fa-envelope fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="#">atnprd.fr </a> © 2019
			</div>
		</footer>
		@show
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>