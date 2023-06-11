<?php
    class clienteModel {
        private $mysqli;
        public function __construct()
        {
            require_once("c://xampp/htdocs/lab_final/config/conn.php");
            $con = new db();
            $this->mysqli = $con->conexion();
        }
        public function insertar($nombre, $apellido1, $apellido2, $email, $login, $password) {
            $stmt = $this->mysqli->prepare("INSERT INTO clientes (id, nombre, apellido1, apellido2, email, login, password) VALUES (null,?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nombre, $apellido1, $apellido2, $email, $login, $password);

            if ($stmt->execute()) {
                return $this->mysqli->insert_id;
            } else {
                // Manejo de errores
                echo "Error en la ejecución de la consulta: " . $stmt->error;
                return false;
            }
        }
        public function show($id) {
            $stmt = $this->mysqli->prepare("SELECT * FROM clientes WHERE id = ? LIMIT 1");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            return ($row) ? $row : false;
        }
        public function readAll() {
            $stmt = $this->mysqli->prepare("SELECT * FROM clientes");
            if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
            }
            return false;
        }
        public function find($email) {
            $stmt = $this->mysqli->prepare("SELECT * FROM clientes WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->num_rows > 0;
        }
        public function delete($id) {
            $stmt = $this->mysqli->prepare("DELETE FROM clientes WHERE id = ?");
            $stmt->bind_param("i", $id);
            return ($stmt->execute());
        }
    }

?>
