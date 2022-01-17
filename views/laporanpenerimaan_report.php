<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Peneriman</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_penerimaan";
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
                                    <td>
                                        <a href="report/peminjaman_satu.php?id=<?= $data['id'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/peminjaman_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data

                                    </a>
                                    <a href="#cetak_perbulan" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Perbulan

                                    </a>
                                    <a href="#cetak_pertahun" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Pertahun

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/peminjaman_perbulan.php" method="post">
        <h4>Pilih bulan </h4>
        <select name="bulan" class="form-control">
          <option value="12"> Desember </option>
          <option value="11"> November </option>
          <option value="10"> Oktober </option>
          <option value="09"> September </option>
          <option value="08"> Agustus </option>
          <option value="07"> Juli </option>
          <option value="06"> Juni </option>
          <option value="05"> Mei </option>
          <option value="04"> April </option>
          <option value="03"> Maret </option>
          <option value="02"> Februari </option>
          <option value="01"> Januari </option>
        </select>
      

        <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/arsip_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
         <select name="tahun" class="form-control">
          
             
             <option value="2021"> 2021 </option>
             <option value="2022"> 2022 </option>
             <option value="2023"> 2023 </option>
             <option value="2024"> 2024 </option>
             <option value="2025"> 2025 </option>
             <option value="2026"> 2026 </option>
             <option value="2027"> 2027 </option>
             <option value="2028"> 2028 </option>
             <option value="2029"> 2029 </option>
             <option value="2030"> 2030 </option>

         </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>
