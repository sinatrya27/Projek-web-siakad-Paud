<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<div class="mx-5">
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
                    <h1 class="MT-2">Daftar Siswa</h1>
                    <a href="/admin/create_siswa" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Siswa</a>
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
                            <th scope="col">Username</th>
                            <th scope="col">No Induk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">JK</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">ID Kelas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $s['username']; ?></td>
                                <td><?= $s['id_siswa']; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['jenis_kelamin']; ?></td>
                                <td><?= $s['tempat_lahir']; ?></td>
                                <td><?= $s['tanggal_lahir']; ?></td>
                                <td><?= $s['id_kelas']; ?></td>
                                <td style="text-align: center;">
                                    <a href="/admin/siswa/edit/<?= $s['id_siswa']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/siswa/delete/<?= $s['id_siswa']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
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
<?= $this->endSection(); ?>