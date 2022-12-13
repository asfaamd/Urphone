<?php
    session_start();
    
    include("be_connect.php");
    include("be_admin_articles.php");

    $title = "";
    $source = "";
    $content = "";
    $summary = "";
    $picture = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $article_input = new Articles_Input();
        $result = $article_input->evaluate($_POST);

        if($result == ""){
            header("Location: admin_articles.php", true, 301);
            exit();
        } else{
            echo $result;
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $title = $_POST['title'];
        $source = $_POST['source'];
        $content = $_POST['content'];
        $summary = $_POST['summary'];
        $picture = $_POST['name'];
    }
    
    if (isset($_GET)){
    $id = $_GET['article'];
    $DB = new Database();
    $query = "SELECT * FROM article WHERE ArticleID=$id";
    $result = $DB->read($query)[0];
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
                <a class="navbar-brand" href="index_admin.php"> <span style="color: Orange">Ur</span><span style="color: SlateBlue">Phone</span></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_input_article.php" style="color:Orange">Article Input</a></li>
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

        <form action="admin_input_article.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <h1 class="text-secondary">Insert Article</h1>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Article Title</label>
                            <input name="title" class="form-control" type="text" placeholder="Insert article input" value="<?php if (isset($result['ArticleTitle'])) {
                                echo $result['ArticleTitle']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Article Source</label>
                            <input name="source" class="form-control" type="text" placeholder="Insert article source" value="<?php if (isset($result['ArticleSource'])) {
                                echo $result['ArticleSource']; } ?>">
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Article Content</label>
                        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" placeholder="Insert article" rows="3"><?php if (isset($result['ArticleContent'])) {
                                echo $result['ArticleContent']; } ?></textarea>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Article Summary</label>
                        <textarea name="summary" class="form-control" id="exampleFormControlTextarea1" placeholder="Insert summary" rows="3"><?php if (isset($result['ArticleSummary'])) {
                                echo $result['ArticleSummary']; } ?></textarea>
                    </div>
                    <p></p>
                    <?php
                     if (!isset($result['ArticlePict'])) {?>
                         <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Article Picture</label><p></p>
                            <input name="picture" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                    <?php }?>
                    
                </div>
                <div class="text-center">
                    <input type="submit" name="submit">
                    <!-- <a href="#.php" button class="btn btn-primary btn-lg btn-info text-light">Save changes</button> </a> -->
                </div>
            </div>
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
