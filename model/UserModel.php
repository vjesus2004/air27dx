<?php
    class UserModel{
        
        private $db;
     
        public function __construct(){
            require_once("db.php");
            $this->db = Conexion::ConexionBD();
        }

        public function getUserRole($email, $password) {
            $sql = "SELECT rol FROM usuario WHERE email = ? AND pass = ?";
            $stmt = $this->db->prepare($sql);
        
            $stmt->bind_param("ss", $email, $password);
        
            $stmt->execute();
        
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
        
            return $user ? $user['rol'] : null;
        }
    }

        