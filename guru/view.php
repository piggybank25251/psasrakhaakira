<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Siswa</div>
                <div>
                    <a href="?m=siswa&s=add" class="btn btn-primary float-end"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>  
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include_once('config.php');
                    $sql = "SELECT siswa.id, nis, nama, jk, tempat_lahir, tanggal_lahir, kelas, foto FROM `siswa` JOIN kelas ON kelas.id=siswa.kelas_id ";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows ($result) > 0) {
                        $no = 1;                
                        while ($r = mysqli_fetch_assoc($result)) {
                            $foto = isset($r['foto']) ? $r['foto'] : '0.png';
                            echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$r['nis'].'</td>
                                <td>'.$r['nama'].'</td>
                                <td>'.$r['jk'].'</td>
                                <td>'.$r['tempat_lahir'].'</td>
                                <td>'. date('d M Y', strtotime($r['tanggal_lahir'])) . '</td>
                                <td>'.$r['kelas'].'</td>
                                <td> <img src="siswa/foto/'. $foto .'" alt="Webpro" height=90></td>
                                <td>
                                <a href="?m=siswa&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?m=siswa&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin siswa akan dihapus?\')">Hapus</a>
                            </td>
                            </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="9" align="center">Data Kosong</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>