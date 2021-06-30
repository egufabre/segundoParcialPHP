<?php
    
    require '../utils/autoloader.php';

    class AutorModelo extends Modelo{
        public $id;
        public $nombre;
        public $apellido;
        public $mail;
        public $password;
        public $foto;

        private function hashearPass($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }

        public function insertarAutor(){
            $this -> password = $this -> hashearPass($this -> password);
            $sql = "INSERT INTO autor(nombre, apellido, mail, password, foto) VALUES (?,?,?,?,?)";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_param("ssssb",
                $this -> nombre,
                $this -> apellido,
                $this -> mail,
                $this -> password,
                $this -> foto,
        );
        }

        public function Guardar(){

            $this -> insertarAutor();
            $this -> sentencia -> execute();

            if($this -> sentencia -> error){
                throw new Exception("Hubo un problema al cargar el usuario: " . $this -> sentencia -> error);
            }
        }
    }