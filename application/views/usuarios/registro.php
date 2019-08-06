<div class="container contenedorLogin">
    <div class="row">
        <div class="col-xs-12 col-sm-12 offset-md-2 col-md-8 offset-lg-2 col-lg-8">
            <div class="card mb-3 shadow mb-5 rounded">
            <div class="card-header">
                <h3 class="text-center">Registro</h3>
            </div>
                <form action="" id="formRegistro">
                    <div class="card-body text-dark text-center">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <img src="<?= base_url('assets/img/imgRegistro.png');?>" alt="" class="img-fluid" id="imgRegistro">
                        </div>                    
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="usuario" placeholder="Nombre" class="form-control formEspacios formLogin" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="apellido_paterno" placeholder="Apellido paterno" class="form-control formEspacios formLogin" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="apellido_materno" placeholder="Apellido materno" class="form-control formEspacios formLogin" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="username" id="" placeholder="Username" class="form-control formEspacios formogin" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="correo" id="" placeholder="Correo electronico" class="form-control formEspacios formogin" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="password" name="password" id="" placeholder="Contraseña" class="form-control formEspacios formogin" required>
                        </div>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmacion" id="" placeholder="Repetir contraseña" class="form-control formEspacios formogin" required>
                        </div>
                    </div>
                        <div class="invalid-feedback" id="usuarioExiste"></div><br>
                        <input type="submit" class="btn btn-primary btn-lg formEspacios formEspacioDos" value="Registrarse">
                    </div>
                </form>       
            </div>
        </div>
    </div>
</div>