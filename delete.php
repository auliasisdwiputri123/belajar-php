<?php

//tangkap dulu datanya

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//1. buat koneksi dengan mysqli
$con = mysqli_connect("localhost", "root", "", "fakultas");

//2. cek koneksi dengan mysqli
if (mysqli_connect_errno()) {
    echo "koneksi gagal" . mysqli_connect_error();
} else {
    echo "koneksi berhasil";
}
//buat sql query insert ke database
//buat query delete dan jalankan
$sql = "DELETE FROM mahasiswa where id='$id'";

//jalankan query 
if (mysqli_query($con, $sql)) {
    echo "data berhasi dihapus";
} else {
    echo "ada error" . mysqli_error($con);
}

//5. tutup koneksi mysql
mysqli_close($con);

}
?>