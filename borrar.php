<?php
    session_start();
    include("db.php");

    $id = $_GET['id'];

    if(isset($_SESSION['usuario'])){
        $sql = "DELETE FROM productos WHERE id=$id";

        if(mysqli_query($db, $sql)){
            $_SESSION['Success'] = "El producto fue eliminado con éxito";
        } else{
            $_SESSION['Error'] = "ERROR eliminando el producto: " . mysqli_error($db);
        }

        header('location: crud.php');
    }
?>