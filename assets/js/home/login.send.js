$(document).ready(function () {
    $("input[name='send']").click(function () {
        var user = $("input[name='user']").val();
        var pass = $("input[name='pass']").val();
        var send = $("input[name='send']").val();
        $.ajax({
            url: 'index.php/home/login',
            type: 'post',
            data: {user: user, pass: pass, send: send},
            dataType: 'json',
            success: function (res) {
                console.log(res)
                location.href='http://localhost/desarrollo/';
            }, error: (function (error) {
                alert('error')
            })
        });
    });
});