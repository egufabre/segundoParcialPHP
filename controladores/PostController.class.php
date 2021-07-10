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
            return generarHtml('404',['exito' =>false]);
        }
    }


    
    public static function ObtenerPost(){
        $u = new PostModelo();
        $posts = array();
        foreach($u -> obtenerTodos() as $fila){
            $post = array(
                "titulopost" => $fila -> titulopost,
                "cuerpopost" => $fila -> cuerpopost,
                "fechapost" => $fila -> fechapost  
            );
            array_push($posts,$post);
        }
        $fechas = self::OrdenarFechas();
        

        return generarHtml('index',['posts' => $posts, 'fechas' => $fechas]);
    }

    public static function OrdenarFechas(){
        $u = new PostModelo();
        $fechas = array();
        foreach($u -> traerFechas() as $fecha){
            $fecha = array(
                "anio" => $fecha -> anio,
                "mes" => $fecha -> mes
            );
            array_push($fechas, $fecha);
        }
        return $fechas;
    }























}