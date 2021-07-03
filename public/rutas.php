<?php  
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';

    Routes::Add("/alta","post","UsuarioController::AltaDeUsuario");
    Routes::AddView("/alta","registro");
    
    
    Routes::Add("/log","post","UsuarioController::IniciarSesion");
    Routes::AddView("/log","login");

    Routes::Add("/index","post","UsuarioController::MostrarMenuPrincipal");
    Routes::AddView("/index","index");



    Routes::Run();

    