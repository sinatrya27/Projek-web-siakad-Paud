<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Data Guru</h1>

            <form action="<?= base_url('admin/guru/update'); ?>" method="post">

                <div class="form-group">
                    <label for="id_guru">No Induk</label>
                    <input type="text" class="form-control" id="id_guru" name="id_guru" value="<?= $guru['id_guru']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Guru</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $guru['tempat_lahir']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $guru['tanggal_lahir']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tmt">TMT</label>
                    <input type="date" class="form-control" id="tmt" name="tmt" value="<?= $guru['tmt']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $guru['pendidikan']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tugas">Tugas</label>
                    <input type="text" class="form-control" id="tugas" name="tugas" value="<?= $guru['tugas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $guru['kontak']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_guru" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>