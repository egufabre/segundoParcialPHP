<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="estilos.css">
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
  <h3>MODIFIQUE SUS DATOS</h3>
  <br>

<form id="formulario" action="/editar" method="post" >    <!-- onsubmit="return quitarEspacios()" -->

<div class="form-group">
    <label>Modifique su nombre:</label>
    <input type="text" class="form-control" maxlength="20" minlength="3" placeholder="Nombre" title="Mínimo de caracteres 3 y sin espacios" name="nombre" id="nombre" required>
</div>

<div class="form-group">
    
    <label>Modifique su apellido:</label>
    <input type="text" class="form-control" maxlength="20" minlength="3" placeholder="Apellido" title="Mínimo de caracteres 3 y sin espacios" name="apellido" id="apellido" required>
</div>

<div class="form-group">
    <label>Modifique su correo electrónico:</label>
    <input type="email" class="form-control" minlength="3" placeholder="ejemplo@ejemplo.com" title="Agregar correo electrónico" name="mail" id="mail" required>
</div>


<div class="form-group">
    <label>Modifique su password:</label>
    <input type="password" class="form-control" maxlength="15" minlength="8" required pattern="[A-Za-z0-9]+" placeholder="completar campo" title="Solo letras y números" name="password" id="password" required>
</div>


<input type="submit" value="Enviar" >

<a href="/indexLogueado"><button type="button">Volver al menu</button></a>

  </form>

  
</div>

<div class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
</div>

</div>
</div>


</body>
</html>
