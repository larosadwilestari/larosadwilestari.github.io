<!--untuk mengamankan admin-->
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<!--untuk mengamankan admin-->


<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Guru</h1>
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

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th><th>NUPTK</th><th>Nama</th><th>Email</th><th>Alamat</th><th>Bidang Studi</th><th>telepon</th>
                <th>
                    <a href="input-guru.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from guru order by nuptk ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                 <td><?php echo "<img src='img/guru/$row[foto]' 
                    width='100px'
                    height='100px'>";?></td>
                <td><?php echo $row['nuptk']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['bidang_studi']?></td>
                <td><?php echo $row['telepon']?></td>
                <td>

                <a href="edit-guru.php?id=<?php echo $row['guru_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-guru.php?id=<?php echo $row['guru_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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