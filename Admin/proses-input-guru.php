<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php


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
$file_tmp= $_FILES['foto']['tmp_name'];

$telepon=$_POST['telepon'];

include "../koneksi.php";
if ($ukuran<=10000000){
    if($fileName !=''){
        if ($jenis_gambar=="image/jpeg"||
            $jenis_gambar=="image/jpg"||
            $jenis_gambar=="image/png"){move_uploaded_file($file_tmp,'img/guru/' .$fileName);

            $simpan=$koneksi->query("insert into guru(nuptk,nama,email,alamat, bidang_studi, foto, telepon) 
                      values ('$nuptk', '$nama', '$email','$alamat','$bidang_studi', '$fileName', '$telepon')");
            if($simpan==true){

                header("location:tampil-guru.php?pesan=inputBerhasil");
            } else{
                echo "Error";
            }
             } else {
            echo"<script>alret('format file tidak diizinkan');location.href='input-guru.php';</script>";
        }
    }
    else {
        echo"<script>alret('Error, pilih file');location.href='input-guru.php';</script>";
    }
}   
else {
    echo"<script>alret('Error, ukuran file terlalu besar');.location.href='input-guru.php';</script>";
}

?>