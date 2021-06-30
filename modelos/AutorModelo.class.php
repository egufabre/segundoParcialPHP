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
        private function insertarAutor(){
            $this -> password = $this -> hashearPass($this -> password);
            $sql = "INSERT INTO autor(nombre, apellido, mail, password, foto) VALUES (?,?,?,?,?)";
            $this -> sentencia = $this -> conexion -> prepare($sql);
            $this -> sentencia -> bind_params("ssssb",
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
                throw new Exception("Hubo un problema al insertar un nuevo autor: " . $this -> sentencia -> error);
            }
        }

    }
