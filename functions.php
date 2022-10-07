<?php 
    // connect to database
    $con = mysqli_connect("localhost","root","","kampus");
    
    function query($query){
        global $con;
        $result = mysqli_query($con,$query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        //upload gambar

        global $con;

        $query = "INSERT INTO mahasiswa VALUES 
        ('','$nim','$nama','$email','$jurusan')";

        mysqli_query($con,$query);

        return mysqli_affected_rows($con);
    }

    function hapus($id){
        global $con;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($con,$query);
        return mysqli_affected_rows($con);
    }

    function ubah($data){
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        global $con;

        $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', email = '$email', jurusan = '$jurusan' WHERE id = $id";

        mysqli_query($con,$query);

        return mysqli_affected_rows($con);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
        return query($query);
    }
?>