<?php
    require_once "modells/bd.php";
    $conexion = new conexion();
    // Consultas SQL
    $query_id = "SELECT MAX(id_producto) AS id FROM productos;";
    $query_categorias = "SELECT * FROM categorias;";

    // Preparación de las consultas SQL
    $sentencia_id = $conexion->conexion_db->prepare($query_id);
    $sentencia_categorias = $conexion->conexion_db->prepare($query_categorias);

    // Ejecución de las consultas SQL
    $sentencia_id->execute();
    $sentencia_categorias->execute();

    $data_id = $sentencia_id->fetchAll(PDO::FETCH_ASSOC);
    $data_categoria = $sentencia_categorias->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Modal para cuenta de usuarios -->
<div class="modal fade" id="modal_producto" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="head" class="modal-header">
                <h2 class="modal-title text-white titulo" id="staticBackdropLabel"></h2>
            </div>
            <div class="modal-body">
                <!-- contenido del modal -->
                <form id="datos_producto">
                    <!-- Campo que muestra el id asignado al producto -->
                    <div class="form-group">
                        <label class="form-label">Id asignado:</label>
                        <div class="form-row form-inline">
                            <input type="text" id="id_producto" class="form-control col-md-3 mr-sm-3 text-center" value="<?php //echo $data_id[0]['id']; ?>" disabled="true">
                            <small class="text-muted">Id asignado para el nuevo registro ..</small>
                        </div>
                    </div>


                    <!-- Campo para el nombre del artículo -->
                    <div class="form-group mt-4">
                        <label class="form-label">Nombre del producto <span class="red">*</span></label>
                        <input type="text" id="nombre_producto" class="form-control">
                    </div>

                    <!-- Campo para la descripción del producto -->
                    <div class="form-group mt-4">
                        <label class="form-label">Descripción del producto <span class="red">*</span></label>
                        <input type="text" id="descripcion_producto" class="form-control">
                    </div>

                    <!-- Campo para la categoría del producto -->
                    <div class="form-group mt-4">
                        <label class="form-label">Categoría del producto <span class="red">*</span></label>
                        <select id="categoria_producto" class="form-control">
                            <!-- agregar valores mediante consulta a bbdd -->
                            <option disabled selected>Asignar categoría</option>
                        <?php foreach ($data_categoria as $categoria) { ?>
                            <option value="<?php echo $categoria['id_categoria']; ?>"><?php echo $categoria['descripcion_categoria']; ?></option> 
                        <?php } 
                        $conexion = null;
                        ?>
                        </select>
                    </div>

                    <!-- Botones para cerrar modal y registrar producto -->
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="btn_registrar" class="btn btn-primary">Agregar artículo</button>
                    </div>

                    <!-- campos que solo alvergan información para el envio de datos -->
                    <input type="hidden" id="id_actual">
                    <input type="hidden" id="accion_modal">
                    <input type="hidden" id="ultimo_id" value="<?php echo $data_id[0]['id']; ?>">

                </form>
            </div>
        </div>
    </div>
</div>

