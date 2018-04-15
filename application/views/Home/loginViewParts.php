<script src="assets/js/home/login.send.js" type="text/javascript"></script>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <label for="user"><?= ucwords(_('usuairo')) ?></label>
            <input type="text" name="user" value="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="pass"><?= ucwords(_('contraseña')) ?></label>
            <input type="text" name="pass" value="" class="form-control" id="pass">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-12">
            <input type="button" name="send" value="Enviar" class="btn btn-sm btn-primary">
            <input type="reset" name="clear" value="Limpiar" class="btn btn-sm btn-warning">
        </div>
    </div>
</div>