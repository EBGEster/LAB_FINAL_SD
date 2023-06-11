<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/header.php");
?>
<div>
  <div class="container text-center cards">
    <div class="row">
      <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Nuevo Cliente</h5>
              <p class="card-text">Haz click abajo para registrar nuevos clientes</p>
              <a href="/Lab_final/views/cliente/registroForm.php" class="btn btn-primary">Registro</a>
            </div>
          </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Consultar Clientes</h5>
              <p class="card-text">Haz click abajo para ver todos los clientes registrados</p>
              <a href="/Lab_final/views/cliente/consulta.php" class="btn btn-primary">Consulta</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

  

<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/footer.php");
?>