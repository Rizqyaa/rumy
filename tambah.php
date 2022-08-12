<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seza</title>
</head>
<body>
    <form method="POST" action="prosestambah.php">
    <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1">10 RPL</option>
                <option value="2">11 RPL</option>
                <option value="3">12 RPL</option>
                <option value="4">10 TKJ</option>
                <option value="5">11 TKJ</option>
                <option value="6">12 TKJ</option>
                <option value="7">10 OTKP</option>
                <option value="8">11 OTKP</option>
                <option value="9">12 OTKP</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>