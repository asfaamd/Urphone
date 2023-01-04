<?php
session_start();
include("be_connect.php");
$DB = new Database();

$member = $_SESSION['urphone_MemberID'];
$id_produk = $_GET['id'];

$query = "INSERT INTO wishlist(Product_ID, Member_ID) VALUES (" . $id_produk . ", " . $member . ")";
$res = $DB->save($query);

if($res) {
    header("Location: catalog_member.php?id=".$id_produk, true, 301);
} else {
    header("Location: catalog_member.php?id=".$id_produk, true, 301);
}

