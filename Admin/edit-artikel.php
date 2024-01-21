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
                <form action="proses-edit-artikel.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from artikel where artikel_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                   <div class="form-group">
                    <h3>Input Artikel</h3>
                    <label for="judul_artikel">Judul Artikel:</label>
                    <input type="hidden" name="artikel_id" value="<?php echo $row['artikel_id']?>" class="form-control">
                    <input type="text" class="form-control" name="judul_artikel" value="<?php echo $row['judul_artikel']?>">
                </div>
                <div class="form-group">
                    <label for="isi_artikel">Isi Artikel</label>
                    <textarea name="isi_artikel" id="editor" 
                    value="<?php echo $row['isi_artikel']?>"> 
                    </textarea>
                    <script>
                   CKEDITOR.replace( 'editor', { 
                    removePlugins: 'easyimage',
                    removeButtons: 'PasteFromWord',

                    filebrowserUploadUrl: 'upload-foto-berita.php',
                    filebrowserUploadMethod: 'form'
                    });
                    </script>
                </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
</div>
<br>
<br>

<?php include "footer.php";?>