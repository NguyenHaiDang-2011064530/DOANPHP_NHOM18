<?php
    $mysqli = new mysqli("localhost","root","","pet");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Kết nối thất bại: " . $mysqli -> connect_error;
    exit();
}
?>