<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Laporan Pendaftaran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_pendaftaran WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Siswa Baru TK/PAUD SYASTI </h2>
                        <h4> Komplek Perumahan TDI Blok B No.70 Kec. Kisaran Timur <br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21223</h4>
                        <hr>
                        <h3>DATA PENDAFTARAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah<strong></u><br>
                                        Sri Astuti, S.Pd
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>