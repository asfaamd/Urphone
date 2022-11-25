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

    $user_name = "markicob";
    $email_addr = "markicob@gmail.com";
    $passw = "markicob";

    $query = "insert into member (MemberEmail, MemberPassword, MemberName) values ('$email_addr', '$passw', '$user_name')";

    mysqli_query($conn, $query);
?>