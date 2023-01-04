<?php
    session_start();
    include("be_connect.php");
    $DB = new Database();
    $id_produk = $_GET['id'];
    $query = "SELECT * FROM product WHERE Product_ID='" . $id_produk . "'";
    $result = $DB->read($query)[0];
    $prod_title = $result['ProductTitle'];
    $query = "SELECT * FROM review WHERE Product_ID='" . $id_produk . "'";
    $hasil = $DB->read($query);
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="member_find_gadget.php">Find Gadget</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="articles_member.php">Articles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="member_review.php">Reviews</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="wishlist.php">Wishlist</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br></br>
        <br></br>
        </br>
        <div class="container">
            <a class="nav-link text-secondary" href="recommendation.php">Recommendation /<span class="text-info"> <?= $result['ProductTitle']; ?> </span></a>
        </div>
        </br>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="jam.jpg" width="250px">
                </div>
                <div class="col-md-6">
                    <h2 class="text-center text-secondary"><?= $result['ProductTitle']; ?></h2>
                    </br>
                    <div class="card border-secondary bg-secondary text-white" style="max-width: 500px;">
                        <div class="card-body">
                            </br>
                            <h4>Like this product?</h4>
                            </br>
                            <a href="wishlist_member.php?id=<?= $result['Product_ID']; ?>" button class="btn btn-primary btn-info text-white btn-lg">Add to wishlist</button> </a>
                        </div>
                    </div>
                </div>
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
                        <?= $result['ProductNetwork']; ?>
                        </div>
                    </div>
                    </br>
                    <!--product launch-->
                    <div class="row">
                        <div class="col text-info">
                            Launch
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductLaunch']; ?>
                        </div>
                    </div>
                    </br>
                    <!--product body-->
                    <div class="row">
                        <div class="col text-info">
                            Body
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductBody']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Display-->
                    <div class="row">
                        <div class="col text-info">
                            Display
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductDisplay']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Platform-->
                    <div class="row">
                        <div class="col text-info">
                            Platform
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductPlatform']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Memory-->
                    <div class="row">
                        <div class="col text-info">
                            Memory
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductInternalMemory']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Camera-->
                    <div class="row">
                        <div class="col text-info">
                            Camera
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductCamera']; ?>
                        </div>
                    </div>
                    </br>
                    <!--SOund-->
                    <div class="row">
                        <div class="col text-info">
                            Sound
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductSound']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Comms-->
                    <div class="row">
                        <div class="col text-info">
                            Comms
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductComms']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Features-->
                    <div class="row">
                        <div class="col text-info">
                            Features
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductFeature']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Battery-->
                    <div class="row">
                        <div class="col text-info">
                            Battery
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductBattery']; ?>
                        </div>
                    </div>
                    </br>
                    <!--Misc-->
                    <div class="row">
                        <div class="col text-info">
                            Misc
                        </div>
                        <div class="col text-white">
                        <?= $result['ProductMisc']; ?>
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
                        <img src="jam.jpg" class="card-img-top" style="width:250px">
                        <div class="card-body">
                            <h5 class="card-text"><?= $result['WhereToBuy']; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br></br>
        
        
        <!--User reviews-->

        <?php foreach ($hasil as $review) { ?>
            <div class="container">
            <h2 class="text-secondary">User reviews</h2>
            </br>
            <div class="card bg-secondary text-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="text-info"><?= $review['UserName'];?></h6>
                        </div>
                    </div>
                    <p><?= $review['Comment'];?></p>
                    <p><?= $review['Star'];?>/5 rating</p>
                </div>
            </div>
            </div>
        <?php }?>

        </div>

        <br></br>
        <?php
        
        ?>
        <!--User review-->
        <?php

            $comment="";
            $star = "";
        $tes = "";
            $DB = new Database();


            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $comment = $_POST['comment'];
                $star = $_POST['star'];
                $query = "SELECT * FROM member WHERE MemberID=".$_SESSION['urphone_MemberID'];
                $result = $DB->read($query)[0];
                $username = $result['MemberName'];
                $comment = $_POST['comment'];
                $star = $_POST['star'];
                $member_id = $_SESSION['urphone_MemberID'];
                $prod_id = $_GET['id'];
                
                $query = "INSERT INTO review(UserName, Comment, Star, MemberID, Product_ID, ProductTitle) VALUES ('" . $username . "', '" . $comment . "', " . $star . ", " . $member_id . ", " . $prod_id . ", '" . $prod_title ."')";
                $result = $DB->save($query);
                if($result) {
                $tes = "berhasil";
                } else {
                $tes = "gagal";
                }
            }

?>
        <form action="catalog_member.php?id=<?= $_GET['id']; ?>" method="post">
            <div class="container">
                <h2 class="text-secondary"><?= $tes ?></h2>
                </br>
                <div class="form-group">
                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </br>
                <div class="container">
                <div class="row">
                <div class="dropdown col-lg-4 me-auto">
                    <!-- <a href="#" button class="btn btn-primary btn-info text-white btn-lg text-center">Send</button> </a>
                    </div> -->
                    <div class="dropdown col-lg-4 ms-auto">
                        <!-- <button class="btn btn-info text-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Rating
                        </button> -->
                        <select name="star">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a value="1" class="dropdown-item" href="#">1</a></li>
                            <li><a value= "2" class="dropdown-item" href="#">2</a></li>
                            <li><a value= "3" class="dropdown-item" href="#">3</a></li>
                            <li><a value= "4" class="dropdown-item" href="#">4</a></li>
                            <li><a value= "5" class="dropdown-item" href="#">5</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            </div>
            <button type="submit">Send</button>
        </form>

        <br></br>
        <br></br>
        <br></br>

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