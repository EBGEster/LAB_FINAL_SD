<?php
    class clienteController {
      private $model;
      public function __construct()
      {
        require_once("c://xampp/htdocs/Lab_Final/model/clienteModel.php");
        $this->model = new clienteModel();
      }
      public function guardar($nombre, $apellido1, $apellido2, $email, $login, $password)
      {
        $id = $this->model->insertar($nombre, $apellido1, $apellido2, $email, $login, $password);

        return ($id != false) ? header("Location:show.php?id=".$id) : header("Location:registroForm.php");
      }
      public function show($id)
      {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
      }
      public function verTodos()
      {
        return ($this->model->readAll()) ? $this->model->readall() : false;
      }
      public function delete($id, $email)
      {
        return ($this->model->delete($id, $email)) ? header("Location:correctDeleted.php") : header("Location:show.php?id=".$id);
      }
      public function find($email) {
        return $this->model->find($email);
      }
}
?>