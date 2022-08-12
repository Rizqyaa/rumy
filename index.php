<?php
 $db = new PDO("mysql:host=localhost;dbname=kulacino",'root','');
 $query = $db->query('select * from murid');

?>
 <button>
    <a href="tambah.php">Insert</a>
 </button>
 <?php
 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>" style="color:#002B5B ;">
            <?= $data['nama'] ?>
        </a>
        
        <button>
        <a href="proseshapus.php?id=<?= $data['id']; ?>" style="color:black;padding:2px;border-radius:3px">
            Delete
        </a>
        </button>
    </p>
<?php endwhile ?>