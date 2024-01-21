<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php


$judul_artikel=$_POST['judul_artikel'];
$isi_artikel=$_POST['isi_artikel'];



include "../koneksi.php";

$simpan=$koneksi->query("insert into artikel(judul_artikel, isi_artikel) 
                        values ('$judul_artikel', '$isi_artikel ')");

if($simpan==true){

    header("location:index.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>