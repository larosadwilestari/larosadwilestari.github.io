<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php
 
include "../koneksi.php";

$id=$_POST['guru_id'];
$nuptk=$_POST['nuptk'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$bidang_studi=$_POST['bidang_studi'];

$foto = $_FILES['foto']['name'];
$x=explode('.', $foto);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['foto']['size'];
$jenis_gambar=$_FILES['foto']['type'];
$file_tmp= $_FILES['foto']['tmp_name'];
$fileName = date("y-m-d-g-i-s") .'.'. $ekstensi;
$telepon=$_POST['telepon'];

move_uploaded_file($file_tmp,'img/guru/' .$fileName);

$ubah=$koneksi->query("update guru set nuptk='$nuptk', nama='$nama',email='$email', alamat='$alamat', bidang_studi='$bidang_studi', foto='$fileName', telepon='$telepon' where guru_id='$id'");

if($ubah==true){

    header("location: tampil-guru.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>