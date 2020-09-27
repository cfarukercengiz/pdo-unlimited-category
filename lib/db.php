<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=sub_category;charset=utf8", "root", "123456");

} catch (PDOException $e) {
    echo $e->getMessage();

}