<?php include '../../../test/header.php'?>

<form action="sql_inject_pdo_attack.php" method="POST">
    <h1> SQL Injection </h1>
    <label> Email : </label>
    <input type="email" name="email" max="100" required>
    <br> <br>
    <label> Password : </label>
    <input type="password" name="password" required>
    <br> <br>
    <button type="submit" name="submit"> Signin </button>

    <br><br>
    <p>username: hasan@gmail.com</p>
    <p>pass: 50'OR'1=1</p>
</form>
</body>

</html>