<?php
    session_start();
    
    include("be_connect.php");
    include("be_admin_catalog.php");

    $producttitle = "";
    $price = "";
    $network = "";
    $launch = "";
    $body = "";
    $display = "";
    $platform = "";
    $internalmemory = "";
    $camera = "";
    $sound = "";
    $comms = "";
    $feature = "";
    $battery = "";
    $misc = "";
    $ram = "";
    $externalmemory = "";
    $os = "";
    $gpu = "";
    $whatgadget = "";
    $whatoccupation = "";
    $whatfor = "";
    $wheretobuy = "";
    $brand = "";
    $picture = "";
    $query = "";
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producttitle = $_POST['producttitle'];
        $price = $_POST['price'];
        $network = $_POST['network'];
        $launch = $_POST['launch'];
        $body = $_POST['body'];
        $display = $_POST['display'];
        $platform = $_POST['platform'];
        $internalmemory = $_POST['internalmemory'];
        $camera = $_POST['camera'];
        $sound = $_POST['sound'];
        $comms = $_POST['comms'];
        $feature = $_POST['feature'];
        $battery = $_POST['battery'];
        $misc = $_POST['misc'];
        $ram = $_POST['ram'];
        $externalmemory = $_POST['externalmemory'];
        $os = $_POST['os'];
        $gpu = $_POST['gpu'];
        $whatgadget = $_POST['whatgadget'];
        $whatoccupation = $_POST['whatoccupation'];
        $whatfor = $_POST['whatfor'];
        $wheretobuy = $_POST['wheretobuy'];
        $brand = $_POST['brand'];
        $picture = $_POST['name'];

        if (isset($_GET)) {
            $id = $_GET['product'];
            $query = "UPDATE product SET ProductPrice=".$price.",ProductNetwork='".$network."',ProductLaunch='".$launch."',
            ProductBody='".$body."',ProductDisplay='".$display."',ProductPlatform ='".$platform."',
            ProductInternalMemory=".$internalmemory.",ProductCamera=".$camera.",ProductSound='".$sound."',
            ProductComms='".$comms."',ProductFeature='".$feature."',ProductBattery='".$battery."',
            ProductMisc='".$misc."',WhereToBuy='".$wheretobuy."',ProductRAM=".$ram.",
            ProductOS='".$os."',ProductGPU='".$gpu."',ProductTitle='".$producttitle."',
            ProductBrand='".$brand."',ProductExternalMemory='".$externalmemory."',WhatGadget='".$whatgadget."',
            WhatOccupation='".$whatoccupation."',WhatFor='".$whatfor."' WHERE Product_ID=".$id;
            $DB = new Database();
            $result = $DB->save($query);
            if ($result) {
                header("Location: admin_gadget_catalog.php", true, 301);
            } else {
                echo $query;
            }
        } else {
            $catalog_input = new Catalog_Input();
            $result = $catalog_input->evaluate($_POST);
            if($result == ""){
                header("Location: admin_gadget_catalog.php", true, 301);
                exit();
            } else{
                echo $result;
            }
        }
        
        // $title = $_POST['title'];
        // $source = $_POST['source'];
        // $content = $_POST['content'];
        // $summary = $_POST['summary'];
        // $picture = $_POST['name'];
        
    }
    
    if (isset($_GET)){
    $id = $_GET['product'];
    $DB = new Database();
    $query = "SELECT * FROM product WHERE Product_ID=$id";
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
                <a class="navbar-brand" href="index_admin.php"><span style="color: Orange">Ur</span><span style="color: SlateBlue">Phone</span></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_input_article.php">Article Input</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_articles.php">Article</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_input_gadget.php" style="color:Orange">Catalog Input</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin_gadget_catalog.php">Gadget Catalog</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br></br>
        <?php
        if (!isset($_GET['product'])) { ?>
            <form action="admin_input_gadget.php" method="post" enctype="multipart/form-data">
        <?php
        } else { ?>
            <form action="admin_input_gadget.php?product=<?php echo $_GET['product']; ?>" method="post" enctype="multipart/form-data">
        <?php }
        ?>
        
        <!--form untuk input gadget-->
            <div class="container">
                <h1 class="text-secondary">Insert gadget catalog</h1>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product title</label>
                            <input input name="producttitle" class="form-control" type="text" placeholder="Insert product title" value="<?php if (isset($result['ProductTitle'])) {
                                echo $result['ProductTitle']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product price</label>
                            <input name="price" class="form-control" type="text" placeholder="Insert product price" value="<?php if (isset($result['ProductPrice'])) {
                                echo $result['ProductPrice']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product network</label>
                            <input name="network" class="form-control" type="text" placeholder="Insert product network" value="<?php if (isset($result['ProductNetwork'])) {
                                echo $result['ProductNetwork']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product launch</label>
                            <input name="launch" class="form-control" type="text" placeholder="Insert product launch" value="<?php if (isset($result['ProductLaunch'])) {
                                echo $result['ProductLaunch']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product body</label>
                            <input name="body" class="form-control" type="text" placeholder="Insert product body" value="<?php if (isset($result['ProductBody'])) {
                                echo $result['ProductBody']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product display</label>
                            <input name="display" class="form-control" type="text" placeholder="Insert product display" value="<?php if (isset($result['ProductDisplay'])) {
                                echo $result['ProductDisplay']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product platform</label>
                            <input name= "platform" class="form-control" type="text" placeholder="Insert product platform" value="<?php if (isset($result['ProductPlatform'])) {
                                echo $result['ProductPlatform']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product Internal memory</label>
                            <input name="internalmemory" class="form-control" type="text" placeholder="Insert product internal memory" value="<?php if (isset($result['ProductInternalMemory'])) {
                                echo $result['ProductInternalMemory']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product camera</label>
                            <input name="camera" class="form-control" type="text" placeholder="Insert product camera" value="<?php if (isset($result['ProductCamera'])) {
                                echo $result['ProductCamera']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product sound</label>
                            <input name="sound" class="form-control" type="text" placeholder="Insert product sound" value="<?php if (isset($result['ProductSound'])) {
                                echo $result['ProductSound']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product comms</label>
                            <input name= "comms" class="form-control" type="text" placeholder="Insert product comms" value="<?php if (isset($result['ProductComms'])) {
                                echo $result['ProductComms']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product feature</label>
                            <input name="feature" class="form-control" type="text" placeholder="Insert product feature" value="<?php if (isset($result['ProductFeature'])) {
                                echo $result['ProductFeature']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product battery</label>
                            <input name="battery" class="form-control" type="text" placeholder="Insert product battery" value="<?php if (isset($result['ProductBattery'])) {
                                echo $result['ProductBattery']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Product misc</label>
                            <input name="misc" class="form-control" type="text" placeholder="Insert product misc" value="<?php if (isset($result['ProductMisc'])) {
                                echo $result['ProductMisc']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product RAM</label>
                            <input name="ram" class="form-control" type="text" placeholder="Insert product RAM" value="<?php if (isset($result['ProductRAM'])) {
                                echo $result['ProductRAM']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label>Product external memory</label>
                            <input name="externalmemory" class="form-control" type="text" placeholder="Insert product external memory" value="<?php if (isset($result['ProductExternalMemory'])) {
                                echo $result['ProductExternalMemory']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product OS</label>
                            <input name="os" class="form-control" type="text" placeholder="Insert product RAM" value="<?php if (isset($result['ProductOS'])) {
                                echo $result['ProductOS']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label>Product GPU</label>
                            <input name="gpu" class="form-control" type="text" placeholder="Insert product external memory" value="<?php if (isset($result['ProductGPU'])) {
                                echo $result['ProductGPU']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Product kinds</label> <!--Jenis gadgetnya apa gitu-->
                            <input name="whatgadget" class="form-control" type="text" placeholder="Insert product kinds" value="<?php if (isset($result['WhatGadget'])) {
                                echo $result['WhatGadget']; } ?>">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label>User occupation</label> <!--untuk kasih rekomen sesuai kerjaan user-->
                            <input name="whatoccupation" class="form-control" type="text" placeholder="Insert user occupation" value="<?php if (isset($result['WhatOccupation'])) {
                                echo $result['WhatOccupation']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Gadget usage</label> <!--gadgetnya dipake buat apa-->
                            <input name="whatfor" class="form-control" type="text" placeholder="Insert gadget usage" value="<?php if (isset($result['WhatFor'])) {
                                echo $result['WhatFor']; } ?>"> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                                <label>Buying links</label> 
                                <input name="wheretobuy" class="form-control" type="text" placeholder="Insert product buying links" value="<?php if (isset($result['WhereToBuy'])) {
                                echo $result['WhereToBuy']; } ?>">
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col">
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
                    <div class="col">
                        <div class="form-group">
                                <label>Product Brand</label>
                                <input name="brand" class="form-control" type="text" placeholder="Insert product buying links" value="<?php if (isset($result['ProductBrand'])) {
                                echo $result['ProductBrand']; } ?>">
                        </div>
                    </div>
                    
                </div>
                <br></br>
                <div class="text-center">
                    <?php if(isset($_GET)) { ?>
                        <input class="btn btn-primary btn-lg btn-info text-light" type="submit" name="submit" value="update">
                    <?php }else{ ?>
                        <input class="btn btn-primary btn-lg btn-info text-light" type="submit" name="submit" value="submit">
                    <?php } ?>
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
