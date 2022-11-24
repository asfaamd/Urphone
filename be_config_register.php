<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "urphone";

    $connection = mysqli_connect($host, $username, $password, $db);

    $user_name = "budi";
    $email_addr = "budi@gmail.com";
    $passw = "budi123";

    $query = "insert into member (MemberEmail, MemberPassword, MemberName) values ('$email_addr', '$passw', '$user_name')";

    mysqli_query($connection, $query);
    echo "sudah dimasukin lho";
?>