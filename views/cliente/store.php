<?php
    require_once("c://xampp/htdocs/Lab_final/views/head/header.php");
    require_once("c://xampp/htdocs/Lab_Final/controller/clienteController.php");

    $user = new clienteController();

    if ($_POST) {
      $campos = array(
        'nombre' => 'Nombre',
        'apellido1' => 'Primer Apellido',
        'apellido2' => 'Segundo Apellido',
        'email' => 'Email',
        'login' => 'Login',
        'password' => 'Contraseña'
      );

      // Array para almacenar los errores
      $errores = array();

      // Validación de campos vacíos
      foreach ($campos as $campo => $etiqueta) {
          if (empty(trim($_POST[$campo]))) {
              $errores[] = "El campo '{$etiqueta}' no puede estar vacío.";
          }
      }

      // Comprobar si hay errores
      if (!empty($errores)) {
          // Mostrar los errores al usuario
          echo '<div class="contenedor-errores"><div><h3>No se ha podido realizar el registro: </h3>';
          echo '<ul class="lista-errores">';
          foreach ($errores as $error) {
              echo '<li> <i class="fa-solid fa-triangle-exclamation"></i>  ' . $error . ' </li>';
          }
          echo '</ul> </div>
                <button onclick="history.back()" class="btn btn-primary btn-back-store">Volver</button>
                </div>';
      } else {
          // Los campos no están vacíos, realizar otras acciones o procesar el formulario
      
          $nombre = trim($_POST["nombre"]);
          $apellido1 = trim($_POST["apellido1"]);
          $apellido2 = trim($_POST["apellido2"]);
          $email = trim($_POST["email"]);
          $login = trim($_POST["login"]);
          $password = trim($_POST["password"]);

          if ($user->find($email)) {
            echo '<h2 class="error-msg"><i class="fa-solid fa-triangle-exclamation"></i> El correo electrónico ' . $email .' ya está en uso. Por favor, ingrese otro correo electrónico.</h2>';
            echo '<button onclick="history.back()" class="btn btn-primary btn-back-store">Volver</button>';

          } else {
            
                $user->guardar($nombre, $apellido1, $apellido2, $email, $login, $password);
          }
            
        }
    }
?>

<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/footer.php");
?>