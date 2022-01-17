<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) { 
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Pendaftaran Siswa Baru TK/PAUD SYASTI </h2>
                        <h4>Komplek Perumahan TDI Blok B No.70 Kec. Kisaran Timur <br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21223</h4>
                        <hr>
                        <h3>DATA PENERIMAAN BULAN   <? echo "$bulanNama "; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
								<th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>No. Pendaftaran</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Tempat & Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Alamat Siswa</th>
                                <th>Nama Ortu</th>
                                <th>No. Hp</th>
                                <th>Ket</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_penerimaan ";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama_lengkap'] ?></td>>
                                    <td><?= $data['no_pendaftaran'] ?></td>
                                    <td><?= $data['tgl_pendaftaran'] ?></td>
                                    <td><?= $data['ttl'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['agama'] ?></td>>
                                    <td><?= $data['alamat_siswa'] ?></td>
                                    <td><?= $data['nama_ortu'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                     <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                               <td colspan="13" class="text-right">
                                       
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
