<?php
$no_pendaftaran=$_GET['no_pendaftaran'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_penerimaan WHERE no_pendaftaran ='$no_pendaftaran'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Diterima</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_pendaftaran" class="col-sm-3 control-label">Nomor Pendaftaran</label>
                            <div class="col-sm-9">
								<input type="text" name="no_pendaftaran" value="<?=$data['no_pendaftaran']?>" class="form-control" id="inputEmail3" placeholder="No Pendaftaran" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_pendaftaran" class="col-sm-3 control-label">tgl_pendaftaran</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pendaftaran" value="<?=$data['tgl_pendaftaran']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pendaftaran" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_diterima" class="col-sm-3 control-label">Tanggal Diterima</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_diterima" value="<?=$data['tgl_diterima']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Diterima" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="keterangan " class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-3">
                                <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="keterangan">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=penerimaan&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$no_pendaftaran=$_POST['no_pendaftaran'];
    $nama_siswa=$_POST['nama_siswa'];
    $tgl_pendaftaran=$_POST['tgl_pendaftaran'];
    $tgl_diterima=$_POST['tgl_diterima'];
    $keterangan=$_POST['keterangan'];
	
		
    //buat sql
    $sql="UPDATE tbl_penerimaan SET  tgl_pendaftaran='$tgl_pendaftaran', tgl_diterima='$tgl_diterima', nama_siswa='$nama_siswa' WHERE no_pendaftaran='$no_pendaftaran'";
	$sqlArsip="UPDATE tbl_pendaftaran SET keterangan='Diterima' WHERE no_pendaftaran='$no_pendaftaran'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=penerimaan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>