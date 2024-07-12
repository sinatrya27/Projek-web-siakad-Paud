<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Data Kegiatan</h1>

            <form action="<?= base_url('admin/kegiatan/update'); ?>" method="post">

                <div class="form-group">
                    <label for="id_siswa">No Kegiatan</label>
                    <input type="text" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= $kegiatan['nama_kegiatan']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_siswa" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>