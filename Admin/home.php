
<div class="container">
	<div class="row">  
		<div class="col-md-8">	
			 <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Berita Berhasil di Upload
                    </div>
            <?php

            }

            ?>
			<form enctype="multipart/form-data" action="proses-input-artikel.php" method="post">
				<div class="form-group">
					<h3>Input Artikel</h3>
					<label for="judul_artikel">Judul Artikel:</label>
					<input type="text" class="form-control" name="judul_artikel" placeholder="Isikan judul artikel">
				</div>
				<div class="form-group">
					<label for="isi_artikel">Isi Artikel</label>
					<textarea name="isi_artikel" id="editor" class="form-control ckeditor"><p>Isi Artikel:</p></textarea>
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

<?php include "tampil-artikel.php"?>