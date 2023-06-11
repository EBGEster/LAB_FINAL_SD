<?php
    require_once("c://xampp/htdocs/Lab_final/views/head/header.php");
?>
<div class="login-box">
  <h2>Registro</h2>
  <form method="POST" action="store.php" id="myForm">
    <div class="user-box">
      <input type="text" name="nombre" maxlength="50" required>
      <label>Nombre</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellido1" maxlength="50" required>
      <label>Primer apellido</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellido2" maxlength="50" required>
      <label>Segundo apellido</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" maxlength="50" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="login" maxlength="50" required>
      <label>Login</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" maxlength="8" minlength="4" required>
      <label>Contraseña</label>
    </div>
    <input class="submit" type="submit" value="Enviar" name="submit">
    <input class="submit" type="reset" value="Restablecer" onclick="resetForm()">
  </form>

</div>

<script>
const resetForm = () => {
  let form = document.getElementById("myForm")
    let elements = form.elements
    for (let i = 0; i < elements.length; i++) {
      let element = elements[i]
      if (element.tagName === "INPUT") {
        // Restablecer el valor del campo de entrada
        if ((element.type !== "reset") && (element.type !== "submit")){
          element.value = ''
        }
      }
    }
}

</script>

<?php
    require_once("c://xampp/htdocs/Lab_final/views/head/footer.php");
?>