
<?php 
    require '../utils/autoloader.php';

    class PostModelo extends Modelo{
        public $titulopost;
        public $cuerpopost;

        public function GuardarPost(){

            $this -> id ? $this -> prepararUpdatePost() : $this -> prepararInsertPost();
            $this -> sentencia -> execute();

            if($this -> sentencia -> error){
                throw new Exception("Hubo un problema al cargar el usuario: " . $this -> sentencia -> error);
            }
        }

        private function prepararUpdatePost(){
            //$this -> password = $this -> hashearPassword($this -> password);
            $sql = "UPDATE posteo set id = ?, titulopost = ?, cuerpopost = ?";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_params("iss",
                $this -> id,
                $this -> titulopost,
                $this -> cuerpopost
            );
        }
        //funciona
        private function prepararInsertPost(){
            //$this -> password = $this -> hashearPassword($this -> password);
            $sql = "INSERT INTO posteo (titulopost,cuerpopost) VALUES (?,?)";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("ss",
                $this -> titulopost,
                $this -> cuerpopost
            );
        }
    
    
    
    
    
    
    
    
    }