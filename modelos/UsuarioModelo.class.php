<?php 
    require '../utils/autoloader.php';

    class UsuarioModelo extends Modelo{
        public $id;
        public $nombre;
        public $apellido;
        public $mail;
        public $password;

        public function Guardar(){

            $this -> id ? $this -> prepararUpdate() : $this -> prepararInsert();
            $this -> sentencia -> execute();

            if($this -> sentencia -> error){

                echo "Entre";
            throw new Exception("Hubo un problema al cargar el usuario: " . $this -> sentencia -> error);
            }
        }

        private function prepararUpdate(){
            
           // $this -> password = $this -> hashearPassword($this -> password);
            $sql = "UPDATE autor set id = ?, nombre = ?, apellido = ?, mail = ?";
           
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("isss",
                $this -> id,
                $this -> nombre,
                $this -> apellido,
                $this -> mail,
                //$this -> password 
               
            );
           
        }
        //funciona
        private function prepararInsert(){
            $this -> password = $this -> hashearPassword($this -> password);
            $sql = "INSERT INTO autor (nombre,apellido,mail,password) VALUES (?,?,?,?)";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("ssss",
                $this -> nombre,
                $this -> apellido,
                $this -> mail,
                $this -> password 
            );
        }

        public function Autenticar(){
            $this -> prepararAutenticacion();
            $this -> sentencia -> execute();

            $resultado = $this -> sentencia -> get_result() -> fetch_assoc();

            if($this -> sentencia -> error){
                throw new Exception("Error al obtener el usuario: " . $this -> sentencia -> error);
            }


            if($resultado){
                $comparacion = $this -> compararPasswords($resultado['password']);
                if($comparacion){
                   $this -> asignarDatosDeUsuario($resultado);
                }   
                else{
                    throw new Exception("Error al iniciar sesion");
                }
            }
            
            else throw new Exception("Error al iniciar sesion");
        }


        private function prepararAutenticacion(){
            $sql = "SELECT id,nombre,apellido,mail,password FROM autor WHERE nombre = ? ";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("s", $this -> nombre);
        }

        private function asignarDatosDeUsuario($resultado){
            $this -> id = $resultado['id'];
            $this -> nombre = $resultado['nombre'];
            $this -> apellido = $resultado['apellido'];
            $this -> mail = $resultado['mail'];
            $this -> password = $resultado['password'];

        }
        
        private function compararPasswords($passwordHasheado){
            return password_verify($this -> password, $passwordHasheado);
        }
        
        private function hashearPassword($password){
            return password_hash($password,PASSWORD_DEFAULT);
        }


        
        public function obtenerUno($id){
            $this -> prepararObtenerUno($id);
            $resultado = $this -> sentencia -> execute() -> fetch_assoc();
            if($this -> sentencia -> error){
                throw new Exception("Error al obtener la personas: " . $this -> sentencia -> error);
            }
            $this -> asignarCamposDePersona($resultado);

        }
        private function prepararObtenerUno($id){
            $sql = "SELECT id,nombre,apellido,mail,password FROM autor WHERE id = ?";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("i", $this -> $id);
        }

        private function asignarCamposDePersona($resultado){
            $this -> id = $resultado['id'];
            $this -> nombre = $resultado['nombre'];
            $this -> apellido = $resultado['apellido'];
            $this -> mail = $resultado['mail'];
            $this -> password = $resultado['password'];
        }
    
    }

