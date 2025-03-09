<?php
    class NoticiasModel{
        
        private $db;
     
        public function __construct(){
            require_once("db.php");
            $this->db = Conexion::ConexionBD();
        }

        public function insertNoticia($titulo, $categoria, $contenido, $directorio_destino, $nombre_fichero)
{
    $fecha = date("Y-m-d");

    // Escapar los datos de entrada para evitar inyección SQL
    $titulo = $this->db->real_escape_string($titulo);
    $categoria = $this->db->real_escape_string($categoria);
    // No necesitamos escapar el contenido aquí, ya que lo haremos después de tomar en cuenta los saltos de línea

    // Convertir saltos de línea en etiquetas <br>
    $contenido = nl2br($contenido);

    if (is_dir($directorio_destino) && isset($_FILES[$nombre_fichero]['tmp_name'])) {
        $tmp_name = $_FILES[$nombre_fichero]['tmp_name'];
        $img_file = $_FILES[$nombre_fichero]['name'];
        $img_type = $_FILES[$nombre_fichero]['type'];
        $allowed_types = ['image/gif', 'image/jpeg', 'image/jpg', 'image/png'];

        // Verificar si el archivo subido es una imagen y verificar sus dimensiones
        if (in_array($img_type, $allowed_types)) {
            $image_info = getimagesize($tmp_name);
            $width = $image_info[0];
            $height = $image_info[1];

            if ($width == 1600 && $height == 1044) {
                if (move_uploaded_file($tmp_name, $directorio_destino . '/' . $img_file)) {
                    $ruta = $directorio_destino . '/' . $img_file;
                    echo "<script>console.log('Imagen movida a: $ruta');</script>";
                    // Insertar la noticia en la base de datos
                    $sql = "INSERT INTO noticia (title, fecha, categoria, content, imagen) VALUES ('$titulo', '$fecha', '$categoria', '$contenido', '$ruta')";

                    if ($this->db->query($sql)) {
                        echo "<script>alert('Noticia insertada correctamente');</script>";
                        return true;
                    } else {
                        echo "<script>alert('Error: " . $this->db->error . "');</script>";
                        return false;
                    }
                } else {
                    echo "<script>alert('Error al mover el archivo');</script>";
                    return false;
                }
            } else {
                echo "<script>alert('Error: La imagen debe tener dimensiones 1600x1044 píxeles.');</script>";
                return false;
            }
        } else {
            echo "<script>alert('Error: Tipo de archivo no permitido. Solo se permiten archivos GIF, JPEG, JPG y PNG.');</script>";
            return false;
        }
    } else {
        echo "<script>alert('Error: Directorio no válido o archivo no subido.');</script>";
        return false;
    }
}


        
            
            public function GetNoticias() {
                // Preparar la consulta SQL
                $sql = "SELECT * FROM noticia WHERE baja = 0";
            
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

            public function GetNoticiasBaja() {
                // Preparar la consulta SQL
                $sql = "SELECT * FROM noticia WHERE baja = 1";
            
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


            public function GetNoticiaById($id) {
                // Preparar la consulta SQL con un parámetro de id
                $sql = "SELECT * FROM noticia WHERE id = ? AND baja = 0";
            
                // Preparar la declaración
                if ($stmt = $this->db->prepare($sql)) {
                    // Vincular el parámetro al tipo de dato
                    $stmt->bind_param("i", $id);
            
                    // Ejecutar la declaración
                    $stmt->execute();
            
                    // Obtener el resultado
                    $result = $stmt->get_result();
            
                    // Verificar si se obtuvo algún resultado
                    if ($result->num_rows > 0) {
                        // Obtener la noticia correspondiente al id
                        $noticia = $result->fetch_assoc();
            
                        // Liberar el resultado y cerrar la declaración
                        $stmt->free_result();
                        $stmt->close();
            
                        // Devolver la noticia
                        return $noticia;
                    } else {
                        // Si no se obtuvo ningún resultado, devolver null
                        $stmt->close();
                        return null;
                    }
                } else {
                    // Si la preparación de la declaración falla, devolver null
                    return null;
                }
            }
            
            public function HideNew($id) {

                
                $sql = 'UPDATE noticia SET baja = 1 WHERE id = ' . $id;
                                    $stmt = $this->db->prepare($sql);  

            
                    // Ejecutar la consulta
                    $stmt->execute();
       
            // Verificar si se actualizó alguna fila
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Code to execute if rows were affected
            } else {
                echo 'No se encontró ningúna noticia con esa ID.';
            }
            
             
            }


            public function ShowNew($id) {

                
                $sql = 'UPDATE noticia SET baja = 0 WHERE id = ' . $id;
                                    $stmt = $this->db->prepare($sql);  

            
                    // Ejecutar la consulta
                    $stmt->execute();
       
            // Verificar si se actualizó alguna fila
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Code to execute if rows were affected
            } else {
                echo 'No se encontró ningúna noticia con esa ID.';
            }
            
             
            }
                
                




    }

        