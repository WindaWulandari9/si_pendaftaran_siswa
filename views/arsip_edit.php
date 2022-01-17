<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="no_pendaftaran" class="col-sm-3 control-label">Nomor Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pendaftaran" value="<?=$data['no_pendaftaran']?>"class="form-control" id="inputEmail3" placeholder="Nomor Pendaftaran">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_pendaftaran" class="col-sm-3 control-label">Tgl Pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pendaftaran" value="<?=$data['tgl_pendaftaran']?>"class="form-control" id="inputEmail3" placeholder="Tgl Pendaftaran">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="ttl" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="ttl" value="<?=$data['ttl']?>"class="form-control" id="inputEmail3" placeholder="Tempat Tanggal Lahir">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>"class="form-control" id="inputEmail3" placeholder="Agama" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_siswa" class="col-sm-3 control-label">Alamat Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat_siswa" value="<?=$data['alamat_siswa']?>"class="form-control" id="inputEmail3" placeholder="Alamat Siswa" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_ortu" class="col-sm-3 control-label">Nama Ortu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_ortu" value="<?=$data['nama_ortu']?>"class="form-control" id="inputEmail3" placeholder="Nama Ortu" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No Hp" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pendaftaran</button>
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

    //buat sql
    $sql="UPDATE tbl_pendaftaran SET 
    nama_lengkap='$nama_lengkap',
    no_pendaftaran='$no_pendaftaran',
    tgl_pendaftaran='$tgl_pendaftaran',
    ttl='$ttl',
    jenis_kelamin='$jenis_kelamin',
	agama='$agama',
    alamat_siswa='$alamat_siswa',
    nama_ortu='$nama_ortu',
    no_hp='$no_hp' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



