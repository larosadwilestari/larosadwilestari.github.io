
<?php

$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$no_ijazah=$_POST['no_ijazah'];


include "koneksi.php";

$simpan=$koneksi->query("insert into calon_siswa(nama,jurusan,no_ijazah) 
                        values ('$nama', '$jurusan', '$no_ijazah')");

if($simpan==true){

    header("location:input-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>