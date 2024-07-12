<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Update pencapaian</h1>
            <form action="<?= base_url('admin/pencapaian/update'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id"></label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $pencapaian['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <select class="form-control" id="nama_siswa" name="nama_siswa">
                        <?php foreach ($siswa as $s) : ?>
                            <option value="<?php echo $s['nama']; ?>" <?php echo $s['nama'] == $pencapaian['nama_siswa'] ? 'selected' : ''; ?>>
                                <?php echo $s['nama']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_indikator">ID Indikator</label>
                    <select class="form-control" id="id_indikator" name="id_indikator">
                        <?php foreach ($indikator as $ind) : ?>
                            <option value="<?php echo $ind['id_indikator']; ?>" <?php echo $ind['id_indikator'] == $pencapaian['id_indikator'] ? 'selected' : ''; ?>>
                                <?php echo $ind['id_indikator']; ?> - <?php echo $ind['indikator']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="level_pencapaian" class="form-label">Level Pencapaian</label>
                    <select class="form-control" id="level_pencapaian" name="level_pencapaian">
                        <option value="BSB" <?= $pencapaian['level_pencapaian'] == 'BSB' ? 'selected' : ''; ?>>BSB</option>
                        <option value="MB" <?= $pencapaian['level_pencapaian'] == 'MB' ? 'selected' : ''; ?>>MB</option>
                        <option value="BSH" <?= $pencapaian['level_pencapaian'] == 'BSH' ? 'selected' : ''; ?>>BSH</option>
                        <option value="SH" <?= $pencapaian['level_pencapaian'] == 'SH' ? 'selected' : ''; ?>>SH</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_pencapaian" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>