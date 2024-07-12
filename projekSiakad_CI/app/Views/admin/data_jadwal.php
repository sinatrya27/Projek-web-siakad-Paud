<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">

            <head>
                <!-- <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <title>Table Example</title> -->
            </head>

            <body>
                <div>
                    <h1 class="MT-2">Jadwal Kegiatan Mingguan</h1>
                    <a href="/admin/create_jadwal" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Jadwal Kegiatan</a>
                </div>
                <table class="table table-bordered" style="margin-top: 20px;">
                    <thead>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert" style=" width: 100%; margin-top: 20px; margin-bottom: 0%;">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">ID Jadwal</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Jam Selesai</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($jadwal as $j) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $j['id_jadwal']; ?></td>
                                <td><?= $j['nama_kegiatan']; ?></td>
                                <td><?= $j['hari']; ?></td>
                                <td><?= $j['jam_mulai']; ?></td>
                                <td><?= $j['jam_selesai']; ?></td>
                                <td style="text-align: center;">
                                    <a href="/admin/jadwal/edit/<?= $j['id_jadwal']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/jadwal/delete/<?= $j['id_jadwal']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </body>

            </html>
        </div>
    </div>
</div>

<hr class="border border-primary border-3 opacity-100">
<div class="mx-5 my-5">
    <div class="col">
        <div class="row">
            <div>
                <h1 class="MT-2">Data Kalender Akademik</h1>

                <a href="/admin/create_kalender" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Kalender Akademik</a>

            </div>

            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari berdasarkan bulan.." class="form-control my-2">
            <table class="table table-bordered">
                <thead>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert" style=" width: 100%; margin-top: 20px; margin-bottom: 0%;">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tanggal Awal</th>
                        <th scope="col">Tanggal Akhir</th>
                        <th scope="col">Uraian Kegiatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody id="kalenderTable">
                    <?php $i = 1; ?>
                    <?php foreach ($kalender as $kal) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $kal['bulan']; ?></td>
                            <td><?= $kal['tanggal_mulai']; ?></td>
                            <td><?= $kal['tanggal_berakhir']; ?></td>
                            <td><?= $kal['uraian_kegiatan']; ?></td>
                            <td style="text-align: center;">
                                <a href="/admin/kalender/edit/<?= $kal['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/admin/kalender/delete/<?= $kal['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("kalenderTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Adjust this index if needed
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>



<?= $this->endSection(); ?>