<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
  // Obtener los botones por su clase
  const btnVer = document.querySelectorAll('.btn-ver');
  const btnEditar = document.querySelectorAll('.btn-editar');
  const btnEliminar = document.querySelectorAll('.btn-eliminar');
  
  // Agregar eventos a los botones
  btnVer.forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      // Acción a realizar cuando se presione el botón "Ver"
      console.log('Ver registro con ID:', id);
    });
  });
  
  btnEditar.forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      // Acción a realizar cuando se presione el botón "Editar"
      console.log('Editar registro con ID:', id);
    });
  });
  
  btnEliminar.forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      // Acción a realizar cuando se presione el botón "Eliminar"
      console.log('Eliminar registro con ID:', id);
    });
  });
</script>
  </body>
</html>