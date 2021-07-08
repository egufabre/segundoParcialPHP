<?php 

    require '../utils/autoloader.php';

    class UsuarioController{


        public static function IniciarSesion($request){
            try{
                $u = new UsuarioModelo();
                $u -> nombre = $request['post']['nombre'];
                $u -> password = $request['post']['password'];
                $u -> Autenticar();
                self::crearSesion($u);                
                header("Location: /log");
                

            }
            catch (Exception $e) {
                error_log("Fallo login del usuario " . $request['post']['nombre']);
                generarHtml("404",["falla" => true]);
            }

        }

        private static function crearSesion($usuario){
            session_start();
            $_SESSION['id'] = $usuario -> id;
            $_SESSION['nombre'] = $usuario -> nombre;
            $_SESSION['apellido'] = $usuario -> apellido;
            $_SESSION['mail'] = $usuario -> mail;
            $_SESSION['autenticado'] = true;

        }




        public static function MostrarLogin($request){
            session_start();
            if(isset($_SESSION['autenticado'])) header("Location: /log");
            else return cargarVista("login");
        }

        public static function MostrarMenuPrincipal($request){
            return cargarVista("index");
        }




      
        //funciona
        public static function AltaDeUsuario($request){
            try{
                $u = new UsuarioModelo();
                $u -> nombre = $request['post']['nombre'];
                $u -> apellido = $request['post']['apellido']; 
                $u -> mail = $request['post']['mail'];
                $u -> password = $request['post']['password'];
                $u -> Guardar();
                return generarHtml('registro',['exito' => true]);
            }
            catch(Exception $e){
                error_log($e -> getMessage());
                return generarHtml('formularioInsertUsuario',['exito' =>false]);
            }
        }
    }