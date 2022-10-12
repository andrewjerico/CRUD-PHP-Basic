<?php 

    // connect to database
    $conn = mysqli_connect("localhost", "root", "", "kampus");
    
    function query($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $data = [];

        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    function insert($request){
        global $conn;

        $nim = htmlspecialchars($request["nim"]);
        $nama = htmlspecialchars($request["nama"]);
        $email = htmlspecialchars($request["email"]);
        $jurusan = htmlspecialchars($request["jurusan"]);

        $query = "
            INSERT INTO mahasiswa VALUES 
            ('','$nim','$nama','$email','$jurusan')
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id){
        global $conn;

        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function update($request){
        global $conn;

        $id = $request["id"];
        $nim = htmlspecialchars($request["nim"]);
        $nama = htmlspecialchars($request["nama"]);
        $email = htmlspecialchars($request["email"]);
        $jurusan = htmlspecialchars($request["jurusan"]);

        $query = "
            UPDATE mahasiswa SET 
            nim = '$nim', 
            nama = '$nama', 
            email = '$email', 
            jurusan = '$jurusan' 
            WHERE id = $id
        ";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function search($keyword){
        
        $query = "
            SELECT * FROM mahasiswa 
            WHERE nama LIKE '%$keyword%' 
            OR nim LIKE '%$keyword%' 
            OR email LIKE '%$keyword%' 
            OR jurusan LIKE '%$keyword%'
        ";

        return query($query);
    }
?>