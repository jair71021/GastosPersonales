<?php include "header.php"; ?>

<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Agregar un gasto</h1>
            <p class="lead">
                <div class="row">
                    <div class="col">
                        <form action="procesos/agregarGastos.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="descripcion">Descripcion del gasto</label>
                                    <input type="text" required class="form-control" name="descripcion">
                                    <label for="gastos">Cuanto gasto</label>
                                    <input type="number" required class="form-control" name="gastos">
                                    <label for="fecha">Seleccionar fecha del gasto</label>
                                    <input type="date" required class="form-control" name="fecha">

                                    <br>
                                    <button class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaGastos"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<script>
    $(document).ready(function(){
        $('#tablaGastos').load('tablagastos.php');
    });
</script>