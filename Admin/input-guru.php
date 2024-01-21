<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>  
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form enctype="multipart/form-data" action="proses-input-guru.php" method="POST">
                    <div class="form-group">
                        <label for="nuptk">NIPTK</label>
                        <input type="text" name="nuptk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bidang_studi">Bidang Studi</label>
                        <input type="text" name="bidang_studi" class="form-control"></input>
                    </div>                    
                    
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']?>" class="form-control">
                        <input type="file" name="foto" accept=".png, .jpg, .jpeg," value="<?php echo $row['foto']?>" class="form-control" class="form-control">
                    </div>
                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
            <br>
            <div class="col-md-4">
                <img src="img/default.png" width="150px" height="150px">
            </div>
        </div>
    </div>
<?php include "footer.php";?>