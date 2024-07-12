<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Jadwal</h1>
            <form action="<?= base_url('admin/jadwal/update'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id_jadwal">ID Jadwal</label>
                    <input type="text" class="form-control" name="id_jadwal" value="<?php echo $jadwal['id_jadwal']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <select class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                        <?php foreach ($kegiatan as $kg) : ?>
                            <option value="<?php echo $kg['nama_kegiatan']; ?>" <?php echo $kg['nama_kegiatan'] == $jadwal['nama_kegiatan'] ? 'selected' : ''; ?>>
                                <?php echo $kg['nama_kegiatan']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <select class="form-control" name="hari" required>
                        <option value="">Pilih Hari</option>
                        <option value="Minggu" <?php echo ($jadwal['hari'] == 'Minggu') ? 'selected' : ''; ?>>Minggu</option>
                        <option value="Senin" <?php echo ($jadwal['hari'] == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                        <option value="Selasa" <?php echo ($jadwal['hari'] == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                        <option value="Rabu" <?php echo ($jadwal['hari'] == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                        <option value="Kamis" <?php echo ($jadwal['hari'] == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                        <option value="Jumat" <?php echo ($jadwal['hari'] == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                        <option value="Sabtu" <?php echo ($jadwal['hari'] == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" class="form-control" name="jam_mulai" value="<?php echo $jadwal['jam_mulai']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <input type="time" class="form-control" name="jam_selesai" value="<?php echo $jadwal['jam_selesai']; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_jadwal" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>