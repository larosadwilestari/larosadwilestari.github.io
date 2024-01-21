<?php include "header.php"; ?>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php 
		            if(@$_GET['pesan']=="inputBerhasil"){

		            ?>
		                    <div class="alert alert-success">
		                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>Terimakasih, Pesan Anda Sudah Terkirim ^_^
		                	</div>
		            <?php
		            }
		            ?>
					<form action="proses-input-contact-us.php" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="Isikan Nama">
						</div>
					
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" placeholder="Isikan Email">
						</div>
						<div class="form-group">
								<label for="pesan">Pesan</label>
								<textarea name="pesan"class="form-control" placeholder="Tulis Pesan"></textarea>
						</div>
						<button type="submit" class="btn btn-info">Kirim</button>
						<button type="reset" class="btn btn-info">Hapus</button>
					</form>
				</div>
			</div>
		</div>
		<br>
		<br>

		<?php include "footer.php";?>



