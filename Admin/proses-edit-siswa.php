<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['siswa_id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

$foto = $_FILES['foto']['name'];
$x=explode('.', $foto);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['foto']['size'];
$jenis_gambar=$_FILES['foto']['type'];
$file_tmp= $_FILES['foto']['tmp_name'];
$fileName = date("y-m-d-g-i-s") .'.'. $ekstensi;

$telepon=$_POST['telepon'];

move_uploaded_file($file_tmp,'img/siswa/' .$fileName);


$ubah=$koneksi->query("update siswa set nisn='$nisn', nama='$nama', kelas='$kelas', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir',  alamat='$alamat', email='$email', foto='$fileName', telepon='$telepon' where siswa_id='$id'");


if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>