<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Penerimaan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_penerimaan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                        <tr>
                            <td>Nomor Pendaftaran</td> <td><?= $data['no_pendaftaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td> <td><?= $data['nama_siswa'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Diterima</td> <td><?= $data['tgl_diterima'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=penerimaan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Penerimaan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

