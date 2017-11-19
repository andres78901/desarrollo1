$(document).ready(function () {
    $('#send').click(function () {
        var salida = $('input[name="data"]').val();
        $.ajax({
            url: 'index.php/home/calculo',
            type: 'post',
            data: {data: salida},
            dataType: 'json',
            success: function (res) {
                console.log(res);
            }, error: (function (error) {
                console.log(error);
            })
        });
    });
});