<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			[class*=col-] {
				/* background-color: rgb(230, 230, 230);
				border: solid 1px rgb(221, 215, 215); */
			}

			.navbar {
				font-size: 18px;
			}

			.navbar-brand {
				font-size: 2em;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">My Company</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBarPiola">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="myNavBarPiola">
				<ul class="navbar-nav mr-auto">
			      <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
		      	<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown">Productos</a>
						<div class="dropdown-menu" aria-labelledby="myDropDown">
							<a class="dropdown-item" href="#">Electrodomésticos</a>
							<a class="dropdown-item" href="#">Celulares</a>
							<a class="dropdown-item" href="#">Heladeras de Super Heroes</a>
						</div>
		      	</li>
		   	</ul>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#myModal">Login</button>
		  </div>
		</nav>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/img-banner-01.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/img-banner-02.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/img-banner-03.jpg" alt="First slide">
				</div>
		 	</div>

			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		</div>

		<div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col-md-3">
					<ul class="list-group">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-8">
									<img src="images/hansolo.jpg" class="img-fluid img-thumbnail" width="100%">
								</div>
								<div class="col-md-4">
									<h3>Han Solo</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut nt, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="#" class="btn btn-info">ver más</a>
								</div>
							</div>
						</div>
						<div class="col-md-2">2</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img src="images/black-panther.jpg" class="img-fluid rounded-circle img-thumbnail">
							<h2 class="display-4 text-danger">Black Panther</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-md-4">
							<img src="images/black-widow.jpg" class="img-fluid rounded-circle img-thumbnail">
							<h2 class="display-4 text-danger">Black Widow</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-md-4">
							<img src="images/captain-america.jpg" class="img-fluid rounded-circle img-thumbnail">
							<h2 class="display-4 text-danger">Captain America</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" aria-labelledby="myModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
		        		<h5 class="modal-title" >Ingresa a tu cuenta</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
		      	</div>
		      	<div class="modal-body">
			      	<h3>Lorem ipsum dolor sit amet</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<form method="post">
  							<div class="form-group">
    							<label>Email address</label>
    							<input type="email" class="form-control is-invalid" placeholder="Enter email">
    							<span class="form-text text-muted">We'll never share your email with anyone else.</span>
								<div class="invalid-feedback">Please provide an email.</div>
  							</div>
							<div class="form-group">
								<label>Password</label>
								<input
									type="password"
									class="form-control <?php echo true ? 'is-invalid' : ''  ?>"
									placeholder="Password"
								>
								<div class="invalid-feedback">Please provide a password.</div>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input">
								<label class="form-check-label">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Obligatorio para ciertos componentes -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
