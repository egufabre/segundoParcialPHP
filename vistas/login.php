<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login</title>
    <link href="style.css" rel="stylesheet" 
    type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        
        <div class="col-md-5 card my-4">
          <div class='card-body'>
            <form action="/log" method="post">
          

              <div class="form-group">
                <input type="text" name="nombre" 
                placeholder="Correo del usuario" 
                class="form-control" required><br>
                
                <input type="password" name="password" 
                placeholder="Contraseña del usuario" 
                class="form-control" required><br>
                
                <input type="submit" name="sendLogin"
                value="Enviar"
                class="btn btn-primary btn-block">


              </div>
            </form>
           <!---------  <a href='?php echo constant('URL');?>                -----------> 
              <button class='btn btn-light btn-block'>Volver</button>
            </a>
          </div>
        </div>
        
      </div>
    </div>


    <!--------------------------------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
  </body>
</html>