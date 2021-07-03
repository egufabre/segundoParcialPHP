<?php  
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';

    Routes::Add("/alta","post","UsuarioController::AltaDeUsuario");
    Routes::AddView("/alta","registro");
    
    
    //Routes::Add("/login","post","UsuarioController::IniciarSesion");
    //Routes::AddView("/","publico");

    Routes::Run();

    