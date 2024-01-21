<?php
    session_start();
    if (empty($_SESSION['user_id'])){
      header("location:../login.php");
    }  
?>
<?php

$username=$_POST['username'];  
$email=$_POST['email'];
$password=md5($_POST['username']);
$token=md5($username.$password);

$foto = $_FILES['foto']['name'];
$x=explode('.', $foto);
$ekstensi = strtolower(end($x));
$ukuran=$_FILES['foto']['size'];
$jenis_gambar=$_FILES['foto']['type'];
$file_tmp= $_FILES['foto']['tmp_name'];
$fileName = date("y-m-d-g-i-s") .'.'. $ekstensi;
$status=1;

include "../koneksi.php";

if ($ukuran<=10000000){
    if($username !=''){
        if ($jenis_gambar=="image/jpeg"||
            $jenis_gambar=="image/jpg"||
            $jenis_gambar=="image/png"){move_uploaded_file($file_tmp,'img/' .$fileName);
            $simpan=$koneksi->query("insert into user(username,email,password,token,foto,status,last_login) 
                        values ('$username', '$email', '$password', '$token','$fileName','$status',now())");
            if ($simpan==true){

                header("location:tampil-user.php?pesan=inputBerhasil");
            } else{
               echo "Error";
            }
        } else {
            echo"<script>alret('format file tidak diizinkan');location.href='input-user.php';</script>";
        }
    }
    else {
        echo"<script>alret('Error, pilih file');location.href='input-user.php';</script>";
    }
}   
else {
    echo"<script>alret('Error, ukuran file terlalu besar');.location.href='input-user.php';</script>";
}

?>