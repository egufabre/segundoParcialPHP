<?php
    
    require '../utils/autoloader.php';
    
    class AutorControlador{
      
        public static function AltaDeAutor($request){

            if($nombre !==  ""  && $apellido !== "" && $email !== "" && $password !== "" && $foto !== ""){
                try{
                    $p = new AutorModelo();
                    $p -> nombre = $request['post']['nombre'];
                    $p -> apellido = $request['post']['apellido']; 
                    $p -> mail = $request['post']['mail'];
                    $p -> password = $request['post']['password'];
                    $p -> foto = $request['post']['foto'];
                    $p -> Guardar();
                    return generarHtml('crearUsuario',['exito' => true]);
                }
                catch(Exception $p){
                    error_log($p -> getMessage());
                    return generarHtml('crearUsuario',['exito' =>false]);
                }
            }
            return generarHtml('crearUsuario',['exito' => false]);
        }



    }