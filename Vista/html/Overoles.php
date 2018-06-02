<!DOCTYPE html>
<html lang="en">

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

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-new {
            margin-top: 0;
        }

        .navbar {
            background-color: #414a5c;
        }

        footer.page-footer {
            background-color: #414a5c;
            margin-top: 2rem;
        }

        .list-group-item.active {
            background-color: #2bbbad;
            border-color: #2bbbad
        }

        .list-group-item:not(.active) {
            color: #222;
        }

        .list-group-item:not(.active):hover {
            color: #666;
        }
        .card {
            font-weight: 300;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>
</head>

<body>


    <!-- ........................................ENCABEZADO.......................................... -->


    <?php require "Vista/html/encabezado.php"; ?>
    <br>

   
    <!-- .........................................CONTENIDO............................................ -->
    
    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                    <div class="widget-wrapper">
                        <h4>Categorias:</h4>
                        <br>
                        <div class="list-group">
                            <a href="index.php?accion=Jeans" class="list-group-item">Jeans</a>
                            <a href="index.php?accion=Leggins" class="list-group-item">Leggins</a>
                            <a href="index.php?accion=Shorts" class="list-group-item">Shorts</a>
                            <a href="index.php?accion=Blusas" class="list-group-item">Blusas Para Toda Ocasión</a>
                            <a href="index.php?accion=Vestidos" class="list-group-item">Vestidos</a>
                            <a href="index.php?accion=Overoles" class="list-group-item active">Overoles</a>
                            <a href="index.php?accion=RopaInterior" class="list-group-item">Ropa Interior</a>
                        </div>
                    </div>

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h4>Subscription form:</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Subscribe to our newsletter</strong></p>
                                <p>Once a week we will send you a summary of the most useful news</p>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Your email</label>
                                </div>
                                <button class="btn btn-default">Submit</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">      
                <form class="md-form">
                <input class="form-control buscar" type="text" placeholder="Search" aria-label="Search">    

                </form>


            </div>
            <div class="col-md-2"></div>
        </div>
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-lg-12">
                            
                            <div class="divider-new">

                                <h2 class="h2-responsive">Piponas Y Algo Mas.</h2>
                            </div>

                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <img src="Vista/img/pipon.jpg" alt="First slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            
                                            <br>
                                        </div>
                                    </div>
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(109).jpg" alt="Second slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4>Get discount!</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(36).jpg" alt="Third slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4>Only now for 10$</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                    </div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">

                    <!--Second row-->
                    <div class="row">
                        <!--First columnn-->
                        
                        <div class="col-lg-4">

                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>10$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->

                        <!--Second columnn-->
                        <div class="col-lg-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.4s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>30$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--Second columnn-->

                        <!--Third columnn-->
                        <div class="col-lg-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.6s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(1).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>20$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Third columnn-->
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>


    <?php require "Vista/html/footer.php"; ?>

     <!-- .......................................MODALS................................................-->


    <?php require "Vista/html/modals.php"; ?>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="Vista/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/popper.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/mdb.min.js"></script>
    <script type="text/javascript" src="Vista/js/compiled.min.js"></script>
    <script type="text/javascript" src="Vista/js/script.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>