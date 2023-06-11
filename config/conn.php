<?php
    class db
    {
        public function conexion() {
              require_once("credentials.php");
              $dbconn = new mysqli($servername, $username, $password, $dbname);

              if ($dbconn->connect_error) {
                die("No es posible conectarse a la base de datos: " . $dbconn->connect_error);
              }
              
              return $dbconn;
        }
    }
?>
