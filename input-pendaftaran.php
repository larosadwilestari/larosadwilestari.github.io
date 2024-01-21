
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                            Berhasil Input Data
                            </div>
                    <?php
                    }
                    ?>
                <form action="proses-input-pendaftaran.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Isikan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="no_ijazah">No Ijazah</label>
                        <input type="number" name="no_ijazah" class="form-control" placeholder="Isikan No Ijazah">
                    </div>

                     <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan </option>
                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                            <option value="Audio Video">Audio Video</option>
                            <option value="Teknik Permesinan">Teknik Permesinan</option>
                        </select>
                    </div>
                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>