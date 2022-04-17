<?php 
    include "header.php";

    if(isset($_POST['add'])){

        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];

        $cek = mysqli_query($koneksi, "SELECT * FROM tkaryawan WHERE nik = $nik");

        //penegecekan nik
        if(mysqli_num_rows($cek)){
            echo "Nik sudah ada..!";
        }else{
            //penambahan data karyawan
            $insert = mysqli_query($koneksi, "INSERT INTO tkaryawan
                VALUES('$nik','$nama','$tempat_lahir','$tanggal_lahir','$alamat','$no_telepon','$jabatan','$status'
            )") or die (mysqli_error($koneksi));

            if($insert){
                echo "berhasil disimpan";
            }else{
                echo "gagal disimpan";

            }


        }
    }

?>

<h2>Data Karyawan &raquo; Tambah Data</h2>
<hr>

<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label for="nik" class="col-sm-3 control-label">NIK</label>
        <div class="col-sm-2">
        <input type="text" name="nik" id="nik" class="form-control" max-length="10" placeholder="NIK" autofocus required autocomplete="off">
        </div>
    </div>

    <div class="form-group">
        <label for="nama" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-4">
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required autocomplete="off">
        </div>
    </div>

    <div class="form-group">
        <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
        <div class="col-sm-4">
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"  placeholder="Tempat Lahir" required>
        </div>
    </div>

    <div class="form-group">
        <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
        <div class="col-sm-4">
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"  placeholder="tanggal_lahir" required>
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="col-sm-3 control-label">Alamat</label>
        <div class="col-sm-3">
        <input type="text" name="alamat" id="alamat" class="form-control"  placeholder="alamat" required>
        </div>
    </div>

    <div class="form-group">
        <label for="no_telepon" class="col-sm-3 control-label">No Telepon</label>
        <div class="col-sm-3">
        <input type="text" name="no_telepon" id="no_telepon" class="form-control"  placeholder="Nomor Telepon" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jabatan</label>
        <div class="col-sm-2">
            <select name="jabatan" class="form-control">
                <option value="">-- Status Terbaru --</option>
                <option value="Operator">Operator</option>
                <option value="Leader">Leader</option>
                <option value="Supervisior">Supervisior</option>
                <option value="Manager">Manager</option>
            </select>
        </div>

        <div class="col-sm-3">
            <b>Status sekarang : </b> 
            <span class="label label-info">Tetap</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Status</label>
        <div class="col-sm-2">
            <select name="status" class="form-control">
                <option value="">-- Status Terbaru --</option>
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
                <option value="OutSourcing">OutSourcing</option>
            </select>
        </div>
        <div class="col-sm-3">
            <b>Status sekarang : </b> 
            <span class="label label-info">Tetap</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
            <button type="submit" name="add" class="btn btn-sm btn-primary">Simpan</button>

            <button type="reset" value="reset" class="btn btn-sm btn-warning">Reset</button>

            <button type="submit" class="btn btn-sm btn-danger" onclick="history.back()">Kembali</button>
        </div>
    </div>
</form>

<?php 
    include ("footer.php");
?>