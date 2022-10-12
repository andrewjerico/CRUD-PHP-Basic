<?php

require 'functions.php';

if(isset($_POST["submit"])){
    if(insert($_POST) > 0){
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
    <div class="p-4 bg-dark">
    
            <div class="px-5 text-white">
                <center>
                    <h1>Tambah data mahasiswa</h1>
                </center>
            </div>
        
    </div>
    <!-- <div class="bg-dark p-5 rounded-5 text-white" style="margin: 40px; margin-left:150px;margin-right:150px;"> -->
    <div class="bg-secondary bg-opacity-70"  >
        <form action="" method="POST" enctype="multipart/form-data" class="text-white" style="padding-top:50px;padding-bottom: 70px; margin-left:150px;margin-right:150px;">

            <div class="mb-4 px-5">
                <label for="nim" class="form-label"><b>NIM :</b>  </label>
                <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukan NIM">
            </div>

            <div class="mb-4 px-5">
                <label for="nama" class="form-label"><b>Nama : </b> </label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
            </div>

            <div class="mb-4 px-5">
                <label for="email" class="form-label"><b>Email :</b>  </label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
            </div>

            <div class="mb-4 px-5">
                <label for="jurusan" class="form-label"><b>Jurusan : </b> </label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukan Jurusan">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-light ms-5">Tambah data</button>
            <a href="index.php"class="btn btn-outline-light ">Back</a>
        </form>
    </div>
    

</body>
</html>