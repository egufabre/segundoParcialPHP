<?php  
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';

    Routes::Add("/alta","post","UsuarioController::AltaDeUsuario");
    Routes::AddView("/alta","registro");
    
    Routes::Add("/altapost","post","PostController::AltaDePost");
    Routes::AddView("/altapost","ingresarpost");



    Routes::Add("/log","get","UsuarioController::MostrarLogin");
    Routes::AddView("/log","login");

    Routes::Add("/log","post","UsuarioController::IniciarSesion");
   

    Routes::Add("/index","post","UsuarioController::MostrarMenuPrincipal","AuthMiddleware::EstaAutenticado");
    Routes::AddView("/index","index","AuthMiddleware::EstaAutenticadoView");



    Routes::Run();

    