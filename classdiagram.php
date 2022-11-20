<?php 

class User {
	private $UserID;

	public function GetRecommendation() {}
	public function InputSpec() {}
}

class Administrator {
	private $AdminID,
		$AdminEmail,
		$AdminPassword;

	public function __construct($id, $email, $pass) {
		$this->AdminID = $id;
		$this->AdminEmail = $email;
		$this->AdminPassword = $pass;
	}

	public function LoginAdmin() {}
	public function IsAdmin() {}
	public function InputArticle() {}
	public function InputProduct() {}
}

class Member {
	private $UserID,
		$UserEmail,
		$UserPassword;

	public function __construct($id, $email, $pass) {
		$this->UserID = $id;
		$this->UserEmail = $email;
		$this->UserPassword = $pass;
	}

	public function InputWishlist() {}
	public function GetReview() {}
	public function InputReview() {}	
}

class Register {
	private $UserEmail,
		$UserPassword,
		$Username;

	public function __construct($email, $pass, $uname) {
		$this->UserEmail = $email;
		$this->UserPassword = $pass;
		$this->Username = $uname;
	}

	public function CreateAccount() {}
	public function LoginMember() {}
	public function IsMember() {}
}

class Article {
	private $ArticleTitle,
		$ArticlePict,
		$ArticleContent,
		$ArticleSource,
		$ArticleSummary;

	public function __construct($title, $pict, $content, $source, $summary) {
		$this->ArticleTitle = $title;
		$this->ArticlePict = $pict;
		$this->ArticleContent = $content;
		$this->ArticleSource = $source;
		$this->ArticleSummary = $summary;
	}

	public function InputArticle() {}
	public function PrintArticle() {}
}

class FindGadget {
	private $WhatGadget,
		$WhatOccupation,
		$WhatFor,
		$HowMuch,
		$Spec;

	public function __construct($gadget, $occupation, $whatfor, $howmuch, $spec) {
		$this->WhatGadget = $gadget;
		$this->WhatOccupation = $occupation;
		$this->WhatFor = $whatfor;
		$this->HowMuch = $howmuch;
		$this->Spec = $spec;
	}

	public function FindGadget() {}
}

class Wishlist {
	private $Wishlists;

	public function AddWishlists() {}
}

class ProductCatalog {
	private $ProductPicture, $ProductTitle, $ProductBrand, 	// ini kalau mau dicoba2 ganti jadi public dulu,
		$ProductPrice, $ProductNetwork, $ProductLaunch,	// karena gw masi bingung gimana mau nyoba nya dalam kondisi private :")
		$ProductBody, $ProductDisplay, $ProductGPU,
		$ProductOS, $ProductPlatform, $ProductRAM,
		$ProductInternalMemory, $ProductExternalMemory, $ProductCamera,
		$ProductSound, $ProductComms, $ProductFeature, 
		$ProductBattery, $ProductMisc, $WhereToBuy;

	public function __construct($pict, $title, $brand, $price, $network, $launch, $body, $display, $gpu, $os, $platform, $ram, $intmemory, $extmemory, $camera,	$sound, $comms, $feature, $battery,	$misc, $wtbuy) {
		$this->ProductPicture = $pict;			$this->ProductTitle = $title;			$this->ProductBrand = $brand;
		$this->ProductPrice = $price;			$this->ProductNetwork = $network;		$this->ProductLaunch = $launch;
		$this->ProductBody = $body;			$this->ProductDisplay = $display;		$this->ProductGPU = $gpu;
		$this->ProductOS = $os;				$this->ProductPlatform = $platform;		$this->ProductRAM = $ram;
		$this->ProductInternalMemory = $intmemory;	$this->ProductExternalMemory = $extmemory;	$this->ProductCamera = $camera;
		$this->ProductSound = $sound;			$this->ProductComms = $comms;			$this->ProductFeature = $feature;
		$this->ProductBattery = $battery; 		$this->ProductMisc = $misc;			$this->WhereToBuy = $wtbuy;		
	}

	public function InputCatalog() {}
	public function PrintCatalog() {}
	public function MemberReview() {}
}

class Recommendation {
	private $Product;

	public function PrintRecommendation() {}
}

/* TESTING SESSION */

$produksatu = new ProductCatalog("product_image.png", "iPhone 14 Pro", "Apple", 
				26999000, "5G", "September 16, 2022", 
				"206 g (7.27 oz)", 6.1, "Apple GPU (5-core graphics)", 
				"iOS", "System Operation : iOS 16<br>GPU : Apple GPU (5-core graphics)", 6, 
				512, false, 48, 
				"Dolby Atmos nya XXI", "WLAN : Wi-Fi 802.11<br>Bluetooth : 5.3", "Sensors : Face ID", 
				3200, "Colors : Space Black, Sierra Blue", "di hati mu <3");

echo "$produksatu->ProductComms<br><br>";
echo $produksatu->ProductPlatform;
var_dump($produksatu);

?>
