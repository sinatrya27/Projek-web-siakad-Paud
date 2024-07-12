<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
  <!-- Tautkan ke Bootstrap CSS -->
  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Form Tambah Data Kelas</h2>
      <form action="/admin/save_kelas" method="post">
        <div class="mb-3">
          <label for="id_kelas" class="form-label">Nomor Kelas</label>
          <input type="text" class="form-control" id="id_kelas" name="id_kelas" autofocus required>

        </div>
        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Nama Kelas</label>
          <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
        </div>

        <div class="mb-3">
          <label for="id_guru" class="form-label">Id Wali Kelas</label>
          <!-- <input type="text" class="form-control" id="id_guru" name="id_guru"> -->
          <select id="id_guru" name="id_guru" required>
            <?php foreach ($guru as $g) : ?>
              <option value="<?= $g['id_guru'] ?>"><?= $g['nama'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>