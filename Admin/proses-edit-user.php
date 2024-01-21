 <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['user_id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$new_password=md5($_POST['password']);

$foto = $_FILES['foto']['name'];
$x=explode('.', $foto);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['foto']['size'];
$jenis_gambar=$_FILES['foto']['type'];
$file_tmp= $_FILES['foto']['tmp_name'];
$fileName = date("y-m-d-g-i-s") .'.'. $ekstensi;



$sql=$koneksi->query("select * from user where user_id='$id'");
$row=$sql->fetch_assoc();

    move_uploaded_file($file_tmp,'img/' .$fileName);


if($row['password']==$password){ 
  $ubah=$koneksi->query("update user set username='$username', email='$email', foto='$fileName' where user_id='$id'");
} else{  
    $ubah=$koneksi->query("update user set username='$username', email='$email', password='$new_password' where user_id='$id'");
}

if($ubah==true){
    header("location:tampil-user.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>