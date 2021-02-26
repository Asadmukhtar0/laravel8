<!DOCTYPE html>
<html>
<head>
	<title> Asad School </title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<div class="container">
	  		<a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			    	@if (Route::has('login'))
			    		@auth
			    		<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          {{ Auth::user()->name }}
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
					          <a class="dropdown-item" href="#">Logout</a>
					        </div>
					      </li>
			    		@else
			    		  <li class="nav-item">
					        <a class="nav-link" href="{{ route('login') }}">Login </a>
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="{{ route('register') }}">REgister</a>
					      </li>
			    		@endauth	
			    	@endif


			      
			    </ul>
			  </div>
	  	</div>
	</nav>
	@yield('content')
</body>
</html>