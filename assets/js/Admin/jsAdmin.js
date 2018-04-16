$(document).ready(function () {
    $('.addUser').validate({
        rules: {
            nameUser: {
                required: true
            },
            lastNameUser: {
                required: true
            },
            pais: {
                required: true
            },
            departamento: {
                required: true
            },
            user: {
                required: true
            },
            pass: {
                required: true,
                minlength: 8
            },
            email: {
                required: true,
                email: true
            }
        }, messages: {
            nameUser: {
                required: '<p class="errorForm">Este campo es <b>Obligatorio</b></p>'
            },
            lastNameUser: {
                required: '<p class="errorForm">Este campo es <b>Obligatorio</b></p>'
            },
            pais: {
                required: '<p class="errorForm">Debe seleccionar un pais</b></p>'
            },
            user: {
                required: '<p class="errorForm">Debe seleccionar un pais</b></p>'
            },
            pass: {
                required: '<p class="errorForm">Debe ingresar una contraseña</b></p>',
                minlength: '<p class="errorForm">Debe tener una lungitud mayor a 8 caracteres</b></p>'
            },
            departamento: {
                required: '<p class="errorForm">Debe seleccionar un departamento</b></p>'
            },
            email: {
                required: '<p class="errorForm">Este campo es <b>Obligatorio</b></p>',
                email: '<p class="errorForm">No cumple con el formato de correo</p>'
            }
        }, submitHandler: function (form) { // for demo

        }
    });
    $("input[name='makeUser']").click(function () {
        $(".addUser").submit();
    });
    $('input[name ="closeSession"]').click(function () {
        $.ajax({
            url: '/desarrollo/index.php/Admin/desarrollo/closeSession',
            type: 'POST',
            data: {'cerrar': true},
            dataType: 'json',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            success: function (result) {
                location.href = '/desarrollo/index.php';
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});