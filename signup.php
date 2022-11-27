<?php
    include("be_connect.php");
    include("be_signup.php");
    $username = "";
    $email = "";
    $password = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $signup = new Signup();
        $result = $signup->evaluate($_POST);
        if($result == ""){
            header("Location: login.php", true, 301);
            exit();
        } else{
            echo $result;
        }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    }

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
                <a class="navbar-brand" href="index.php"><span style="color: Orange">Ur</span><span style="color: SlateBlue">Phone</span></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="find_gadget.php">Find Gadget</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#articles.php">Articles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#review.php">Reviews</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#wishlist.php">Wishlist</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
</br>

        <!-- Signup Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sign up</h2>
                <br>
                </br>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form method="post" action="" id="contactForm" >
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input  value ="<?php echo $username?>" class="form-control" type="text" name="username" placeholder="Enter your name..." required />
                                <label for="username">Username</label>
                            </div>

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input value ="<?php echo $email?>" class="form-control" type="email" name="email" placeholder="name@example.com" required />
                                <label for="email">Email address</label>
                            </div>

                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input value ="<?php echo $password?>" class="form-control" type="password" name="password" placeholder="Password" required />
                                <label for="password">Password</label>
                            </div>
                            
                            <!-- Submit Button-->
                            <div class="text-center">
                                <input class="btn btn-primary btn-xl btn-info text-light" type="submit" id="button" value="Sign up">
                            <!--<a href="index_member.php" button class="btn btn-primary btn-xl btn-info text-light">Sign up</button> </a>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
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
                            Urphone is good
                    
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
