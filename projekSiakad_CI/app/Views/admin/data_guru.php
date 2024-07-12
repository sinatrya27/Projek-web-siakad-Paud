<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="col">
        <div class="row">

            <!-- <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <title>Table Example</title> -->
            </head>

            <body>
                <div>
                    <h1 class="MT-2">Daftar Guru</h1>
                    <a href="/admin/create_guru" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Guru</a>
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
                            <th scope="col">No Induk</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">TMT</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Kontak</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($guru as $g) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $g['id_guru']; ?></td>
                                <td><?= $g['nama']; ?></td>
                                <td><?= $g['tempat_lahir']; ?></td>
                                <td><?= $g['tanggal_lahir']; ?></td>
                                <td><?= $g['tmt']; ?></td>
                                <td><?= $g['pendidikan']; ?></td>
                                <td><?= $g['tugas']; ?></td>
                                <td><?= $g['kontak']; ?></td>
                                <td style="text-align: center;">
                                    <a href="/admin/guru/edit/<?= $g['id_guru']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/guru/delete/<?= $g['id_guru']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
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