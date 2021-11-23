<?php include "header.php"?>
<?php
echo "XSS Attack! <br/>";

if (isset($_POST['submit'])) {
    echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

}
?>

<form action="test.php" method="POST">
    <input type="text" name="name" class="form-control">
    <input type="submit" value="submit" name="submit">
</form>




<?php include "footer.php"?>