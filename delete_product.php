<?php
    include("be_connect.php");
    $DB = new Database();
    $id = $_GET['product'];
    $query = 'DELETE FROM wishlist WHERE Product_ID='.$id;
    $result = $DB->save($query);
    $query = "DELETE FROM product WHERE Product_ID=".$id;
    $result = $DB->save($query);
    if ($result) {
        header("Location:admin_gadget_catalog.php");
    } else {
        echo $result;
        echo $query;
    }
?>