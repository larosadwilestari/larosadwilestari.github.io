<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

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
$file_tmp= $_FILES['foto']['tmp_name'];

$telepon=$_POST['telepon'];


include "../koneksi.php";

if ($ukuran<=10000000){
    if($fileName !=''){
        if ($jenis_gambar=="image/jpeg"||
            $jenis_gambar=="image/jpg"||
            $jenis_gambar=="image/png"){move_uploaded_file($file_tmp,'img/siswa/' .$fileName);

            $simpan=$koneksi->query("insert into siswa(nisn,nama, kelas, jurusan, jenis_kelamin,tanggal_lahir, alamat,email,foto,telepon) 
                                    values ('$nisn', '$nama','$kelas','$jurusan','$jenis_kelamin','$tanggal_lahir', '$alamat', '$email', '$fileName', '$telepon')");
            if($simpan==true){
                header("location:tampil-siswa.php?pesan=inputBerhasil");
            } else{
                echo "Error";
              }
            } else {
            echo"<script>alret('format file tidak diizinkan');location.href='input-siswa.php';</script>";
        }
    }
    else {
        echo"<script>alret('Error, pilih file');location.href='input-siswa.php';</script>";
    }
}   
else {
    echo"<script>alret('Error, ukuran file terlalu besar');.location.href='input-siswa.php';</script>";
}

 


?>