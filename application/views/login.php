<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= _('Dev') ?></title>
        <?php
        echo $this->resources->css();
        echo $this->resources->js()
        ?>
    </head>
    <body>
        <form method="post" action="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="user"><?= _('usuario') ?></label>
                                    <input type="text" name="user" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pass"><?= _('contraseña') ?></label>
                                    <input type="text" name="pass" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="button" name="send" value="Enviar" class="btn btn-primary">
                                    <input type="reset" name="clear" value="Limpiar" class="btn btn-warning">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
