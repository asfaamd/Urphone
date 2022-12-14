<?php
session_destroy();
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
                <a class="navbar-brand" href="#page-top"><span style="color: Orange">Ur</span><span style="color: SlateBlue">Phone</span></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="find_gadget.php">Find Gadget</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="articles.php">Articles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Reviews</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Wishlist</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-secondary text-white text-center">
            <div class="container d-flex align-items-center flex-column" style = "background-image:gadget.jpeg">
                
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Find your very own personalized gadget here!</h1>
                <br>
                </br>
            
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">You can find your gadget based on your need with best price here!</p>
                </br>
                </br>
                <a href = "find_gadget.php" button type="button" class="btn btn-primary btn-md btn-info text-light"> Click Here!</button> </a> 
            </div>
        </header>

        <!-- Testimoni Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Testimoni Section Heading-->
                <h2 class="page-section-heading text-secondary mb-0">Reviews</h2>
                <!--<img src="/media/images/cat.jpg" class="img-fluid">-->
                <br>
                </br>
                <h4 class="text-center"> Login to see what people say about your desired product!</h4>
                <br>
                </br>
                <div class="text-center">
                    <a href="login.php" class="btn btn-primary btn-lg btn-info text-light">Login now!</a>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <?php
            include("be_connect.php");
            $DB = new Database();
            $query = "SELECT * FROM article ORDER BY ArticleID DESC LIMIT 2";
            $result = $DB->read($query);
        ?>
        <section class="page-section bg-secondary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-white">Articles</h2>
                <br>
                </br>
                <!-- About Section Content-->
                <div class="container">
                    <?php foreach ($result as $article) { ?>
                        <div class="card border-white text-white bg-secondary mb-3" style="w-100;">
                            <div class="row g-0">
                                <div class="col-md-4" style="max-width:100%">
                                    <img src="assets/img/<?php echo $article['ArticlePict']; ?>" class="img-fluid rounded-start" alt="Ini gambar">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $article['ArticleTitle']; ?></h5>
                                        <p class="card-text"><?php echo $article['ArticleSummary']; ?></p>
                                        <p class="card-text text-muted"><?php echo $article['ArticleSource']; ?></p>
                                        <a href="article_page.php?article=<?php echo $article['ArticleID']; ?>" class="btn btn-primary btn-info text-light">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <div>

                <br>
                </br>
                <div class="text-center">
                    <a href="articles.php" class="btn btn-primary btn-info text-light">Click for more articles</a>
                </div>
            </div>
        </section>

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
