<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows[] = $row;
    }
    return $rows;

}

function insert($data){
    global $conn;
     //ambil data dari form
        $nim =  htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $alamat = htmlspecialchars ($data["alamat"]);
        $pasword = htmlspecialchars ($data["pasword"]);

        
    $query = "INSERT INTO mahasiswa VALUES 
    ('','$nim','$nama','$jurusan','$alamat','$pasword')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function update ($data){
        global $conn;
        //ambil data dari form
        $id = $data["id"];
        $nim =  htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $alamat = htmlspecialchars ($data["alamat"]);
        $pasword = htmlspecialchars ($data["pasword"]);

        
    $query = "UPDATE mahasiswa SET 
            nim = '$nim',
            nama = '$nama',
            jurusan = '$jurusan',
            alamat = '$alamat',
            pasword = '$pasword'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function search($keyword){
    $query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR 
            nim LIKE '%$keyword%'   
            ";

            return query($query);
}

function registrasi($data){
    global $conn;

    $username = strtolower (stripcslashes($data['username']));
    $pasword = mysqli_real_escape_string($conn, $data['pasword']);
    $pasword2 = mysqli_real_escape_string($conn, $data['pasword2']);

    //Cek konfirmasi password

    if($pasword !== $pasword2){
        echo "<script>alert('Konfirmasi password tidak sama');</script>";

        return false;
    }
    return 1;
}

?>
