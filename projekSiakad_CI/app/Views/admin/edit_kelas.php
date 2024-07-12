<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Kelas</h1>
            <form action="<?= base_url('admin/kelas/update'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id_kelas">Nomor Kelas</label>
                    <input type="text" class="form-control" name="id_kelas" value="<?php echo $kelas['id_kelas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_guru">Guru</label>
                    <select class="form-control" id="id_guru" name="id_guru" required>
                        <?php foreach ($guru as $g) : ?>
                            <option value="<?php echo $g['id_guru']; ?>" <?php echo $g['id_guru'] == $kelas['id_guru'] ? 'selected' : ''; ?>>
                                <?php echo $g['nama']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_kelas" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>