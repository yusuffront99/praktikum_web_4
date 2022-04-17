<?php 
    include "header.php";
?>

<h2>Data Karyawan</h2>
<hr>

    <div class="form-group">
        <span class="glyphicon glyphicon-plus" aria-hidden></span>
        <a href="karyawan_add.php">Tambah Data</a>
    </div>
    <br>

    <!-- Data table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Tools</th>
            </tr>

            <!-- query database -->
            <?php $no = 1; ?>
            <?php 
                $mySql = "SELECT * FROM tkaryawan"; 
            
                $myQry = mysqli_query($koneksi, $mySql) or die ("Query salah : ".mysqli_error($myQry));
                $no = 1;

                while($kolomData = mysqli_fetch_array($myQry)) {
            ?>
    
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $kolomData['nik']; ?></td>
                <td><?= $kolomData['nama']; ?></td>
                <td><?= $kolomData['tempat_lahir']; ?></td>
                <td><?= $kolomData['tanggal_lahir']; ?></td>
                <td><?= $kolomData['alamat']; ?></td>
                <td><?= $kolomData['no_telepon']; ?></td>
                <td><?= $kolomData['jabatan']; ?></td>
                <td><?= $kolomData['status']; ?></td>
                <td>
                    <a href="karyawan-edit.php?nik=<?= $kolomData['nik']; ?>" title="Edit Data" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-edit" aria-hidden ="true"></span>
                    </a>
                    <a href="karyawan-hapus.php?nik=<?= $kolomData['nik']; ?>" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash" aria-hidden = "true"></span>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
<?php 
    include "footer.php";
?>