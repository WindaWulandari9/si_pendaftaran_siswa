<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_pendaftaran WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Pendaftaran</td> <td><?= $data['no_pendaftaran'] ?></td>
                        </tr>
						<tr>
                            <td>Tgl Pendaftaran</td> <td><?= $data['tgl_pendaftaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td> <td><?= $data['ttl'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
						<tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat Siswa</td> <td><?= $data['alamat_siswa'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Ortu</td> <td><?= $data['nama_ortu'] ?></td>
                        </tr>
						<tr>
                            <td>No Hp</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pendaftaran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

