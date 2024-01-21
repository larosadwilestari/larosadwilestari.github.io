<!--untuk mengamankan admin-->
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:login.php");
  }
?>
<!--untuk mengamankan admin-->

<?php include "header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">	
			  	<div class="carousel slide" id="contoh-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#" data-slide-to="0" class="active"></li>
						<li data-target="#" data-slide-to="1"></li>
						<li data-target="#" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active" align="center">
							<img src="IMG-20230730-WA0016.jpg" alt="Keterangan Gambar satu">
						</div>
						<div class="item" align="center">
							<img src="WhatsApp Image 2023-07-30 at 12.26.38.jpg" alt="Keterangan Gambar dua">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item" align="center" >
							<img src="IMG-20230730-WA0019.jpg" alt="Keterangan Gambar tiga">
							<div class="carousel-caption"></div>
						</div>
					</div>
					<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Prev</span>
					</a>
					<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div style="text-align:center;" >
			<h2><p>		Website SMKS 1 Yapim Simpang Kawat di bangun berdasarkan kreativitas alumni</p></h2>
			<br>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
		     	<br>
		     	<img src="kepala sekolah.jpg" width="180px">
		     	<br><i>Drs. Parulian Manik, M.Si</i>
		     	<br><i>Kepala Sekolah SMKS 1 Yapim Simpang Kawat</i>
	      	</div>
	      	<div class="col-md-6">
			   	<div style="text-align:justify;">
			   		<h3><b>PENDAFTARAN ONLINE</b></h3>
		           	<p>Untuk para pendaftar yang membutuhkan panduan secara urut langkah pendaftaran online SMK adalah sebagai berikut :
			           	<br>
			           	<br>1. Klik Tombol Daftar di samping			           <br>2. Kemudian Isikan Nama
			           	<br>3. Isi Jurusan yang kamu pilih
			           	<br>4. selanjutnya Isi no Ujian/ No SKHU
			           	<br>5. Lalu isikan asal sekolah 
			           	<br>6. Kemudian Isi Tahun Lulus
			           	<br>7. Jangan lupa Klik Simpan.
			           	<br>8. Kemudian Klik Keluar untuk menutup form pendaftaran
		           	</p>
		           	<h3><b>PENDAFTARAN OFFLINE</b></h3>
				    <p>Orang tua Siswa dapat mengunjungi alamat yang tertera di halaman paling bawah.
				    Ada pun berkas yang perlu di persiapkan sebagai berikut:
				    </p>
				    1. Membawa fotocopy Ijasah Jika ijazah belum keluar bisa membawa SKHU
				    <br>2. Membawa fotocopy Kartu Keluarga
				    <br>3. Membawa fotocopy Akte Kelahiran
				    <br>4. Membawa KTP orang tua
				    <br>5. Membawa Pas foto 3x4 2 lembar latar belakang biru
				    <br>
				    <br>
		    	</div>
		    </div> 
		    <div class="col-md-4">
		        <div class="jumbotron">
		     		<div style="font-family: Times New Roman ;">
		      			<div style="text-align:justify">
		           			<h2><b>Yuk Daftar Disini</b></h2>
				            <img src="download.jpeg">
				            <br><br>
				           	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">DAFTAR
							</button>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">ISI PENDAFTARAN</h4>	
										</div>
										<div class="modal-body">
											<form action="proses-input-pendaftaran.php" method="post">
												<div class="form-group">
													<label for="nama">Nama</label>
													<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
												</div>
												<div class="form-group">
													<label for="jurusan">JURUSAN</label>
													<input type="text" class="form-control" name="jurusan" placeholder="Isikan jurusan yang dipilih">
												</div>
												<div class="form-group">
													<label for="no_ijazah">No Ijazah</label>
													<input type="text" class="form-control" name="No_ijazah" placeholder="Isi No Ijazah">
												</div>
												<div class="form-group">
													<label for="asal_sekolah">Asal Sekolah</label>
													<input type="text" class="form-control" name="asal_sekolah" placeholder="Isikan Asal Sekolah">
												</div>
												<div class="form-group">
													<label for="tahun_lulus">Tahun Lulus</label>
													<textarea name="tahun_lulus"class="form-control" placeholder="Isikan Tahun Lulus"></textarea>
												</div>
												<button type="submit" class="btn btn-info">Simpan</button>
												<button type="reset" class="btn btn-info">Batal</button>
											</form>
										</div>	
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php"; ?>