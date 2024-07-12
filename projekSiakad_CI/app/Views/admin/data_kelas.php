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
                    <h1 class="MT-2">Daftar Kelas</h1>
                    <a href="/admin/create_kelas" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Kelas</a>
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
                            <th scope="col">Nomor Kelas</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Id Wali Kelas</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($kelas as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $k['id_kelas']; ?></td>
                                <td><?= $k['nama_kelas']; ?></td>
                                <td><?= $k['id_guru']; ?></td>
                                <td style="text-align: center;">
                                    <a href="/admin/kelas/edit/<?= $k['id_kelas']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/kelas/delete/<?= $k['id_kelas']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
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