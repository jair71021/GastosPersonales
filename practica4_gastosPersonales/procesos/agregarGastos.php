<?php
    $descripcion = $_POST['descripcion'];
    $gastos     =$_POST['gastos'];
    $fecha = $_POST['fecha'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_gastos ( descripcion,gastos,fecha) VALUES ('$descripcion', 
                                                                    '$gastos',
                                                                    '$fecha')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar nada !";
    }
?>