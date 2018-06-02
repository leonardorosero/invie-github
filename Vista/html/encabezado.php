 <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                            <div class="nav-link" ><?php 

                    if (isset($_SESSION['usuario'])) {
                    ?>

                        <p><?php echo $_SESSION['usuario']; ?></p>

                    <?php    
                    }else{  
                    ?>    

                        <p></p>

                    <?php
                    }

                ?></div>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav ">
                <?php 

                    if (isset($_SESSION['usuario'])) {

                        $user = $_SESSION['usuario'];

                    ?>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#frmEditarUsuario" onclick="EditarUsuario('<?php echo $user; ?>');"><i class="fa fa-pencil"></i> <span class="clearfix d-none d-sm-inline-block">Editar Perfil</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="index.php?accion=logout"><i class="fa fa-sign-out"></i> <span class="clearfix d-none d-sm-inline-block">Salir</span></a>
                        </li>  

                    <?php
                    }else{
                    ?>    

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#frmRegistrarCliente"><i class="fa fa-pencil"></i> <span >Registrate</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#frmIngresarUsuario"><i class="fa fa-sign-in"></i> <span >Ingresar</span></a>
                        </li>

                    <?php
                    }

                ?>
            </ul>
                    
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>