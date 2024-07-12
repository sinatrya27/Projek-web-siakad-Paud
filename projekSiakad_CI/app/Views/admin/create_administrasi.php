<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Tambah Data Administrasi</h2>
            <form action="/admin/save_administrasi" method="post">
                <!-- <div class="mb-3">
                    <label for="id_administrasi" class="form-label">Nomor administrasi</label>
                    <input type="text" class="form-control" id="id_administrasi" name="id_administrasi" autofocus required>

                </div> -->

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <!-- <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"> -->
                    <select id="nama_siswa" name="nama_siswa" required>
                        <?php foreach ($siswa as $s) : ?>
                            <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="juli" class="form-label">Juli</label>
                    <input type="text" class="form-control" id="juli" name="juli">
                </div>

                <div class="form-group">
                    <label for="agustus">agustus</label>
                    <input type="text" class="form-control" id="agustus" name="agustus">
                </div>

                <div class="form-group">
                    <label for="september">september</label>
                    <input type="text" class="form-control" id="september" name="september">
                </div>
                <div class="form-group">
                    <label for="oktober">oktober</label>
                    <input type="text" class="form-control" id="oktober" name="oktober">
                </div>
                <div class="form-group">
                    <label for="november">november</label>
                    <input type="text" class="form-control" id="november" name="november">
                </div>
                <div class="form-group">
                    <label for="desember">desember</label>
                    <input type="text" class="form-control" id="desember" name="desember">
                </div>
                <div class="form-group">
                    <label for="januari">januari</label>
                    <input type="text" class="form-control" id="januari" name="januari">
                </div>
                <div class="form-group">
                    <label for="februari">februari</label>
                    <input type="text" class="form-control" id="februari" name="februari">
                </div>
                <div class="form-group">
                    <label for="maret">maret</label>
                    <input type="text" class="form-control" id="maret" name="maret">
                </div>
                <div class="form-group">
                    <label for="april">april</label>
                    <input type="text" class="form-control" id="april" name="april">
                </div>
                <div class="form-group">
                    <label for="mei">mei</label>
                    <input type="text" class="form-control" id="mei" name="mei">
                </div>
                <div class="form-group">
                    <label for="juni">juni</label>
                    <input type="text" class="form-control" id="juni" name="juni">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>