<?php
//session_start();

class Catalog_Input
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error = $this->error . $key . "is empty!<br>";
            }
        }

        if ($this->error == "") {
            //no error
            $this->create_catalog($data);
        } else {
            return $this->error;
        }
    }

    public function create_catalog($data){
        //include("be_connect.php");
        $producttitle = $data['producttitle'];
        $price = $data['price'];
        $network = $data['network'];
        $launch = $data['launch'];
        $body = $data['body'];
        $display = $data['display'];
        $platform = $data['platform'];
        $internalmemory = $data['internalmemory'];
        $camera = $data['camera'];
        $sound = $data['sound'];
        $comms = $data['comms'];
        $feature = $data['feature'];
        $battery = $data['battery'];
        $misc = $data['misc'];
        $wheretobuy = $data['wheretobuy'];
        $ram = $data['ram'];
        $os = $data['os'];
        $gpu = $data['gpu'];
        $brand = $data['brand'];
        $externalmemory = $data['externalmemory'];
        $whatgadget = $data['whatgadget'];
        $whatoccupation = $data['whatoccupation'];
        $whatfor = $data['whatfor'];
        //$user = $_SESSION['urphone_AdminID'];
        $DB = new Database();

        if (isset($_FILES['picture'])){
            $file = $_FILES['picture'];
            $data = file_get_contents($file['tmp_name']);
            move_uploaded_file($file['tmp_name'], 'C:\\xampp\\htdocs\\urphone\\assets\\img\\' . $file['name']);
            $name = $file['name'];
            $query = "INSERT INTO product(ProductPicture, ProductPrice, ProductNetwork, ProductLaunch, 
            ProductBody, ProductDisplay, ProductPlatform, ProductInternalMemory, 
            ProductCamera, ProductSound, ProductComms, ProductFeature, ProductBattery, ProductMisc, 
            WhereToBuy, ProductRAM, ProductOS, ProductGPU, 
            ProductTitle, ProductBrand, ProductExternalMemory, WhatGadget, WhatOccupation, WhatFor) 
            VALUES ('$name', '$price', '$network', '$launch', '$body', '$display', '$platform', 
            '$internalmemory',
            '$camera', '$sound', '$comms', '$feature', '$battery', '$misc', '$wheretobuy', $ram, 
            '$os', '$gpu', '$producttitle', '$brand', '$externalmemory', '$whatgadget', '$whatoccupation',
            '$whatfor')";
            $cek = $DB->save($query);
            echo $query;
            return $cek;
            // if ($cek) {
            //     header("Location: admin_article.php", true, 301);
            // } else {
            //     header("Location: admin_input_article.php", true, 301);
            // }
        }
    }

    
}


?>

