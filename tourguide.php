<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Tourguide</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NO</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Include</th>
							<th>Jasa Sewa</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from tour");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['no']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['include']?></td>
							<td><?php echo $row['jasa_sewa']?></td>
							<td><a href="detail-tourguide.php?id=<?php echo $row['tour_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-zoom-in"></button>
                </a></td>
						</tr>
						<?php } ?>
						</table>
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