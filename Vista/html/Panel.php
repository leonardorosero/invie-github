<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="Vista/css/bootstrap.min.css" rel="stylesheet">
    <link href="Vista/css/mdb.min.css" rel="stylesheet">
    <link href="Vista/css/compiled.min.css" rel="stylesheet">
    <link href="Vista/css/style.css" rel="stylesheet">
</head>

<body class="fixed-sn light-blue-skin">

    <!-- Start your project here-->


    <!-- ........................................ENCABEZADO.......................................... -->


    <?php require "Vista/html/encabezado.php"; ?>
    <br>

    <!-- .........................................CONTENIDO............................................ -->
    
    
    <main>
        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-3 wow fadeIn">

                    <div class="widget-wrapper">
                        <div class="list-group">
                            <a href="index.php" class="list-group-item active">Inicio</a>
                            <a href="index.php?accion=empresa" class="list-group-item">Empresa</a>
                            <a href="index.php?accion=categoria" class="list-group-item">Categoria</a>
                            <a href="index.php?accion=producto" class="list-group-item">Producto</a>
                            <a href="#" class="list-group-item">T-shirt</a>
                            <a href="#" class="list-group-item">Jewellery</a>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-9">

                    <!--First row-->
                    <div class="row wow fadeIn">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">

                                <!--Product data-->
                                <h2 class="h2-responsive mt-4">Bienvenido: <?php echo $_SESSION['nombre']; ?></h2>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                    velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                    delectus ipsam eveniet debitis nemo.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius totam, officiis doloremque
                                    velit nobis dolor nulla unde architecto alias praesentium, soluta error omnis sint, impedit,
                                    delectus ipsam eveniet debitis nemo.</p>
                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>
    
    
    <!-- .......................................PIE DE PAGINA......................................... -->

    
    


    <!-- .......................................MODALS................................................-->


    <?php require "Vista/html/modals.php"; ?>

    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    
    <script type="text/javascript" src="Vista/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/popper.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/mdb.min.js"></script>
    <script type="text/javascript" src="Vista/js/compiled.min.js"></script>
    <script type="text/javascript" src="Vista/js/script.js"></script>

</body>

</html>