<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPERATURA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container">
<form  action="temperaturam.php"  method="POST">
  <div class="form-group">
    <label for="temperaturaminima">Temperatura mínima:</label>
    <input type="number" class="form-control" id="temperaturaminima" name="temperaturaminima">
  </div>
  <div class="form-group">
    <label for="temperaturamaxima">Temperatura máxima:</label>
    <input type="number" class="form-control" id="temperaturamaxima" name="temperaturamaxima">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>    
    



<?php

if(isset($_POST['temperaturaminima'])){

    $temperaturaminima= $_POST['temperaturaminima'];
    $temperaturamaxima=$_POST['temperaturamaxima'];
    
    $temperaturamedia = ($temperaturaminima + $temperaturamaxima) / 2;
    
    echo "La temperatura media es  ". $temperaturamedia;
}



?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
