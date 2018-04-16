<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?= $this->resources->css() ?>
        <?= $this->resources->js() ?>       
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?= $menu ?>
                </div>
            </div>
            <div class="row">
                <?= $body ?>
            </div>
        </div>

    </body>

</html> 