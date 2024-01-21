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
                <form enctype="multipart/form-data" action="proses-edit-siswa.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from siswa where siswa_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="hidden" name="siswa_id" value="<?php echo $row['siswa_id']?>" class="form-control">
                        <input type="number" name="nisn" value="<?php echo $row['nisn']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" value="<?php echo $row['kelas']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jurusan</label>
                        <select name="jurusan" value="<?php echo $row['jurusan']?>" class="form-control">
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                            <option value="Teknik Audio Video">Teknik Audio Video</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']?>" class="form-control">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" value="<?php echo $row['alamat']?>" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" value="<?php echo $row['email']?>" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" value="<?php echo $row['telepon']?>" name="telepon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="hidden" name="siswa_id" value="<?php echo $row['siswa_id']?>" class="form-control">
                        <input type="file" name="foto" accept=".png, .jpg, .jpeg," value="<?php echo $row['foto']?>" class="form-control" class="form-control">
                    </div>                                


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
            <div class="col-md-4">
                <?php 
                    if($row['foto']==""){
                ?>
                <img src="img/default.png" width="150px" height="150px">
                <?php
                } else {
                    echo "<img src='img/siswa/$row[foto]' 
                    width='150px'
                    height='150px'>";
                }                
                ?>
            </div>
        </div>
    </div>

<?php include "footer.php";?>