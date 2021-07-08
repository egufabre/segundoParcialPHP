
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
        public function obtenerTodos(){
            $sql = "SELECT titulopost,cuerpopost,fechapost FROM posteo";
            $filas = array();
            foreach($this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC) as $fila){
                $u = new PostModelo();
                $u -> titulopost = $fila['titulopost'];
                $u -> cuerpopost = $fila['cuerpopost'];
                $u -> fechapost = $fila['fechapost'];
                array_push($filas,$u);
            }
            if($this -> conexion -> error){
                throw new Exception("Error al obtener las personas: " . $this -> conexion -> error);
            }
            return $filas;
        }
    
    
    
    
    
    
    
    }