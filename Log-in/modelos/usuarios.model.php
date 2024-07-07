<?php
    require_once('../conexion/conexion.php');
    class Usuario extends conexion {
        private $id_user;
        private $id_rol;
        private $nom_user;
        private $nombre;
        private $apellido;
        private $cedula;
        private $contraseña;
        public function getId_user() { return $this->id_user; } 
        public function setId_user($id_user) { $this->id_user = $id_user;}
        public function getId_rol() { return $this->id_rol; }
        public function setId_rol($id_rol) { $this->id_rol = $id_rol; } 
        public function getNom_user() { return $this->nom_user; } 
        public function setNom_user($nom_user) { $this->nom_user = $nom_user; }   
        public function getNombre() { return $this->nombre; } 
        public function setNombre($nombre) { $this->nombre = $nombre; }
        public function getApellido() { return $this->apellido; } 
        public function setApellido($apellido) { $this->apellido = $apellido; }
        public function getCedula() { return $this->cedula; }
        public function setCedula($cedula) { $this->cedula = $cedula; }
        public function getContraseña() { return $this->contraseña; } 
        public function setContraseña($contraseña) { $this->contraseña = $contraseña; }
        
        public function __construct()
        {
            parent::__construct();
            
        }
        public function Registrarse(){
            $query = '
                INSERT INTO usuarios(nom_usuario,nombre,apellido,cedula,contraseña) VALUES(?,?,?,?,?);
            ';
            $this->getConexion()->prepare($query)->execute(
                array(
                    $this->nom_user,
                    $this->nombre,
                    $this->apellido,
                    $this->cedula,
                    $this->contraseña
                ));
            
        }
        public function Login() 
        {
            $query = '
            Select * from usuarios where nom_usuario = ? and contraseña = ?;
            ';
            $stmt = $this->getConexion()->prepare($query);
            $stmt->execute(array(
                $this->nom_user,
                $this->contraseña
            ));
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function SelectAll(){
            $query = '
            Select u.*,r.nom_rol from usuarios u inner join roles r  on u.id_rol = r.id_rol;
            ';
            $stmt = $this->getConexion()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }


    }

?>