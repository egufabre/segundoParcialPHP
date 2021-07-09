<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background:#f7f7f5">

<div class="container-fluid">
  <div class="row">
<div class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>

<div class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 form">
  <h3>LOGIN</h3>
  <br>

<form id="formulario" action="/log" method="post" >    <!-- Para comentar -->

<div class="form-group">
    <label>Ingrese nombre:</label>
    <input type="text" class="form-control" maxlength="20" minlength="3" placeholder="Ingrese nombre " title="Mínimo de caracteres 3 y sin espacios" name="nombre" id="nombre" required>
</div>

<div class="form-group">
    
    <label>Ingrese contraseña:</label>
    <input type="password" class="form-control" maxlength="255" minlength="3" placeholder="Ingrese contraseña" title="Mínimo de caracteres 3 y sin espacios" name="password" id="password" required>
</div>

<input type="submit" value="Enviar" >

<a href="/index"><button type="button">Volver al menu</button></a>

  </form>
</div>

<div class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
</div>

</div>
</div>


</body>
</html>
