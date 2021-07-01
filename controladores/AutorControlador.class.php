<?php
    
    require '../utils/autoloader.php';
    
    class AutorControlador{
      
         public static function AltaDeAutor($request){
              echo "entre funcion";
                    $p = new AutorModelo();
                    $p -> nombre = $request['post']['nombre'];
                    $p -> apellido = $request['post']['apellido']; 
                    $p -> email = $request['post']['email'];
                    $p -> password = $request['post']['password'];
                    $p -> foto = $request['post']['foto'];
                    
                    echo "llegue";
                    $p -> Guardar();
                    return generarHtml('crearUsuario',['exito' => true]);
                         
                }
           
        } 

      




    