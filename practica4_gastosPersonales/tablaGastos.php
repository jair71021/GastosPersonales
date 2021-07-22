<?php 
    include "procesos/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id, descripcion,gastos, fecha FROM t_gastos";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table" id="tabla">
    <thead>
        <th>Id</th>
        <th>Descripcion del gasto</th>
        <th>Gastos</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
        while($mostrar = mysqli_fetch_array($respuesta)){ 
            $id= $mostrar['id'];
            $descripcion = $mostrar['descripcion'];
            $gastos     =$mostrar['gastos'];
            $fecha=$mostrar['fecha'];
        
        ?>
        <tr>
            <td><?php echo $mostrar['id']; ?></td>
            <td><?php echo $mostrar['descripcion']; ?></td>
            <td><?php echo $mostrar['gastos']; ?></td>
            <th><?php echo $mostrar['fecha']; ?></th>
            <td>
                <form action="procesos/eliminarGastos.php" method="post">
                    <input type="text" value="<?php echo $id; ?>" name="idEliminar" required hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>