<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canasta Familiar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form action="canastaFamiliar.php" method="POST">
	<div class="row">
		<h4>Producto 1:</h4><br><br>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="name1">Nombre</label>
			<input type="text" class="form-control" id="name1" name="name1">
		</div>
		<div class="form-group col-md-4">
			<label for="cantidad1">Cantidad:</label>
			<input type="number" class="form-control" id="cantidad1" name="cantidad1">
		</div>
		<div class="form-group col-md-4">
			<label for="precio1">Precio:</label>
			<input type="number" class="form-control" id="precio1" name="precio1">
		</div>
	</div>

	<div class="row">
		<h4>Producto 2:</h4><br><br>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="name2">Nombre</label>
			<input type="text" class="form-control" id="name2" name="name2"> 
		</div>
		<div class="form-group col-md-4">
			<label for="cantidad2">Cantidad:</label>
			<input type="number" class="form-control" id="cantidad2" name="cantidad2"> 
		</div>
		<div class="form-group col-md-4">
			<label for="precio2">Precio:</label>
			<input type="number" class="form-control" id="precio2" name="precio2">
		</div>
	</div>


	<div class="row">
		<h4>Producto 3:</h4><br><br>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="name3">Nombre</label>
			<input type="text" class="form-control" id="name3" name="name3">
		</div>
		<div class="form-group col-md-4">
			<label for="cantidad3">Cantidad:</label>
			<input type="number" class="form-control" id="cantidad3" name="cantidad3">
		</div>
		<div class="form-group col-md-4">
			<label for="precio3">Precio:</label>
			<input type="number" class="form-control" id="precio3" name="precio3">
		</div>
	</div>


	<div class="row">
		<h4>Producto 4:</h4><br><br>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="name4">Nombre</label>
			<input type="text" class="form-control" id="name4" name="name4">
		</div>
		<div class="form-group col-md-4">
			<label for="cantidad4">Cantidad:</label>
			<input type="number" class="form-control" id="cantidad4" name="cantidad4">
		</div>
		<div class="form-group col-md-4">
			<label for="precio4">Precio:</label>
			<input type="number" class="form-control" id="precio4" name="precio4">
		</div>
	</div>

	<div class="row">
		<h4>Producto 5:</h4><br><br>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="name5">Nombre</label>
			<input type="text" class="form-control" id="name5" name="name5">
		</div>
		<div class="form-group col-md-4">
			<label for="cantidad5">Cantidad:</label>
			<input type="number" class="form-control" id="cantidad5" name="cantidad5">
		</div>
		<div class="form-group col-md-4">
			<label for="precio5">Precio:</label>
			<input type="number" class="form-control" id="precio5" name="precio5">
		</div>
	</div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
</div>

<?php 

if(isset($_POST['precio1'])){
	$precio1 = intval($_POST['precio1']);
	$precio2 = intval($_POST['precio2']);
	$precio3 = intval($_POST['precio3']);
	$precio4 = intval($_POST['precio4']);
	$precio5 = intval($_POST['precio5']);

	$cantidad1 = intval($_POST['cantidad1']);
	$cantidad2 = intval($_POST['cantidad2']);
	$cantidad3 = intval($_POST['cantidad3']);
	$cantidad4 = intval($_POST['cantidad4']);
	$cantidad5 = intval($_POST['cantidad5']);

	$totalPrecios = ($precio1*$cantidad1) + ($precio2*$cantidad2) + ($precio3*$cantidad3) + ($precio4*$cantidad4) + ($precio5*$cantidad5);
	$impuesto = ($totalPrecios)*0.19;
	$total = $totalPrecios + $impuesto;
	echo "El costo total de la compra es: ".$total;
}
?>   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
