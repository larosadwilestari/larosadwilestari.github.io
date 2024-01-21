<?php
if ($_FILES['upload']['error'] === UPLOAD_ERR_OK) {
  $nama=$_FILES['upload']['name'];
  $x=explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran=$_FILES['upload']['size'];
  $jenis_gambar=$_FILES['upload']['type'];
  $file_tmp= $_FILES['upload']['tmp_name'];
  $fileName = date("y-m-d-g-i-s") .'.'. $ekstensi;


  $destination='img/berita/' .$fileName;

    if (move_uploaded_file($file_tmp, $destination)) {
      $url = 'img/berita/' .$fileName;
      echo '<script type ="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'] . ' , "' . $url . '"); </script>';
    }
}else{
  echo"file upload failed with error code ".$_FILES['upload']['error'];
}
?>