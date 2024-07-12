<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
  <!-- Tautkan ke Bootstrap CSS -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Form Tambah Data Guru</h2>
      <form action="/admin/save_guru" method="post">

        <!-- mulai dari sini untuk tambah atau kurang form -->
        <div class="mb-3">
          <label for="id_guru" class="form-label">No Induk</label>
          <input type="text" class="form-control" id="id_guru" name="id_guru" autofocus required>

        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Guru</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>

        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="datetime-local" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="mb-3">
          <label for="tmt" class="form-label">TMT</label>
          <input type="datetime-local" class="form-control" id="tmt" name="tmt" required>
        </div>

        <div class="mb-3">
          <label for="pendidikan" class="form-label">Pendidikan</label>
          <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
        </div>

        <div class="mb-3">
          <label for="tugas" class="form-label">Tugas</label>
          <input type="text" class="form-control" id="tugas" name="tugas" required>
        </div>

        <div class="mb-3">
          <label for="kontak" class="form-label">Kontak</label>
          <input type="text" class="form-control" id="kontak" name="kontak" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>