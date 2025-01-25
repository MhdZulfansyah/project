<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
				<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, pesan anda sudah terkirim!
									</div>
					<?php

					}

					?>
					<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Nomor Paspor
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan jika ada" required>
								</td>
							</tr>
							<tr>
								<td>Nomor KTP
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Jenis Kelamin
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan dengan benar" required>
								</td>
							</tr>
							<tr>
								<td>Alamat 
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Tempat / Tanggal Lahir
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan dengan benar" required>
								</td>
							</tr>
							<tr>
								<td>Pilih  Tourguide 
								<input type="text" name="nama" class="form-control input-md" required>
								</td>
							</tr>
							<tr>
								<td>Nomor HP/WA
								<input type="text" name="nomor" class="form-control input-md" placeholder="Isikan dengan benar" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
								<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Get in Touch</h4>
				<a class="btn btn-danger btn-xs" href="tel:+6282185170752">+62 821 8517 0752"</a>
				<a class="btn btn-danger btn-xs" href="https://www.instagram.com/mhdzulfansyah_/"role="button">Instagram</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>