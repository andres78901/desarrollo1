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

                    </div>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <?= $partSlide ?>
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
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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

