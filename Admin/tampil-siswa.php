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
        <h1>Data Siswa</h1>
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
               <th>Foto</th> <th>NISN</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Alamat</th><th>email</th><th>Telepon</th>
                <th>
                    <a href="input-siswa.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from siswa order by nisn ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo "<img src='img/siswa/$row[foto]' 
                    width='100px'
                    height='100px'>";?></td>
                <td><?php echo $row['nisn']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['kelas']?></td>
                <td><?php echo $row['jurusan']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['telepon']?></td>
                
                <td>

                <a href="edit-siswa.php?id=<?php echo $row['siswa_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-siswa.php?id=<?php echo $row['siswa_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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