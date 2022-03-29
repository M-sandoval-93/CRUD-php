$('#login_form').submit(function(e) {
    e.preventDefault();  

    let usuario = $.trim($('#usuario').val());
    let clave = $.trim($('#clave').val());

    if (usuario.length <= 0 || clave.length <= 0) {
        Swal.fire({
            icon : 'warning',
            title: 'Es necesario un nombre de usuario y clave de acceso',
        });
        return false;
    } else {
        $.ajax({
            url: 'controller/login.php',
            type: 'post',
            datatype: 'json',
            data: { usuario: usuario, clave: clave },
            success: function(data) {
                if (data == 'null') {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario o la clave son incorrectos, revíselos !!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: '¡ Conexión exitosa !',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(resultado => {
                        window.location.href = "home";
                    });
                }
            }
        });
    }

});
