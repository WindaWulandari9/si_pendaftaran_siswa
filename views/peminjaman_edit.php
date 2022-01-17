<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_penerimaan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Penerimaan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_pendaftaran" class="col-sm-3 control-label">Nomor Pendaftaran</label>
                             <div class="col-sm-9">
								<input type="text" name="no_pendaftaran" value="<?=$data['no_pendaftaran']?>"class="form-control" id="inputEmail3" placeholder="Nomor Pendaftaran" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" value="<?=$data['nama_siswa']?>"class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tgl_diterima" class="col-sm-3 control-label">Tgl Diterima</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_diterima" value="<?=$data['tgl_diterima']?>"class="form-control" id="inputEmail3" placeholder="Tgl Diterima">
                            </div>
						
						
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penerimaan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penerimaan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penerimaan
                    </a>
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
	$tgl_diterima =$_POST['tgl_diterima'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE tbl_penerimaan SET 
    no_pendaftaran = '$no_pendaftaran', 
    nama_siswa='$nama_siswa', 
    tgl_diterima='$tgl_diterima', 
	keterangan='$keterangan' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penerimaan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



