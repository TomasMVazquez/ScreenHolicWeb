<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">ScreenHolic</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myOwnNav" aria-controls="myOwnNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="myOwnNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="/movies">Movies</a></li>
				<li class="nav-item"><a class="nav-link" href="/series">Series</a></li>
				<li class="nav-item"><a class="nav-link" href="/genres">Genres</a></li>
				<li class="nav-item"><a class="nav-link" href="/faq">F.A.Q.</a></li>
			</ul>

			<ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
				@guest
				<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
				<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
				@else
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hola {{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu" aria-labelledby="dropNavBar">
						<a class="dropdown-item" href="/profile">Mi perfil</a>
						<form action="/logout" method="post">
							@csrf
							<button type="submit" class="dropdown-item">Salir</button>
						</form>
					</div>
				</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>
