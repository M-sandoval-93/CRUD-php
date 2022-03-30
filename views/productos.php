<?php
if(!isset($_SESSION['usser'])) {
    header("location: ./");
}

include_once "layouts/header.php";
include_once "layouts/modal_productos.php";
?>

    <?php // include_once "layouts/modal_productos.php"; ?>


    <div class="container-fluid">
        <h1 class="mt-3">Registro de productos</h1>

       <!-- Agregar modal y id del modal a usar --> 
        <button type="button" id="btn_nuevo_producto" class="btn btn-primary mt-4 mb-4" data-toggle="modal" data-target="#modal_producto"><i class="fas fa-external-link-alt"></i> Nuevo Registro</button>
        <table id="mis_productos" class="display table tabl-hover text-nowrap" style="width: 100%">
            <thead class="text-center">
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Categoría</td>
                    <td>Cantidad</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody class="text-center"></tbody>
        </table>
    </div>

    <!-- Footer -->
<?php include_once "layouts/footer.php"; ?>

