<?php
    include("be_connect.php");
    $DB = new Database();
    $id = $_GET['article'];
    $query = "DELETE FROM article WHERE ArticleID=".$id;
    $result = $DB->save($query);
    if ($result) {
        header("Location:admin_articles.php");
    } else {
        echo $result;
    }
?>