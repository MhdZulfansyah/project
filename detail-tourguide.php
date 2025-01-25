<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Tourguide</h2>
				 <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from tour where tour_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<td width="20%">NO</td><td width="5%">:</td><td><?php echo $row['no']?></td>
						</tr>
						<tr>
							<td>nama</td><td>:</td><td><?php echo $row['nama']?></td>
						</tr>
						<tr>
							<td>jenis kelamin</td><td>:</td><td><?php echo $row['jenis_kelamin']?></td>
						</tr>
						<tr>
							<td>include</td><td>:</td><td><?php echo $row['include']?></td>
						</tr>
						<tr>
							<td>jasa sewa</td><td>:</td><td><?php echo $row['jasa_sewa']?></td>
						</tr>
					    </thead>

					</table><a href="tourguide.php"> kembali 
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>EXAMPLE</h4>
				<img src="images/rere.jpg" class="img-thumbnail img-responsive">
				<p>“Langit dan laut, dan hal-hal yang tak kita bicarakan. Biar jadi rahasia menyublim ke udara, hidup dan sesalkan jiwa, jiwa.”</b> Untuk Informasi biaya dan tempat pelaksaanaan silakan klik link dibawa<br/><a class="btn btn-danger btn-xs" href="https://www.instagram.com/mhdzulfansyah_/"role="button">INFO TOURGUIDE</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>