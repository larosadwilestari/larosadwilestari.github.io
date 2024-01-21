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
        <h1>Kritik dan Saran</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Kritik dan Saran Pengunjung</th>
                <th>
                    
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from contact_us order by nama ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><b><?php echo $row['nama']?></b> 
                    (<i><?php echo $row['email']?></i>) 
                    - <?php echo $row['last_sent']?>
                    <p>"<?php echo $row['pesan']?>"</p>   
                
                </td>
                
                <td>
                <a href="hapus-contact-us.php?id=<?php echo $row['pengunjung_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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