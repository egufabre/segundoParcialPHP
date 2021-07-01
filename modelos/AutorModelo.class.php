<?php
    
    require '../utils/autoloader.php';

    class AutorModelo extends Modelo{
        public $id;
        public $nombre;
        public $apellido;
        public $email;
        public $password;
        public $foto;

        private function hashearPass($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }

       public function Guardar(){

        $this -> insertarAutor();   
        $this -> sentencia -> execute();
           

            if($this -> sentencia -> error){
                throw new Exception("Hubo un problema al cargar el usuario: " . $this -> sentencia -> error);
            }
        } 

         private function insertarAutor(){            
            $this -> password = $this -> hashearPass($this -> password);

            $sql = ("INSERT INTO autor(nombre, apellido, mail, password,foto) values (?,?,?,?,?)"); // ('$nombre','$apellido','$mail','$password') //(?,?,?,?,?)
            $this -> sentencia = $this -> conexion -> prepare($sql); 
            $this -> sentencia -> bind_param("ssssb",
            $this -> nombre,
            $this -> apellido,
            $this -> email,
            $this -> password,
            $this -> foto);

            echo "algo";

         } 

    }