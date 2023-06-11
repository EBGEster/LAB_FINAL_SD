<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/header.php");
    require_once("c://xampp/htdocs/Lab_Final/controller/clienteController.php");
    $cliente = new clienteController();
    $data = $cliente->show($_GET['id']);
    $showAlta = true;
    if (isset($_GET['alta'])) {
      $showAlta = filter_var($_GET['alta'], FILTER_VALIDATE_BOOLEAN);
    }
    print_r($showAlta);
    
?>

<div>
  <h1 class="<?php echo $showAlta ? 'show-titulo' : 'hide-titulo'; ?>">
  Registro dado de alta correctamente
</h1>
</div>
<div class="login-box">
  <h2>Detalles del Cliente</h2>
  <form action="consulta.php">
    <div class="user-box">
      <input type="text" name="nombre" maxlength="50" readonly value="<?php echo $data['nombre']; ?>">
      <label class="disabled">Nombre</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellido1" maxlength="50" readonly value="<?php echo $data['apellido1']; ?>">
      <label class="disabled">Primer apellido</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellido2" maxlength="50" readonly value="<?php echo $data['apellido2']; ?>">
      <label class="disabled">Segundo apellido</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" maxlength="50" readonly value="<?php echo $data['email']; ?>">
      <label class="disabled">Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="login" maxlength="50" readonly value="<?php echo $data['login']; ?>">
      <label class="disabled">Login</label>
    </div>
    <input class="submit" type="submit" name="submit" value="Ver todos">
  </form>
</div>

<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/footer.php");
?>