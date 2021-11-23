<?php
include './database_pdo.php';

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $SQL = "SELECT * FROM `info` WHERE email = '$email' AND password = '$password'";
    $result = $connect->query($SQL);

    if ($result->rowCount() > 0) {
        foreach ($result as $res) {
            echo $res["email"] . "<br/>";
            echo $res["password"] . "<br/><br/>";
        }
    } else {
        header("location:sql_inject_practice.php?error=Incorect Password");
    }
}

?>