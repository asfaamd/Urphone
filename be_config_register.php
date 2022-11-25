<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "urphone";

    $conn = new mysqli($host, $username, $password, $db);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    } else{
        echo "connected successfully";
    }

    $user_name = "udin";
    $email_addr = "udin@gmail.com";
    $passw = "udin";

    $query = "insert into member (MemberEmail, MemberPassword, MemberName) values ('$email_addr', '$passw', '$user_name')";
    $conn->query($query);
?>