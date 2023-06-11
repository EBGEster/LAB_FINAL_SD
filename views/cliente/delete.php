<?php
    require_once("c://xampp/htdocs/Lab_final/views/head/header.php");
    require_once("c://xampp/htdocs/Lab_Final/controller/clienteController.php");
    $obj = new clienteController();
    $obj->delete($_GET['id'], $_GET['email']);

?>

