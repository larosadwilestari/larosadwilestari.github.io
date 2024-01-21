<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?> 
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form enctype="multipart/form-data" action="proses-edit-guru.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from guru where guru_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nuptk">NUPTK</label>
                        <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']?>" class="form-control">
                        <input type="number" name="nuptk" value="<?php echo $row['nuptk']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                   <div class="form-group">
                        <label for="bidang_studi">Bidang Studi</label>
                        <input type="text" name="bidang_studi" value="<?php echo $row['bidang_studi']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" value="<?php echo $row['telepon']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']?>" class="form-control">
                        <input type="file" name="foto" accept=".png, .jpg, .jpeg," value="<?php echo $row['foto']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
            <br>
            <div class="col-md-4">
                <?php 
                    if($row['foto']==""){
                ?>
                <img src="img/default.png" width="150px" height="150px">
                <?php
                } else {
                    echo "<img src='img/guru/$row[foto]' 
                    width='150px'
                    height='150px'>";
                }                
                ?>
            </div>
        </div>
    </div>

<?php include "footer.php";?>