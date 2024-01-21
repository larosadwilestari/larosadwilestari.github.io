<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>  
<?php include"header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form  enctype="multipart/form-data" action="proses-input-user.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control">
                        <input type="file" name="foto" accept=".png, .jpg, .jpeg," value="<?php echo $row['foto']?>" class="form-control" class="form-control">
                    </div>
                        <br>
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
    <br>
    
<?php include"footer.php";?>