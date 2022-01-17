<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-20">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Penerimaan</h3>
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
											
									</td>
									
                                    <td>
                                        <a href="?page=peminjaman&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=peminjaman&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=peminjaman&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                      
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
