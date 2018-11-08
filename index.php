<!DOCTYPE html>
<html>
<head>
	<title>8pack.lt Sveiko maisto rinkiniai</title>
	<meta charset="utf-8">  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	BANERIS KAZKOKS - ar jo reikia
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; " id="nav"> <!--navbar-dark bg-dark / atkreipti demesi i kabutes nes jos atsiranda-->
		<a class="navbar-brand" href="#">
			<img src="images/image.jpg" width="30" height="30" class="d-inline-block align-top" alt="image of logo">This is LOGO
		</a>
		<!--button menu kai sumazeja ekranas-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Apie mus <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blogas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Trenerio grafikas</a>
				</li>


				<!--dropdown vieta-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Paslaugos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Mitybos planai</a>
						<a class="dropdown-item" href="#">Treniruociu planai</a>
						<a class="dropdown-item" href="#">Seimos mitybos planai</a>
						<a class="dropdown-item" href="#">Treneris + mityba</a>
						<a class="dropdown-item" href="#">Poru ir jaunavedziu mitybos ir sporto planai</a>
						<a class="dropdown-item" href="#">individualus planai</a>
						<a class="dropdown-item" href="#">kaloriju skaiciuokle</a>
						<a class="dropdown-item" href="#">prpduktu kaloriju skaiciuokle</a>
						<!--div kuris atskiria eilute kaip kad zodi somthing else here-->
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Kontaktai</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<!-- <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search"> -->
				<button class="btn btn-outline-success my-2 my-sm-0 " type="submit" >Mano paskyra</button>

			</form>
		</div>
	</nav>
	<div class="container-fluid">

		<!--kodel neveikia social_box-->
		<div id="social_box">
			dasdasdasd
		</div>
		<!--kodel neveikia social_box-->

		

		<h4 style="text-align: center">KODEL 8PACK.LT</h4> 
		<div class="row">
			<div class="col-4">
				Laikas - kaip lemon gyme
			</div>
			<div class="col-2">
				Pinigai
			</div>
			<div class="col-2">
				ivairus maistas
			</div>
			<div class="col-4">
				nereikia sukti galvos
			</div>
		</div>
		<div class="row">
			<!--first col-->
			<div class="col-2" id="calc">
				Kalorijų skaičiuoklė
				<form >
					<div class="form-group">
						<label for="exampleFormControlSelect1">Tikslas</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Vyras</option>
							<option>Moteris</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Lytis</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Išlaikyti svorį</option>
							<option>Numesti svoro</option>
							<option>Priaugti svorio</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Ūgis</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pvz: 177">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Svoris</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pvz: 80">
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">Amžius</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pvz: 22">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Aktyvumas</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>1 k. per sav</option>
							<option>2 k. per sav</option>
							<option>3 k per sav </option>
							<option>4 k. per sav </option>
							<option>5 k. per sav</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary" id="first_form_btn">Skaičiuoti</button>
				</form>

			</div>
			<!--second col-->
			<div class="col-8" id="main_content">
				<div>
					<h4>KODEL 8PACK.LT</h4> 
					Taupote savo Laika ir Pinigus,  investuojate i savo sveikata ir nesijaudinate ka valgyti siandien
				</div>

				<br / >

				<div class="card-deck">
					<div class="card">
						<img class="card-img-top" src="images/ram.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Liekniejimo planas</h5>
							<p class="card-text">1200 ~kcal 
								<br /> / iprastas / 	<br /> 3 patiekalai + 2 užskandziai / 	<br /> 14.44 eur /d 	<br /> (uzsakant menesiui</p>
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
								<br />
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
								<button type="submit" class="btn btn-primary">Užsisakyti</button>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="images/mot.jpg" alt="Card image cap" class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
								<button type="submit" class="btn btn-primary">Užsisakyti</button>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="images/ssd.jpg" alt="Card image cap" class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Last updated 3 mins ago</small>
								<button type="submit" class="btn btn-primary">Užsisakyti</button>
							</div>
						</div>
					</div>
				</div>
				<!--col third-->
				<div class="col-2">


					<!--PHP test for log in-->
					<?php 
					if (isset($_POST['submit'])){
						$username = $_POST['username'];
						$password = $_POST['password'];

						$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
						if($connection) {
							echo "we are connected" . "<br />"; //ar galima sia zinute imesti kaip kad su JS narsykleje

						} else {
							die("Databe connection faled");
						}
					}

					$query = "INSERT INTO users(username, password) ";
					$query .= "VALUES ('$username', '$password')";

					


					$result = mysqli_query($connection, $query);

					if (!$result) {
						die("Query faild"); // tikrinam ar veikia duomenu perdavimas i duombaze
					}
						// echo "your name is " . $username . " and your passoword is " . $password;



					?>
					Log in
					<form action="index.php" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" type="text" class="form-control" id="username" placeholder="Username">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="passowrd" placeholder="Passoword">
						</div>
						<button type="submit" name="submit" class="btn btn-primary" id="first_form_btn">Submit </button>
					</form>

					CRUD - Creat / READ / UPDATE / DELETE <br />
					Read data
					






					<!-- <form action="index.php" method="post">
						<label>Username</label>
						<input type="text" name="username" placeholder="Enter you Username">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter your password">
						<input type="submit" name="submit" value="Submit">
					</form> -->
				</div>
			</div>

			<!--footer-->
			<div class="row" id="footer">
				FOOTER fdsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
			</div>



		</div>







		<div>
			Members
		</div>





		<div>
			Maisto produktu kaloriju skaiciuokle <br />
			https://www.freshly.com <br />
			https://www.preppeddelivery.com <br />
			https://www.freshnlean.com <br />
			https://www.cleaneatsmealprep.com/ <br />
			https://livefitfoods.ca/ <br />
			https://munchery.com/ <br />
			https://www.fitfoodnj.com/ <br />
			https://www.goodmeasuremeals.com/ <br />
			https://www.freshmealplan.com/traditional-plan <br />
			https://www.freshnfitcuisine.com/gallery/healthy-mix <br />
			https://orders.freshnlean.com/fnl/plans/ion-performance-protein



		</div>






	</body>
	</html>