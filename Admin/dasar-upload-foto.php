
<?php include"../koneksi.php";


	$username= $_POST['username'];
	$foto = $_FILES['foto']['name'];
	$file_tmp= $_FILES['foto']['tmp_name'];
	move_uploaded_file($file_tmp,'img/' .$foto);
	
	$query = "INSERT INTO user SET 
	username='$username',
	foto='$foto'";
	
	

?>
	