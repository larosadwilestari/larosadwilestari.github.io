
<?php

$nama=$_POST['nama'];
$no_ijazah=$_POST['no_ijazah'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];
$asal_sekolah=$_POST['asal_sekolah'];
$tahun_lulus=$_POST['tahun_lulus'];
$alamat=$_POST['alamat'];




include "koneksi.php";

$simpan=$koneksi->query("insert into calon_siswa(nama,no_ijazah,jenis_kelamin,jurusan,asal_sekolah,tahun_lulus,alamat) 
                                    values ('$nama','$no_ijazah', '$jenis_kelamin', '$jurusan', '$asal_sekolah', '$tahun_lulus','$alamat')");

if($simpan==true){

    header("location:input-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>