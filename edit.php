<?php

$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=kulacino", 'root', '');
$query = $db->query("select * from murid where id=$id ");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <form action="prosesedit.php" method="POST" >
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
        <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>10 RPL</option>
                <option value="2" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
                <option value="3" <?= $data['kelas'] == '3' ? 'selected' : '' ?>>12 RPL</option>
                <option value="4" <?= $data['kelas'] == '4' ? 'selected' : '' ?>>10 TKJ</option>
                <option value="5" <?= $data['kelas'] == '5' ? 'selected' : '' ?>>11 TKJ</option>
                <option value="6" <?= $data['kelas'] == '6' ? 'selected' : '' ?>>12 TKJ</option>
                <option value="7" <?= $data['kelas'] == '7' ? 'selected' : '' ?>>10 OTKP</option>
                <option value="8" <?= $data['kelas'] == '8' ? 'selected' : '' ?>>11 OTKP</option>
                <option value="9" <?= $data['kelas'] == '9' ? 'selected' : '' ?>>12 OTKP</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>