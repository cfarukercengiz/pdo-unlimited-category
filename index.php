<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori / Alt Kategori İşlemleri</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<?php
/************************ SQL İŞLEMLERİ *************************/
require_once "lib/db.php";
require_once "lib/functions.php";
//Dışarıdan bir değer alıyor iseniz $db->prepare(); kullanın. Ancak dışarıdan bir değer almıyor isemiz
//Yani burada da yapacağımız gibi basit bir SELECT(LİSTELEME) işlemi yapacak iseniz $db->query(); kullanabilirsiniz.
$category_list = $db->query("SELECT * from category", PDO::FETCH_OBJ)->fetchAll();
/****************************************************************/
?>
<div class="container">
    <h3 class="text-center">Kategori / Alt Kategori İşlemleri</h3>
    <div class="row">
        <div class="col-md-6 well">
            <h4 class="text-center">Kategori Ekleme</h4>
            <hr>
            <form action="lib/category_db.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label>Kategori Adı</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Varsa Üst Kategori</label>
                    <select name="parent_id" class="form-control">
                        <option selected value="0">Yok</option>
                        <?php foreach ($category_list as $category) { ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
                <button type="reset" class="btn btn-danger btn-sm">İptal</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="col-md-11 well">
                <h4 class="text-center">Kategori Hiyerarşisi</h4>
                <hr>
                <?php drawElements(buildTree($category_list)); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>