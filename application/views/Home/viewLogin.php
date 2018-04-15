<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= ucwords(_('dev')) ?></title>
        <?= $this->resources->css() ?>
        <?= $this->resources->js() ?>
    </head>
    <body>
        <form method="post" action="" class="home">
            <div class="container">
                <!--header-->
                <div class="row">
                    <div class="col-12">
                        <?= $partMenu ?>
                    </div>
                </div>
                <!--Body-->
                <div class="row">
                    <div class="col-md-12">
                        <?= $partSlide ?>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalLogiN" tabindex="-1" role="dialog" aria-labelledby="modalLoguin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLoguin"><?= $titleModal ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <?= $partLogin ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--liveChat-->
            <div id='tawk_5ad111b7d7591465c7097d8b'></div>
        </form>
    </body>
</html>

