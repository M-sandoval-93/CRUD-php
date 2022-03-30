$(document).ready(function() {
    funcion = "mostrar_productos";
    let tabla_productos = $('#mis_productos').DataTable({
        "ajax": {
            "url": "controller/info_productos.php",
            "method": "post",
            "data": { funcion: funcion }
        },
        "columns": [
            {"data": "id_producto"},
            {"data": "nombre"},
            {"data": "descripcion"},
            {"data": "descripcion_categoria"},
            {"data": "cantidad"},
            {"defaultContent": 
                `<button class="editar btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal_productos">Editar <i class="fas fa-pencil-alt"></i></button>
                <button class="eliminar btn btn-danger" type="button">Eliminar <i class="fas fa-trash-alt"></i></button>`}
        ],
        "language": spanish
    });


    // Preparar modal para agregar nuevo producto
    $("#btn_nuevo_producto").click(function () {
        $("#datos_nuevo_producto").trigger("reset");
        $("#m_accion").val("nuevo_producto");
        $(".titulo").text("Agregar nuevo producto");
        $("#head").addClass("bg-primary");
    });



}); 


let spanish = {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroReccords": "No se encontraron resultados",
    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Ultimo",
        "sNext": "Siguiente",
        "sPrevious": "Anterior" 
    },
    "sProcessing": "Procesando..."
}
