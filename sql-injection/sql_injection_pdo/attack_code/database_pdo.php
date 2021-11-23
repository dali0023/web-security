<?php

try {
    $connect = new PDO('mysql:dbname=web_security;host=localhost', 'root', '');
} catch (PDOException $e) {
    die("Can't connect: " . $e->getMessage());
}
?>