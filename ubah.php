<?php 
require 'functions.php';

//ambil data dari url
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// hasilny array 2 dimensi
// var_dump($mhs["nama"]);

if(isset($_POST["submit"])){
    if(ubah($_POST)>0){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <div class="p-4 bg-dark ">
        <div class="px-5 text-white">
            <center>
                <h1>Ubah data mahasiswa</h1>
            </center>
        </div>
    </div>
    <div class="bg-secondary text-white bg-opacity-70">
        <form action="" method="POST" enctype="multipart/form-data" style="padding-top:50px;padding-bottom: 68px; margin-left:150px;margin-right:150px;">
            <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
            <div class="mb-4 px-5">
                <label for="nim" class="form-label"><b>NIM :</b>  </label>
                <input type="text" name="nim" id="nim" value="<?php echo $mhs["nim"]; ?>" class="form-control">
            </div>
            <div class="mb-4 px-5">
                <label for="nama" class="form-label"><b>Nama :</b>  </label>
                <input type="text" name="nama" id="nama" value="<?php echo $mhs["nama"]; ?>" class="form-control">
            </div>
            <div class="mb-4 px-5">
                <label for="email" class="form-label"><b>Email :</b>  </label>
                <input type="text" name="email" id="email" value="<?php echo $mhs["email"]; ?>" class="form-control">
            </div>
            <div class="mb-4 px-5">
                <label for="jurusan" class="form-label"><b>Jurusan :</b>  </label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mhs["jurusan"]; ?>" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-light ms-5">Ubah data</button>
            <a href="index.php"class="btn btn-outline-light ">Back</a>
        </form>
    </div>
    
    
</body>
</html>