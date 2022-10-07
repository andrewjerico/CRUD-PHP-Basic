<?php 
    require 'functions.php';

    $mahasiswa = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <div class="ms-5">
        <h1>Data Mahasiswa</h1>
        <a href="tambah.php">Tambah data mahasiswa</a>
        <br><br>
        <form action="" method="POST">
            <input type="text" name="keyword" placeholder="cari" size="30px" autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>
    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;
            foreach($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row["nim"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["jurusan"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
            <?php $i++;
                } ?>
        </table>
    </div>
</body>
</html>