<?php
    require_once("c://xampp/htdocs/Lab_final/views/head/header.php");
    require_once("c://xampp/htdocs/Lab_final/controller/clienteController.php");
    $obj = new clienteController();
    $rows = $obj->verTodos();
    $columnNames = ['ID','Nombre', 'Primer Apellido', 'Segundo Apellido', 'E-mail', 'Login'];
?>
<div>
  <h1 class="show-titulo">Clientes Registrados</h1>
</div>
<div class="table-container">
  <table class="table table-bordered container-table">
    <?php if($rows): ?>
        <thead>
          <tr>
            <?php foreach ($columnNames as $columnName): ?>
              <th scope="col"><?php echo $columnName; ?></th>
            <?php endforeach; ?>
              <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $row): ?>
              <tr>
                <?php foreach ($row as $key => $value): ?>
                  <?php if ($key !== 'password'): ?>
                    <td><?php echo $value; ?></td>
                  <?php endif; ?>
                <?php endforeach; ?>
                <td>
                  <a href="show.php?id=<?= $row['id']?>&alta=false">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Ver Registro">
                    <i class="far fa-eye"></i></button>
                  </a>
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" title="Eliminar Registro" data-bs-toggle="modal"  data-bs-target="#id<?=$row['id']?>">
                    <i class="far fa-trash-alt"></i></button>

                  <!-- Modal -->
                    <div class="modal fade" id="id<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  ¿Desea eliminar el registro con ID <?=$row['id']?>?
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Una vez eliminado no se podra recuperar el registro
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                <a href="delete.php?id=<?= $row['id'] ?>&email=<?= $row['email'] ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </td>
              </tr>
            <?php endforeach; ?>
  <?php else: ?>
      <tr>
        <td colspan="<?php echo count($columnNames); ?>">No se encontraron datos</td>
      </tr>
  <?php endif; ?>
        
      
      </tbody>
  </table>
</div>

<script>
  function verDetalles(id) {
    // Lógica para mostrar los detalles del registro con el ID dado
    console.log("Ver detalles del registro con ID: " + id);
  }
  
  function editar(id) {
    // Lógica para editar el registro con el ID dado
    console.log("Editar registro con ID: " + id);
  }
  
  function eliminar(id) {
    // Lógica para eliminar el registro con el ID dado
    console.log("Eliminar registro con ID: " + id);
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<?php
    require_once("c://xampp/htdocs/Lab_Final/views/head/footer.php");
?>