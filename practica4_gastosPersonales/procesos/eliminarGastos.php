<?php
    $id = $_POST['idEliminar'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_gastos WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar !!";
    }

?>