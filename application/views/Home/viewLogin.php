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
                <div id="accordion">
                    <div class="card">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?= $partSlide ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h1 class="lead">Noticias mas destacadas</h1>
                                    </div>
                                    <div class="row">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <?= $partNews ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">        
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <?= $partExperien ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">        
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <?= $news ?>
                            </div>
                        </div>
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

