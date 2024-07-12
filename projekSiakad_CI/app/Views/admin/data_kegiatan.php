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
                    <h1 class="MT-2">Daftar Kegiatan</h1>
                    <a href="/admin/create_kegiatan" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Data Kegiatan</a>
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
                            <th scope="col">ID Kegiatan</th>
                            <th scope="col">Nama Kegiatan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($kegiatan as $kg) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $kg['id_kegiatan']; ?></td>
                                <td><?= $kg['nama_kegiatan']; ?></td>

                                <td style="text-align: center;">
                                    <a href="/admin/kegiatan/edit/<?= $kg['id_kegiatan']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/kegiatan/delete/<?= $kg['id_kegiatan']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
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
                <h1 class="MT-2">Pengumuman</h1>
                <a href="/admin/create_artikel" class="btn btn-primary" style=" margin-top: 10px; ">Tambah Pengumuman</a>
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
                        <!-- <th scope="col">ID</th> -->
                        <th scope="col">Tanggal</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Content</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($artikel as $art) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>

                            <td><?= $art['tanggal']; ?></td>
                            <td><?= $art['judul']; ?></td>
                            <td><?= $art['isi']; ?></td>



                            <td style="text-align: center;">
                                <a href="/admin/artikel/edit/<?= $art['id']; ?>" class="btn btn-info">Update</a>
                                <a href="/admin/artikel/delete/<?= $art['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>