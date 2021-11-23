<?php
include 'database.php';

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $SQL = 'SELECT * FROM info WHERE email = ? AND password = ?';
    $result = $connect->prepare($SQL);
    $result->bind_param('ss', $email, $password);
    $result->execute();
    $totalRows = $result->get_result();
    if ($totalRows->num_rows > 0) {
        while ($row = $totalRows->fetch_assoc()) {
            echo "Email : " . $row['email'] . "<br>";
            echo "Password : " . $row['password'] . "<br><br>";
        }
    } else {
        header("location:sql_inject_practice.php?error=Incorect Password");
    }
}
mysqli_close($connect);
?>