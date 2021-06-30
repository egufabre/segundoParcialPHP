<?php
    
    require '../utils/autoloader.php';
    
    class AutorControlador{
        public static function AltaDeAutor($request){
            try{
                $a = new AutorModelo();
                $a -> nombre = $nombre;
                $a -> apellido = $apellido; 
                $a -> mail = $mail;
                $a -> password = $password;
                $a -> foto = $foto; 
                $a -> Guardar();
                return generarHtml('crearUsuario',['exito' => true]);
            }
            catch(Exception $e){
                error_log($e -> getMessage());
                return generarHtml('crearUsuario',['exito' =>false]);
            }
        }
        public static function MostrarCrearAutor($request){
            return cargarVista("crearUsuario");
        }
    }