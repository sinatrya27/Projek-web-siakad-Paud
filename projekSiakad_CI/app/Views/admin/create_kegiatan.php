<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Tambah Data Kegiatan</h2>
            <form action="/admin/save_kegiatan" method="post">

                <!-- mulai dari sini untuk tambah atau kurang form -->
                <div class="mb-3">
                    <label for="id_kegiatan" class="form-label">No Kegiatan</label>
                    <input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" autofocus required>

                </div>
                <div class="mb-3">
                    <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>




                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>