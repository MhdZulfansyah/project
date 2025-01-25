<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Contact</h2>
				 <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from komentar where komentar_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<td>Nama Lengkap</td><td>:</td><td><?php echo $row['nama_lengkap']?></td>
						</tr>
						<tr>
							<td>Nomor Paspor</td><td>:</td><td><?php echo $row['nomor_paspor']?></td>
						</tr>
						<tr>
							<td>Nomor KTP</td><td>:</td><td><?php echo $row['nomor_ktp']?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td><td>:</td><td><?php echo $row['jenis_kelamin']?></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><?php echo $row['alamat']?></td>
						</tr>
						<tr>
							<td>Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $row['tempat_tanggal_lahir']?></td>
						</tr>
						<tr>
							<td>Tourguide</td><td>:</td><td><?php echo $row['tourguide']?></td>
						</tr>
						<tr>
							<td>Nomor HP/WA</td><td>:</td><td><?php echo $row['nomor_hp_wa']?></td>
						</tr>
						<tr>
							<td>Alamat Email</td><td>:</td><td><?php echo $row['alamat_email']?></td>
						</tr>
						<tr>
							<td>Pesan</td><td>:</td><td><?php echo $row['pesan']?></td>
						</tr>
					    </thead>

					</table><a href="contact.php"> kembali 
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>