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
        let ultimo_id = $("#ultimo_id").val();

        $("#datos_producto").trigger("reset");
        $("#accion_modal").val("nuevo_producto");
        $(".titulo").text("Agregar nuevo producto");
        $("#head").addClass("bg-primary");
        $("#id_producto").val(parseInt(ultimo_id) + parseInt(1));

    });

    // Acción del modal para crear y editar productos
    $("#btn_registrar").click(function (e) {
        e.preventDefault();
        
        if ($("#accion_modal").val() == "nuevo_producto") {
            // Recopilación de los datos de cada input
            let id = $("#id_producto").val();
            let nombre = $("#nombre_producto").val();
            let descripcion = $("#descripcion_producto").val();
            let categoria = $("#categoria_producto").val();
            // let funcion = "nuevo"

            // Validación básica de datos
            if (nombre.length == "" || descripcion.length == "" || categoria == null) {
                Swal.fire({
                    icon: "error",
                    title: "Todos los datos marcados son necesarios",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                let funcion = "nuevo_producto";
                $.ajax({
                    url: "controller/info_productos.php",
                    type: "post",
                    datatype: "json",
                    data: { id: id, nombre: nombre, descripcion: descripcion, categoria: categoria, funcion: funcion},
                    success: function(data) {
                        if (data == null) {
                            console.log(data);
                        } else {
                            console.log(data);
                        }
                        
                    }
                });
            }

            // console.log("nuevo producto");
            // console.log(id);
            // console.log(nombre);
            // console.log(descripcion);
            // console.log(categoria);
            console.log(categoria);
        }
        
    })



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
