<form class="addUser">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombres</label>
            <input type="text" class="form-control" id="name" placeholder="Nombres" name="nameUser">
        </div>
        <div class="form-group col-md-6">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="lastNameUser">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
        </div>
        <div class="form-group col-md-6">
            <label for="pass">Contraseña</label>
            <input type="text" class="form-control" id="pass" placeholder="Contraseña" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo" name="email">
    </div>   

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="pais">Pais</label>
            <select class="custom-select" name="pais">
                <option value="" selected>Choose...</option>
                <option value="1">colombia</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Departamento</label>
            <select id="inputState" class="custom-select" disabled name="departamento">
                <option value="">Choose...</option>
                <option value="1">cundinamarca</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Ciudad</label>
            <select id="inputState" class="custom-select" disabled name="ciudad">
                <option >Choose...</option>
                <option>bogota</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Administrador
            </label>
        </div>
    </div>
    <input type="button" name="makeUser" value="Crear" class="btn btn-sm btn-success">
    <input type="reset" name="" value="Limpiar" class="btn btn-sm btn-warning">
</form>