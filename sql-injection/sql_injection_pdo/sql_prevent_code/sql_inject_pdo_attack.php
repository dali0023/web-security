<?php
include './database_pdo.php';

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    // set named parameter by placeholder
    $SQL = 'SELECT * FROM info WHERE email = :email_val AND password = :pass';
    $result = $connect->prepare($SQL);
    $result->execute(array(
        'email_val' => $email,
        'pass'      => $password,
    ));
    if ($result->rowCount() > 0) {
        foreach ($result->fetchAll() as $res) {
            echo $res["email"] . "<br/>";
            echo $res["password"] . "<br/><br/>";
        }
    } else {
        header("location:sql_inject_pdo.php?error=Incorect Password");
    }
}

?>