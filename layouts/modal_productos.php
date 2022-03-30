<?php
    require_once "modells/bd.php";
    $conexion = new conexion();
    $query = "SELECT * FROM categorias;";
    $sentencia = $conexion->conexion_db->prepare($query);
    $sentencia->execute();
    $data = $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
                <form id="datos_nuevo_producto">
                    <!-- Campo que muestra el id asignado al producto -->
                    <div class="form-group">
                        <label class="form-label">Id asignado:</label>
                        <input type="text" id="id_nuevo_producto" class="form-control" disabled="true">
                    </div>

                    <!-- Campo para el nombre del artículo -->
                    <div class="form-group mt-3">
                        <label class="form-label">Nombre del producto <span class="red">*</span></label>
                        <input type="text" id="nombre_nuevo_producto" class="form-control">
                    </div>

                    <!-- Campo para la descripción del producto -->
                    <div class="form-group mt-3">
                        <label class="form-label">Descripción del producto <span class="red">*</span></label>
                        <input type="text" id="nombre_nuevo_producto" class="form-control">
                    </div>

                    <!-- Campo para la categoría del producto -->
                    <div class="form-group mt-3">
                        <label class="form-label">Categoría del producto <span class="red">*</span></label>
                        <select id="categoria_nuevo_producto" class="form-control">
                            <!-- agregar valores mediante consulta a bbdd -->
                            <option disabled selected>Asignar categoría</option>
                        <?php foreach ($data as $dato) { ?>
                            <option value="<?php echo $dato['id_categoria']; ?>"><?php echo $dato['descripcion_categoria']; ?></option> 
                        <?php } 
                        $conexion = null;
                        ?>
                        </select>
                    </div>

                    <!-- Botones para cerrar modal y registrar producto -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="btn_registrar" class="btn btn-primary">Agregar artículo</button>
                    </div>

                    <!-- campos que solo alvergan información para el envio de datos -->
                    <input type="hidden" id="m_id">
                    <input type="hidden" id="m_accion">

                </form>
            </div>
        </div>
    </div>
</div>

