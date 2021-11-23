<?php
$connect = mysqli_connect("localhost", "root", "", "web_security");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//email: hasan@gmail.com
// password: 50'OR'1=1
?>