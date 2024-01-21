<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Artikel</h1>
           


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Berita Berhasil Dihapus!
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
                <th>Judul Artikel</th>
                <th>
                    <a href="index.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from artikel order by judul_artikel ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><h2><b><?php echo $row['judul_artikel']?></b></h2><h6><i><?php echo $row['last_upload']?></i></h6>
                <br>
                <?php echo $row['isi_artikel']?>
               </td>
                <td>

                <a href="edit-artikel.php?id=<?php echo $row['artikel_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-artikel.php?id=<?php echo $row['artikel_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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
