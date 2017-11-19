<!DOCTYPE html>
<html lang="es">
    <head>
        <title><?= _('ejemplo') ?></title>
        <?php echo $this->resources->css();
        echo $this->resources->js() ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 alert-success">
                            <input type="text" name="data" value="" class="form-control">
                            <button class="btn btn-info" name="send" id="send">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>