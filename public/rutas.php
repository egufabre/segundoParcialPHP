<?php
    require '../utils/autoloader.php';
    require '../routes/routes.class.php';
    
    Routes::Add("/alta","get","AutorControlador::AltaDeAutor");
    
    Routes::Add("/alta","post","AutorControlador::AltaDeAutor");
    
    Routes::Run();