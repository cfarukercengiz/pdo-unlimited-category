<?php
require_once "db.php";

if (isset($_POST["title"]) && isset($_POST["parent_id"])) {
    //$db->query(); de yapabilirdik. Ancak Sql Injection saldırılarına maruz kalabiliriz. Bu yüzden $db->prepare(); daha mantıklı.
    $prepare = $db->prepare("INSERT INTO category SET title = :title,parent_id = :parent_id");

    $data = array(
        "title" => $_POST["title"],
        "parent_id" => $_POST["parent_id"]
    );

    $insert = $prepare->execute($data);

    if ($insert) {
        header("location:../index.php");
    } else {
        echo "Ekleme sırasında bir problem oluştu!";
    }

} else {
    echo "Aradığınız sayfa bulunamadı!!";
}

