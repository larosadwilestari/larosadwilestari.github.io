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
                <form action="proses-edit-user.php" method="POST" enctype="multipart/form-data">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from user where user_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
                        <input type="text" name="username" value="<?php echo $row['username']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
                        <input type="file" name="foto" accept=".png, .jpg, .jpeg," value="<?php echo $row['foto']?>" class="form-control">
                    </div>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
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
                    echo "<img src='img/$row[foto]' 
                    width='150px'
                    height='150px'>";
                }                
                ?>
            </div>
        </div>
    </div>
    <br>

<?php include "footer.php";?>