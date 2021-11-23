<?php include "../header.php"?>

<form action="sql_inject_pdo_attack.php" method="POST">
    <h1> SQL Injection </h1>
    <label> Email : </label>
    <input type="email" name="email" max="100" required>
    <br> <br>
    <label> Password : </label>
    <input type="password" name="password" required>
    <br> <br>
    <button type="submit" name="submit"> Signin </button>
</form>
</body>

</html>