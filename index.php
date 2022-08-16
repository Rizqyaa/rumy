<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fufufu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <?php 
$db = new PDO("mysql:host=localhost;dbname=fumafu", 'root', '');
$query = $db->query('select * from murid');

?>
<a href="tambah.php" class="btn btn-outline-secondary mb-3 ">Insert</a>
<table class="table table-dark table-borderless container text-center">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($data = $query->fetch()):?>
    <tr>

        
        <td><?= $data['id']?></td>
        
        <td><?= $data['nama']?></td>

        <td><?= $data['kelas']?></td>
        
        <td>
        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-light"> Update </a>
        
        <a href="prodelete.php?id=<?= $data['id']; ?>" class="btn btn-danger"> Delete </a>
        </td>
    </tr>
    <?php endwhile ?>
    </tbody>
</table>
  </body>
</html>
