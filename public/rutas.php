<?php
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';
    
    Routes::Add("/alta","get","AutorControlador::AltaDeAutor");
    //Routes::Add("/login","post","UsuarioController::IniciarSesion");
    
    Routes::Run();