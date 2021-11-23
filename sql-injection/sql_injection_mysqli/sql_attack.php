<?php
include '../database.php';
if (isset($_REQUEST['submit'])) {
    // $email = mysqli_real_escape_string($connect, $_REQUEST['email']);
    // $password = mysqli_real_escape_string($connect, $_REQUEST['password']);

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $SQL = "SELECT * FROM `info` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $SQL);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Email : " . $row['email'] . "<br>";
            echo "Password : " . $row['password'] . "<br><br>";
        }
    } else {
        header("location:sql_inject_practice.php?error=Incorect Password");
    }
}
mysqli_close($connect);
?>