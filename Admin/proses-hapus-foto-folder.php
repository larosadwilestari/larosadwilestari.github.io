<?php

$id=$_GET['id'];

include "../koneksi.php";

$sql=$koneksi->query("select * from user where user_id='$id'");
$row=$sql->fetch_assoc();

$fileName = $row['foto'];
if (file_exists('img/'.$fileName))
{
  unlink('img'.$fileName);
}

$hapus=$koneksi->query("delete from user where user_id='$id'"); 

if($hapus==true){

    header("location:tampil-user.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>