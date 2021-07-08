<?php 
    require '../utils/autoloader.php';

class PostController{

    public static function AltaDePost($request){
        try{
            $u = new PostModelo();
            $u -> titulopost = $request['post']['titulopost'];
            $u -> cuerpopost = $request['post']['cuerpopost']; 
            $u -> GuardarPost();
            return generarHtml('ingresarPost',['exito' => true]);
        }
        catch(Exception $e){
            error_log($e -> getMessage());
            return generarHtml('formularioInsertUsuario',['exito' =>false]);
        }
    }























}