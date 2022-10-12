<?php 
    require 'functions.php';

    $data = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"])){
        $data = search($_POST["keyword"]);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic CRUD</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <div class="p-4 bg-dark d-flex justify-content-between align-items-center">
        <div>
            <h3 class="text-white">Data Mahasiswa</h3>
        </div>
       
        <div >
            <form action="" method="POST" class="align-items-center">
                <input type="text" name="keyword" placeholder="Cari data mahasiswa" size="30px " autocomplete="off" style="padding:6px">
                <button type="submit" name="cari" class="btn btn-outline-light p-2 mb-1 ps-3 pe-3">Cari</button>
                <a href="index.php" name="refresh" class="btn btn-outline-light p-2 mb-1 ps-3 pe-3">Refresh</a>
           </form>
           
        </div>
        
        
    </div>
  
    <div id="container" class="m-3">
        
        <a href="tambah.php" class="d-grid gap-2 col-3 mt-3 btn btn-dark bg-dark text-white" >Tambah data mahasiswa</a>
        <br>

        <table border="1" cellpadding="10" cellspacing="0" class="table table-striped">

            <tr class="bg-dark">
                <th class="text-white"><center>No.</center></th>
                <th class="text-white"><center>NIM</center></th>
                <th class="text-white"><center>Nama</center></th>
                <th class="text-white"><center>Email</center></th>
                <th class="text-white"><center>Jurusan</center></th>
                <th class="text-white"><center>Aksi</center></th>
            </tr>

            <?php $i = 1; foreach($data as $row) : ?>
                <tr>
                    <td><center><?php echo $i;?></center></td>
                    <td><center><?php echo $row["nim"]; ?></center></td>
                    <td><center><?php echo $row["nama"]; ?></center></td>
                    <td><center><?php echo $row["email"]; ?></center></td>
                    <td><center><?php echo $row["jurusan"]; ?></center></td>
                    <td>
                        <center>
                            <a class="btn btn-outline-secondary" href="ubah.php?id=<?php echo $row["id"]; ?>">
                                Ubah
                            </a> 
                            |
                            <a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $row["id"]; ?>" 
                            onclick="return confirm('Yakin ingin menghapus <?php echo $row['nim']?> ?')">
                                Hapus
                            </a>
                        </center>
                    </td>
                </tr>
            <?php $i++; endforeach; ?>

        </table>
        
    </div>
</body>
</html>             