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
                header("Location: /indexLogueado");
                

            } 
            catch (Exception $e) {
                error_log("Fallo login del usuario " . $request['post']['nombre']);
                generarHtml("404",["falla" => true]);
            }

        }

        private static function crearSesion($usuario){
            session_start();
            ob_start();
            $_SESSION['id'] = $usuario -> id;
            $_SESSION['nombre'] = $usuario -> nombre;
            $_SESSION['apellido'] = $usuario -> apellido;
            $_SESSION['mail'] = $usuario -> mail;
            $_SESSION['password'] = $usuario -> password;
            $_SESSION['autenticado'] = true;

        }

        public static function MostrarLogin(){
            session_start();
            if(isset($_SESSION['autenticado'])) header("Location: /index");
            else return cargarVista("login");
        }

        public static function MostrarMenuPrincipal(){
            session_start();
            if(isset($_SESSION['autenticado'])) header("Location: /log");
            else return cargarVista("index");
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

        public static function ModificarUsuario($request){
            try{
                $u = new UsuarioModelo();
                $u -> id = $_SESSION['id'];
                //echo "<pre>";print_r($_SESSION['id']);
                $u -> nombre = $request['post']['nombre'];
                $u -> apellido = $request['post']['apellido'];
                $u -> mail = $request['post']['mail'];
                $u -> password = $request['post']['password'];
                $u -> Guardar();
                return generarHtml('editarRegistro',['exito' => true]);

            }
            catch(Exception $e){
                error_Log($e -> getMessage());
                return generarHtml('404',['exito' => false]);
            }
        }
        
    }