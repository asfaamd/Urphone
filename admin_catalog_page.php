<?php
include("be_connect.php");
$DB = new Database();
$id = $_GET['product'];
$query = "SELECT * FROM product where Product_ID=$id";
$result = $DB->read($query)[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UrPhone</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-info text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index_admin.php"><span style="color: Orange">Ur</span><span style="color: SlateBlue">Phone</span></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_input_article.php">Article Input</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_articles.php">Article</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_input_gadget.php">Catalog Input</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_gadget_catalog.php">Gadget Catalog</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br></br>
        <br></br>
        <br></br>

        <div class="container">
            <div class="text-center">
                <h2 class="text-center text-secondary"> <?php echo $result['ProductTitle']; ?> </h2>
                </br>
            </div>
            <div class="text-center">
                <img src="assets/img/<?php echo $result['ProductPicture']; ?>" class="img-fluid" alt="Responsive image" style="height:300px">
            </div>
        </div>
        <br></br>

        <!--product-->
        <div class="container">
            <div class="card border-secondary bg-secondary">
                <div class="card-body">
                    <h2 class="text-white">Spesifications</h2>
                    </br>
                    <!--product network-->
                    <div class="row">
                        <div class="col text-info">
                            Network
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductNetwork']; ?>
                        </div>
                    </div>
                    </br>
                    <!--product launch-->
                    <div class="row">
                        <div class="col text-info">
                            Launch
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductLaunch']; ?>
                        </div>
                    </div>
                    </br>
                    <!--product body-->
                    <div class="row">
                        <div class="col text-info">
                            Body
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductBody']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Display-->
                    <div class="row">
                        <div class="col text-info">
                            Display
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductDisplay']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Platform-->
                    <div class="row">
                        <div class="col text-info">
                            Platform
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductPlatform']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Memory-->
                    <div class="row">
                        <div class="col text-info">
                            Memory
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductInternalMemory']; ?> GB
                        </div>
                    </div>
                    </br>
                    <!--Camera-->
                    <div class="row">
                        <div class="col text-info">
                            Camera
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductCamera']; ?> MP
                        </div>
                    </div>
                    </br>
                    <!--Sound-->
                    <div class="row">
                        <div class="col text-info">
                            Sound
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductSound']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Comms-->
                    <div class="row">
                        <div class="col text-info">
                            Comms
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductComms']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Features-->
                    <div class="row">
                        <div class="col text-info">
                            Features
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductFeature']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Battery-->
                    <div class="row">
                        <div class="col text-info">
                            Battery
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductBattery']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Misc-->
                    <div class="row">
                        <div class="col text-info">
                            Misc
                        </div>
                        <div class="col text-white">
                            <?php echo $result['ProductMisc']; ?>
                        </div>
                    </div>
                    </br>
                </div>   
            </div>
        </div>

        <br></br>
        <!--where to buy?-->
        <div class="container">
            <h2 class=text-secondary>Where to buy?</h2>
            </br>
            <div class="row">
                <div class="col">
                    <div class="card bg-secondary text-light" style="width: 254px;">
                        <img src="assets/img/<?php echo $result['ProductPicture']; ?>" class="card-img-top" alt="Responsive image" style="width:250px">
                        <div class="card-body">
                            <h5 class="card-text"> <?php echo $result['WhereToBuy']; ?> </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br></br>
        
        <!--User reviews-->      
        <br></br>
        <br></br>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="teuxt-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Telkom University, Bandung
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About UrPhone</h4>
                        <p class="lead mb-0">
                            Urphone will help you to find your desired gadgets!
                    
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

        