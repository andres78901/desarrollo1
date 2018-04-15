<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?= $this->resources->css() ?>
        <?= $this->resources->js() ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-fluid"><br>
            <div class="row">
                <div class="row container">
                    <div class="col-4">
                        <div class="alert-warning">
                            hola mundo
                        </div>
                    </div>                
                    <div class="col-2">
                        <div class="">
                            Usuario identificado
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alert-success badge">
                            <?= $usuario ?>
                        </div>                   
                    </div>
                    <div class="col-2">
                        <span>
                            <input type="button" name="closeSession" value="Cerrar sesion" class="btn btn-sm btn-warning">
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="chart_div"></div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages': ['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var jsonData = $.ajax({
            url: "/desarrollo/index.php/Admin/desarrollo/dashboard",
            dataType: "json",
            async: false
        }).responseText;
        console.log(jsonData);

        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable(jsonData);

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, {width: 400, height: 240});
    }

</script>