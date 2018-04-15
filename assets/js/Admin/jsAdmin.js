$(document).ready(function () {
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