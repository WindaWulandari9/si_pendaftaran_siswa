<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
						 <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_pendaftaran" class="col-sm-3 control-label">Nomor Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pendaftaran" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Pendaftaran" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tgl_pendaftaran" class="col-sm-3 control-label">Tgl Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pendaftaran" class="form-control" id="inputEmail3" placeholder="Inputkan Tgl Pendaftaran" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="ttl" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="ttl" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin"class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-3">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat_siswa" class="col-sm-3 control-label">Alamat Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat_siswa" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Siswa" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_ortu" class="col-sm-3 control-label">Nama Ortu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_ortu" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Ortu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputPassword3" placeholder="No Hp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Ket</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="keterangan" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pendaftaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_lengkap=$_POST['nama_lengkap'];
	$no_pendaftaran=$_POST['no_pendaftaran'];
	$tgl_pendaftaran=$_POST['tgl_pendaftaran'];
	$ttl=$_POST['ttl'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
	$agama=$_POST['agama'];
  $alamat_siswa=$_POST['alamat_siswa'];
  $nama_ortu=$_POST['nama_ortu'];
	$no_hp=$_POST['no_hp'];
    $keterangan=$_POST['keterangan'];
  
    //buat sql
    $sql="INSERT INTO tbl_pendaftaran VALUES ('',
                                    '$nama_lengkap',
                                    '$no_pendaftaran',
                                    '$tgl_pendaftaran',
                                    '$ttl',
                                    '$jenis_kelamin',
                                    '$agama',
                                    '$alamat_siswa',
                                    '$nama_ortu',
                                    '$no_hp',
                                    '$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
