<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>

</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Data Siswa</h1>

            <form action="<?= base_url('admin/siswa/update'); ?>" method="post">

                <div class="form-group">
                    <label for="id_siswa">No Induk</label>
                    <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?= $siswa['id_siswa']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama siswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>
                </div>
                <!-- <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div> -->

                <div class="form=group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L" <?= $siswa['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="P" <?= $siswa['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <select class="form-control" id="id_kelas" name="id_kelas" required>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?php echo $k['id_kelas']; ?>" <?php echo $k['id_kelas'] == $siswa['id_kelas'] ? 'selected' : ''; ?>>
                                <?php echo $k['id_kelas']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <select class="form-control" id="username" name="username" required>
                        <?php foreach ($users as $us) : ?>
                            <option value="<?php echo $us['username']; ?>" <?php echo $us['username'] == $siswa['username'] ? 'selected' : ''; ?>>
                                <?php echo $us['username']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_siswa" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>