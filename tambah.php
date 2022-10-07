<?php 
require 'functions.php';

if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <title>Tambah data mahasiswa</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>
<body>
    <div class="px-5">
        <h1>Tambah data mahasiswa</h1>
    </div>
    

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="mb-3 px-5">
            <label for="nim" class="form-label">Nim : </label>
            <input type="text" name="nim" id="nim" class="form-control">
        </div>
        
        <div class="mb-3 px-5">
            <label for="nama" class="form-label">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        
        <div class="mb-3 px-5">
            <label for="email" class="form-label">Email : </label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        
        <div class="mb-3 px-5">
            <label for="jurusan" class="form-label">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary ms-5">Tambah data</button>
        <a href="index.php"class="btn btn-primary ">Back</a>
    </form>

</body>
</html>