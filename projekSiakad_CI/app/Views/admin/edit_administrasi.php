<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Update Administrasi</h1>
            <form action="<?= base_url('admin/administrasi/update'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id_administrasi"></label>
                    <input type="hidden" class="form-control" name="id_administrasi" value="<?php echo $administrasi['id_administrasi']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <select class="form-control" id="nama_siswa" name="nama_siswa">
                        <?php foreach ($siswa as $s) : ?>
                            <option value="<?php echo $s['nama']; ?>" <?php echo $s['nama'] == $administrasi['nama_siswa'] ? 'selected' : ''; ?>>
                                <?php echo $s['nama']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="juli">juli</label>
                    <input type="text" class="form-control" id="juli" name="juli" value="<?php echo $administrasi['juli']; ?>">
                </div>
                <div class="form-group">
                    <label for="agustus">agustus</label>
                    <input type="text" class="form-control" id="agustus" name="agustus" value="<?php echo $administrasi['agustus']; ?>">
                </div>
                <div class="form-group">
                    <label for="september">september</label>
                    <input type="text" class="form-control" id="september" name="september" value="<?php echo $administrasi['september']; ?>">
                </div>
                <div class="form-group">
                    <label for="oktober">oktober</label>
                    <input type="text" class="form-control" id="oktober" name="oktober" value="<?php echo $administrasi['oktober']; ?>">
                </div>
                <div class="form-group">
                    <label for="november">november</label>
                    <input type="text" class="form-control" id="november" name="november" value="<?php echo $administrasi['november']; ?>">
                </div>
                <div class="form-group">
                    <label for="desember">desember</label>
                    <input type="text" class="form-control" id="desember" name="desember" value="<?php echo $administrasi['desember']; ?>">
                </div>
                <div class="form-group">
                    <label for="januari">januari</label>
                    <input type="text" class="form-control" id="januari" name="januari" value="<?php echo $administrasi['januari']; ?>">
                </div>
                <div class="form-group">
                    <label for="februari">februari</label>
                    <input type="text" class="form-control" id="februari" name="februari" value="<?php echo $administrasi['februari']; ?>">
                </div>
                <div class="form-group">
                    <label for="maret">maret</label>
                    <input type="text" class="form-control" id="maret" name="maret" value="<?php echo $administrasi['maret']; ?>">
                </div>
                <div class="form-group">
                    <label for="april">april</label>
                    <input type="text" class="form-control" id="april" name="april" value="<?php echo $administrasi['april']; ?>">
                </div>
                <div class="form-group">
                    <label for="mei">mei</label>
                    <input type="text" class="form-control" id="mei" name="mei" value="<?php echo $administrasi['mei']; ?>">
                </div>
                <div class="form-group">
                    <label for="juni">juni</label>
                    <input type="text" class="form-control" id="juni" name="juni" value="<?php echo $administrasi['juni']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_kelas" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>