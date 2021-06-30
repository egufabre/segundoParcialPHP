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
  <h3>COMPLETE EL FORMULARIO</h3>
  <br>

<form onsubmit="return quitarEspacios()">

<div class="form-group">
    <label>Ingrese su nombre:</label>
    <input type="text" class="form-control" maxlength="20" minlength="3" placeholder="Nombre" title="Mínimo de caracteres 3 y sin espacios" id="nombre" required>
</div>

<div class="form-group">
    
    <label>Ingrese su apellido:</label>
    <input type="text" class="form-control" maxlength="20" minlength="3" placeholder="Apellido" title="Mínimo de caracteres 3 y sin espacios" id="nombre" required>
</div>

<div class="form-group">
    <label>Ingrese su correo electrónico:</label>
    <input type="email" class="form-control" minlength="3" placeholder="ejemplo@ejemplo.com" title="Agregar correo electrónico" required>
</div>


<div class="form-group">
    <label>Ingrese su password:</label>
    <input type="password" class="form-control" maxlength="15" minlength="8" required pattern="[A-Za-z0-9]+" placeholder="completar campo" title="Solo letras y números" required>
</div>

<div class="form-group">
     <label>Subir foto de perfil</label>
      <input type="file" class="form-control-file border" name="file" style="border-radius:3px; padding:10px;">
    </div>
 
<button style="background:grey;border:none;padding:10px;" type="submit" class="btn btn-primary">REGISTRARSE</button>
  </form>
</div>

<div class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
</div>

</div>
</div>

<script>
function quitarEspacios()
    {
    var espacios = new RegExp(/\s/);
    var nombre = document.getElementById('nombre').value;
    if(espacios.test(nombre))
    {
        alert('No se permiten espacios');
        return false;
    }
        else
        return true;
    }
</script>
</body>
</html>