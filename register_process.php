<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "peminjaman_ruangan";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = mysqli_real_escape_string($conn, $_POST['user']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
$no_tlp = mysqli_real_escape_string($conn, $_POST['no_tlp']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!in_array($user, ['mahasiswa', 'dosen'])) {
    echo "user tidak valid";
    exit;
}

if ($user === "mahasiswa") {
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $query = "INSERT INTO mahasiswa(nama, password, nim, jenis_kelamin, no_tlp, alamat)
              VALUES ('$nama', '$password', '$nim', '$jenis_kelamin', '$no_tlp', '$alamat')";

} else if ($user === "dosen") {
    $nip = mysqli_real_escape_string($conn, $_POST['nip']);

    $query = "INSERT INTO dosen (nama, password, nip, jenis_kelamin, no_tlp, alamat) 
              VALUES ('$nama', '$password', '$nip', '$jenis_kelamin', '$no_tlp', '$alamat')";
} 

$result = $conn->query($query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Registrasi gagal: " . $conn->error; 
}

$conn->close();
?>
