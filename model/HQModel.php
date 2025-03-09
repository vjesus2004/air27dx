<?php
    class HQModel{
        
        private $db;
     
        public function __construct(){
            require_once("db.php");
            $this->db = Conexion::ConexionBD();
        }

        public function insertHQ($nombre, $apellido, $email, $numero, $motivo, $mensaje) {
            // Verificar si el registro ya existe
            $checkSql = "SELECT * FROM HQ WHERE email = ? AND DATE = ?";
            $stmtCheck = $this->db->prepare($checkSql);
            if ($stmtCheck) {
                $date = date('Y-m-d H:i:s');
                $stmtCheck->bind_param("ss", $email, $date);
                $stmtCheck->execute();
                $result = $stmtCheck->get_result();
                if ($result->num_rows > 0) {
                    $stmtCheck->close();
                    return "Record already exists";
                }
                $stmtCheck->close();
            }
        
            // Si no existe, insertar el nuevo registro
            $sql = "INSERT INTO HQ (namee, surname, p_number, DATE, email, content, reason) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("sssssss", $nombre, $apellido, $numero, $date, $email, $mensaje, $motivo);
                if ($stmt->execute()) {
                    $stmt->close();
                } else {
                    $error = "Error: " . $stmt->error;
                    $stmt->close();
                    return $error;
                }
            } else {
                return "Error preparing statement: " . $this->db->error;
            }
        }
        
        
            
            public function GetHQ() {
                // Preparar la consulta SQL
                $sql = "SELECT * FROM HQ WHERE baja = 0";
            
                // Ejecutar la consulta
                $result = $this->db->query($sql);
            
                // Verificar si la consulta se ejecutó correctamente
                if ($result) {
                    // Inicializar un array para almacenar las noticias
                    $noticias = array();
            
                    // Recorrer los resultados y almacenar cada fila en el array de noticias
                    while ($row = $result->fetch_assoc()) {
                        $noticias[] = $row;
                    }
            
                    // Liberar el resultado y devolver el array de noticias
                    $result->free();
                    return $noticias;
                } else {
                    // Si la consulta falla, devolver un array vacío
                    return array();
                }
            }

            public function GetHQBaja() {
                // Preparar la consulta SQL
                $sql = "SELECT * FROM HQ WHERE baja = 1";
            
                // Ejecutar la consulta
                $result = $this->db->query($sql);
            
                // Verificar si la consulta se ejecutó correctamente
                if ($result) {
                    // Inicializar un array para almacenar las noticias
                    $noticias = array();
            
                    // Recorrer los resultados y almacenar cada fila en el array de noticias
                    while ($row = $result->fetch_assoc()) {
                        $noticias[] = $row;
                    }
            
                    // Liberar el resultado y devolver el array de noticias
                    $result->free();
                    return $noticias;
                } else {
                    // Si la consulta falla, devolver un array vacío
                    return array();
                }
            }
            
            public function DeleteHQ($id) {

                
                $sql = 'UPDATE HQ SET baja = 1 WHERE id = ' . $id;
                                    $stmt = $this->db->prepare($sql);  

            
                    // Ejecutar la consulta
                    $stmt->execute();
       
            // Verificar si se actualizó alguna fila
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Code to execute if rows were affected
            } else {
                echo 'No se encontró ningún contacto con esa ID.';
            }
            
             
            }
                
            public function ActiveHQ($id) {

                
                $sql = 'UPDATE HQ SET baja = 0 WHERE id = ' . $id;
                                    $stmt = $this->db->prepare($sql);  

            
                    // Ejecutar la consulta
                    $stmt->execute();
       
            // Verificar si se actualizó alguna fila
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Code to execute if rows were affected
            } else {
                echo 'No se encontró ningún contacto con esa ID.';
            }
            
             
            }
                





    }

        