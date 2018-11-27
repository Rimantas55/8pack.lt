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
	
	<!--style CSS-->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style type="text/css">

</style>
<title>Jusu KMI</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<a href="index.php" type="submit" class="btn btn-primary btn-sm"> Gizti ir pagrindini puslapi x hyper linkas</a>
		</div>
		<div class="row">
			Jusu KMI 
		</div>
		<div class="row">
			kmi paveikslelis
		</div>
		<div class="row">
			ugis svoris amzius tikslas ir t.t
			<table class="table table-info">
				<thead>
					<tr>
						<th>#</th>
						<th>Jusu normalus TDEE nesportuojant (norma)</th>
						<th>Angliavandeniai</th>
						<th>Baltymai</th>
						<th>Riebalai</th>
					</tr>
				</thead>

			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<td>(php input 2000) kcal</td>
					<td>(php input 2000) g</td>
					<td>(php input 2000) g</td>
					<td>(php input 2000) g</td>
				</tr>
				<tr>
					<th>#</th>
					<th>Jusu tikslas (php pvz: PRIGAUGTI SVORIO) , jusu aktyvumas (php - 1k,per sav) </th>
					<th>Angliavandeniai</th>
					<th>Baltymai</th>
					<th>Riebalai</th>
				</tr>
				<tr>
					<th></th>
					<td>(php input 3000) g kcal</td>
					<td>(php input 2000) g</td>
					<td>(php input 2000) g</td>
					<td>(php input 2000) g</td>
				</tr>
			</tbody>
		</table>
		</div>
		<div class="row">
			<p> TDEE Kiek reikia kcal per diena NESPORTUOJANT maintain /2000 kcal/ 2000kcal       lentele / A B R</p>
			<p>INFO *pazymeti bus saltiniai</p>
		</div>
		<div class="row">
			<p>REKOMENDUOJAMAS PLANAS</p> <br />
			<a href="index.php" type="submit" class="btn btn-primary btn-sm"> Uzsakyti</a>
		</div>

<!-- Modal -->
	<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Uzsakymas/Registracija</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="admin.php" enctype="multipart/form-data">
                <label>Planas (php output)</label>
                <div>Pasirinktas planas</div>
                <label>Pasirinktie vnt skaiciu</label>
                <div>Pasirinktas uzsakymu skaicius</div>
                <label>viso kaina</label>
                <div>output kaina</div>
                <label for="delivery_date">Pristatymo data</label>
                <div> <input type="date" name="delivery_date"></div>
                <label>Nuolaidos kodas</label>
                <div> <input type="text_code" name="text_code"></div>
                <label>El. adresas</label>
                <div> <input type="email" name="email"></div>
                <label>Miestas</label>
                <div> <input type="text" name="city"></div>
                <label>Salis</label>
                <div> <input type="text" name="country"></div>
                <label>Gyvenamasis adresas</label>
                <div> <input type="text" name="address"></div>
                <label>telefonas</label>
                <div> <input type="text" name="phone"></div>
                <hr />
                <label>pristatymo laikas</label>
                <div> <input type="text" name="delivery_time"></div>
                <!-- <input type="text" class="form-control" name="text"> -->
                <label>nadinga info kurjeriui (laiptines kodas, aukstas, kontaktinis asmuos)</label>
                <textarea type="text" class="form-control" name="description"></textarea>
                <label>Statusas</label>
                <div> juridinis ar fizinis asmuo</div>
                <label>Slaptazodis</label>
                <div> <input type="password" name="password"></div>
                <label>Pakartokite slaptazodi</label>
                <div> <input type="password2" name="password2"></div>
                <hr />
                <label>Prekiu pristatymas kitu adresu</label>
                <input type="text" class="form-control" name="address2">

                
                <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block mt-2">Add</button>
                <button type="submit" name="cancel" class="btn btn-sm btn-primary btn-block mt-2">Cancel</button>
                <label>Priminti slaptazodi</label>
                <input type="text" class="form-control" name="remind_password">
            </form>
        </div>
    </div>
</div>
</div>

<div class="row">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="float-right btn btn-sm btn-success" data-toggle="modal"
                data-target="#addProductModal">uzsakymas/registracija
                <!--data-target=".bd-example-modal-lg -->
            </button>
        </div>
    </div>

</div>




</body>
</html>