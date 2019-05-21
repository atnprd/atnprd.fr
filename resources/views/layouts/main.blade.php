<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	</head>
	<body>
		@section('header')
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-4">
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
		<footer class="bg-light">
			<div class="container-fluid text-center">
				<div class="row mt-4 pt-3">
					<div class="container-fluid text-md-left">
						<div class="row">
							<div class="col-md-5 col-sm-12 offset-md-1">
								<h5 class="text-uppercase font-weight-bold">à propos</h5>
								<p>
									Ce site est une présentation de mon travail, de mon CV et un site d'expérimentation.
									Si vous rencontrez d'éventuels problèmes ou bugs, n'hésitez pas à me les faire remarquer via les boutons de contact ci-dessous.
								</p>
							</div>
							<div class="col-md-1 col-sm-12 offset-md-3">
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
							<a href="https://www.linkedin.com/in/antoine-perrenoud-501ab3158/">
								<i class="fab fa-linkedin fa-2x mx-4 my-3"> </i>
							</a>
							<a href="https://github.com/atnprd">
								<i class="fab fa-github fa-2x mx-4 my-3"></i>
							</a>
							<a href="mailto:antoineperrenoud02@gmail.com">
								<i class="far fa-envelope fa-2x mx-4 my-3"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center py-3">
				<a href="#">atnprd.fr</a> <i class="far fa-copyright"></i> 2019
			</div>
		</footer>
		@show
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>