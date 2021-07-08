<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Nuestro "Blog-Sito"</title>
    <link rel="stylesheet" href="../public/css/estilos.css">    
  </head>

  <body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top px-5 bg-dark">
  <a class="navbar-brand d-inline-block" href="#"> Nuestro "Blog-Sito"<p id="version">Para vos Gonzaaaa</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse navbarCollapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>inicio">Registrarse<span class="sr-only">(current)</span></a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo constant('URL'); 
        ?>iniciarSesion">Iniciar Sesion</a>
      </li>
    </ul>

  </div>  
</nav><br><br><br><br>

<section>
    <article>
    
    <?php 
    foreach ($parametros['posts']  as $fila)
    {   
        echo $fila['titulopost'] . " " . $fila['cuerpopost'] . " " . $fila['fechapost'] . "<br>";
    }
  
    ?>
    
     </article>
</section>

<aside>

 
    <div class="sidebar">Historial de publicaciones 
        <ul>
            <li class="Julio"><a href="https://www.intercambiosvirtuales.org/category/anime">Julio</a></li>
        </ul>       
  </div>

  </aside>

  </body>

  <title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">

<h2 class="center">Páginas</h2>


<div class="w3-center">
<div class="w3-bar">
  <a href="#" class="w3-button">&laquo;</a>
  <a href="#" class="w3-button">1</a>
  <a href="#" class="w3-button">2</a>
  <a href="#" class="w3-button">3</a>
  <a href="#" class="w3-button">4</a>
  <a href="#" class="w3-button">&raquo;</a>
</div>
</div>

</div>
</body>

</html>