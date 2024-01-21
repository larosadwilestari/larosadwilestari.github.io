<?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];




include "koneksi.php";

$simpan=$koneksi->query("insert into contact_us(nama,email,pesan) 
                        values ('$nama','$email','$pesan')");

if($simpan==true){

    header("location:contact-us.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>