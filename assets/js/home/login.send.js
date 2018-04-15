$(document).ready(function () {
    $('.home').validate({
        rules: {
            user: {
                required: true
            },
            pass: {
                required: true
            }
        }, messages: {
            user: {
                required: '<p class="error">El campo de <b>usuario</b>, es obligatorio</p>'
            },
            pass: {
                required: '<p class="error">El campo de <b>contraseña</b> es obligatorio</p>'
            }
        }, submitHandler: function (form) { // for demo
            var send = $("input[name='send']").val();
            var string = '{';
            $("input[type='text']").each(function (key, val) {
                string += '"' + $(val).attr('name') + '": "' + $(val).val() + '",';
            });
            string += '"send":"' + send + '"}';
            string = JSON.parse(string);
            console.log(string);
            sendData(string);
        }
    });
    $("input[name='send']").click(function () {
        $(".home").submit();
    });
});


function sendData(array) {
    $.ajax({
        url: 'index.php/home/login',
        type: 'post',
        data: array,
        dataType: 'json',
        success: function (res) {
            console.log(res)
            if (res.valido)
                location.href = 'index.php/' + res.uri + '/';
        }, error: (function (error) {
            console.log(error)
            alert('error');
        })
    });
}

/*
 * var send = $("input[name='send']").val();
 var string = '{';        
 $("input[type='text']").each(function (key, val) {
 string += '"' + $(val).attr('name') + '": "' + $(val).val() + '",';
 });
 string += '"send":"' + send + '"}';
 string = JSON.parse(string);
 sendData(string);
 */