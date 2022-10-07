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
    <div class="m-5">
        <center><h1>Data Mahasiswa</h1></center>
    </div>
  
    <div id="container" class="m-5">
        <form action="" method="POST">
           
                <input type="text" name="keyword" placeholder="Cari" size="30px " autocomplete="off" style="padding:5px">
                <button type="submit" name="cari" class="btn btn-outline-primary ">Cari</button>
                <a href="index.php" name="refresh" class="btn btn-outline-primary">Refresh</a>
            
            
        </form>
        <a href="tambah.php" class="d-grid gap-2 col-3 mt-3 btn btn-primary" >Tambah data mahasiswa</a>
        <br>

        <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <th><center>No.</center></th>
                <th><center>NIM</center></th>
                <th><center>Nama</center></th>
                <th><center>Email</center></th>
                <th><center>Jurusan</center></th>
                <th><center>Aksi</center></th>
            </tr>
            <?php $i = 1;
            foreach($mahasiswa as $row) { ?>
                <tr>
                    <td><center><?php echo $i;?></center></td>
                    <td><center><?php echo $row["nim"]; ?></center></td>
                    <td><center><?php echo $row["nama"]; ?></center></td>
                    <td><center><?php echo $row["email"]; ?></center></td>
                    <td><center><?php echo $row["jurusan"]; ?></center></td>
                    <td>
                        <center>
                            <a class="btn btn-outline-secondary" href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                            <a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus <?php echo $row['nim']?>?')">Hapus</a>
                        </center>
                    </td>
                </tr>
            <?php $i++;
                } ?>
        </table>
        
    </div>
</body>
</html>             