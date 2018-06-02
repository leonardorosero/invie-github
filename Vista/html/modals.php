<!-- ...................................MODAL REGISTRAR USUARIO.............................................-->

<div class="modal fade" id="frmRegistrarCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title"><i class="fa fa-pencil"></i> Registro</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="md-form form-sm">
                        <i class="fa fa-id-card-o prefix"></i>
                        <input type="text" id="USU_DOCUMENTO" class="form-control">
                        <label for="USU_DOCUMENTO">Documento</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="password" id="USU_CLAVE" class="form-control">
                        <label for="USU_CLAVE">Clave</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="text" id="USU_NOMBRES" class="form-control">
                        <label for="USU_NOMBRES">Nombres</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="text" id="USU_APELLIDOS" class="form-control">
                        <label for="USU_APELLIDOS">Apellidos</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="text" id="USU_DIRECCION" class="form-control">
                        <label for="USU_DIRECCION">Direccion</label>
                    </div>                    

                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="text" id="USU_TELEFONO" class="form-control">
                        <label for="USU_TELEFONO">Telefono</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="text" id="USU_CELULAR" class="form-control">
                        <label for="USU_CELULAR">Celular</label>
                    </div>
                    <div class="md-form form-sm">
                        <i class="fa fa-list prefix"></i>
                        <input type="email" id="USU_CORREO" class="form-control">
                        <label for="USU_CORREO">Correo</label>
                    </div>
                    <div class="text-center mt-1-half">
                        <button class="btn btn-info mb-2" id="RegistrarUsuario">Registrar <i class="fa fa-send ml-1"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

<!-- ..........................................MODAL LOGIN..............................................-->

<div class="modal fade" id="frmIngresarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title"><i class="fa fa-user-o"></i> Ingresar</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    
                    <form method="POST" action="index.php?accion=login">    

                        <div class="md-form form-sm">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="usuario" name="usuario" class="form-control">
                            <label for="usuario">Usuario</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="password" name="password" class="form-control">
                            <label for="password">Contraseña</label>
                        </div>
                        <?php
                            $partes_ruta = pathinfo($_SERVER["REQUEST_URI"]); 
                            $partes_ruta['basename'];
                        ?>
                        <input type="hidden" name="url" class="form-control" value="<?php echo $partes_ruta['basename']; ?>">
        
                        <div class="text-center mt-1-half">
                            <button type="submit" class="btn btn-info mb-2">Ingresar <i class="fa fa-send ml-1"></i></button>
                        </div>

                    </form>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
