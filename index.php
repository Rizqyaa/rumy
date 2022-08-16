<?php
 $db = new PDO("mysql:host=localhost;dbname=kulacino",'root','');
 $query = $db->query('select * from murid');

?>
 <button style="background-color:47B5FF;">
    <a href="tambah.php" style="color:white;">Insert</a>
 </button>
 <br>
 <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
<?php $i=1 ?>
 <?php
 while ($data = $query->fetch() ) :?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['kelas']?></td>
        <td>

        <button style="background-color:#839AA8;">
        <a href="edit.php?id=<?= $data['id']; ?>" style="color:white; ;">
            Update
        </a>
        </button>
        <button style="background-color:#820000;">
        <a href="proseshapus.php?id=<?= $data['id']; ?>" style="color:white;padding:2px;border-radius:3px">
            Delete
        </a>
        </button>
        </td>
    </tr>
    <?php $i++; ?>
<?php endwhile ?>
</table>