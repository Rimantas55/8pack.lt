<!DOCTYPE html>
<?php require "config.php"; ?>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	
	<!-- Bootstrap CSS JS jquery-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<!--local style CSS-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>8pack.lt Sveiko maisto rinkiniai</title>
</head>
<body>
	
	<p style="text-align: right"> Mus jau uzsisake 240 klientai / ivertinimas 5 * / +370 4438804 / FB / Insta / Twiter / pastas</p>
	<!--NAVIGATION-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; " id="nav"> <!--navbar-dark bg-dark / atkreipti demesi i kabutes nes jos atsiranda code kai norime taip keisti spalvas-->
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
				<button class="btn btn-outline-success my-2 my-sm-0 " type="submit" >Admin paskyra</button>
				<button class="btn btn-outline-success my-2 my-sm-0 " type="submit" >Mano paskyra</button>

			</form>
		</div>
	</nav>
	
	<!--CONTAINER-->
	<div class="container-fluid">

		<!--kodel neveikia social_box-->
		<div id="social_box">
			FB <br />
			TWIT <br />
			INSTA <br />
			MAIL 
		</div>

		<h4 style="text-align: center">KODEL 8PACK.LT ir kaip tai veikia</h4> 
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 why_box"> 
				<div>
					IMAGE
				</div>
				<div>
					Taupote laika
				</div>
				<div class="seperator">
					
				</div>
				<div>
					Trumpas aprasymas
				</div>
				<div>
					Uzsisakote
				</div>
			</div>
			<div  class="col-lg-3 col-md-6 col-sm-12" class="why_box">
				<div>
					IMAGE
				</div>
				<div>
					Taupote pinigus
				</div>
				<div class="seperator">
					
				</div>
				<div>
					Trumpas aprasymas
				</div>
				<div>
					Apmokate
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12" class="why_box">
				<div>
					IMAGE
				</div>
				<div>
					Ivairus maistas
				</div>
				<div class="seperator">
					
				</div>
				<div>
					Trumpas aprasymas
				</div>

				<div>
					Laukiate uzsakymo
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12" class="why_box">
				<div>
					IMAGE
				</div>
				<div>
					Sveikas gyvenimo budas 
				</div>
				<div class="seperator">
					
				</div>
				<div>
					Trumpas aprasymas
				</div>

				<div>
					megaujates valgiu
				</div>
			</div>
		</div>
		<div class="row">
			<!--first col-->
			<div class="col-2" id="calc">
				Kalorijų skaičiuoklė
				<form >
					<div class="form-group">
						<label>Tikslas</label>
						<select class="form-control">
							<option>Išlaikyti svorį</option>
							<option>Numesti svoro</option>
							<option>Priaugti svorio</option>
						</select>
					</div>
					<div class="form-group">
						<label>Lytis</label>
						<select class="form-control">
							<option>Vyras</option>
							<option>Moteris</option>
						</select>
					</div>
					<div class="form-group">
						<label>Ūgis (cm)</label>
						<input type="text" class="form-control" placeholder="pvz: 177">
					</div>
					<div class="form-group">
						<label>Svoris (kg)</label>
						<input type="text" class="form-control" placeholder="pvz: 80">
					</div>

					<div class="form-group">
						<label>Amžius</label>
						<input type="text" class="form-control" placeholder="pvz: 22">
					</div>
					<div class="form-group">
						<label>Aktyvumas</label>
						<select class="form-control">
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
					Mūsų maisto pristatymo paslauga puikiai tinka savo svorį prižiūrintiems, mažai laiko turintiems asmenims, sportininkams arba tiesiog besirūpinantiems savo sveika ir subalansuota mityba. Sveikas maistas ruošiamas iš šviežių produktų, visuomet įtraukiant sezoninius vaisius ir daržoves. CityRush komanda dirba tam, kad taupytų Jūsų laiką ir pasirūpintų skania ir subalansuota pilnaverte mityba visai dienai!
				</div>

				<br / >

				<div class="card-deck">
					<div class="card">
						<img class="card-img-top" src="images/ram.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Liekniejimo planas</h5>
							<p class="card-text">1200 ~kcal 
								<br /> / iprastas / 	<br /> 3 patiekalai + 2 užskandziai / 	<br /> 14.44 eur /d 	<br /> (uzsakant menesiui <br /> check box ar reikia treniruociu plano - ir papildomi klausimai</p> 
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
					
					Log in
					<form action="login_create.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input name="username" type="text" class="form-control" id="username" placeholder="Username">
							<label>Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Passoword">
						</div>
						<button type="submit" name="submit" class="btn btn-primary" id="first_form_btn">Submit </button>
					</form>

					CRUD - Creat / READ / UPDATE / DELETE <br />
					Read data
					






					
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
			Atsiranda kai kazkas perziuri arba uzsisako <br />
			Uzsisake - vardas <br />
			amzius - 23 <br />
			palnas - toks ir toks <br />
			
		</div>



		<div>
			what is multi treding su comandine eilute
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