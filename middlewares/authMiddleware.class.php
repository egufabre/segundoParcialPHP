<?php 

    require '../utils/autoloader.php';

    class AuthMiddleware {
        public function EstaAutenticado($contextoMiddleware){
            if(isset($_SESSION['autenticado'])){
                $contexto = [
                    'post' => $contextoMiddleware['post'],
                    'get' => $contextoMiddleware['get'],
                    'server' => $contextoMiddleware['server']
                ];
                call_user_func_array($contextoMiddleware['funcion'],$contexto);
            }
            else{
                header("Location: /log");
                return;
            }
        }

        public function EstaAutenticadoView($contextoMiddleware){
            if(isset($_SESSION['autenticado'])){
                cargarVista($contextoMiddleware['vista']);
            }
            else{
                header("Location: /log");
                return;
            }
        }
    }