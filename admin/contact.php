<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Booking</h1>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Nomor Paspor</th>
            <th>Nomor KTP</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tempat/Tanggal Lahir</th>
            <th>Tourguide</th>
            <th>Nomor HP/WA</th>
            <th>Alamat Email</th>
            <th>Pesan</th>
            <th></th>
        </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from komentar");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                            <td><?php echo $row['nama_lengkap']?></td>
                            <td><?php echo $row['nomor_paspor']?></td>
                            <td><?php echo $row['nomor_ktp']?></td>
                            <td><?php echo $row['jenis_kelamin']?></td>
                            <td><?php echo $row['alamat']?></td>
                            <td><?php echo $row['tempat_tanggal_lahir']?></td>
                            <td><?php echo $row['tourguide']?></td>
                            <td><?php echo $row['nomor_hp_wa']?></td>
                            <td><?php echo $row['alamat_email']?></td>
                            <td><?php echo $row['pesan']?></td>
                <td>
                <a href="hapus-contact.php?id=<?php echo $row['komentar_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>
                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>