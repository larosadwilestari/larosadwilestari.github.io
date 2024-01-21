<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['artikel_id'];
$judul_artikel=$_POST['judul_artikel'];
$isi_artikel=$_POST['isi_artikel'];


$ubah=$koneksi->query("update artikel set judul_artikel='$judul_artikel', isi_artikel='$isi_artikel' where artikel_id='$id'");


if($ubah==true){

    header("location:index.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>