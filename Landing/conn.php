<?php
    $url = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($url, $username, $password);
    $db = mysqli_select_db($conn, "book_db");

?>