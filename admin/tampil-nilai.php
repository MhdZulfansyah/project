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
        <h1>Nilai</h1>
           


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Matakuliah</th><th>Nilai</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
       $user= $_SESSION['user_id'];
        $sql=$koneksi->query("select * from nilai where user_id='$user'");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['matakuliah']?></td>
                <td><?php echo $row['nilai']?></td>
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