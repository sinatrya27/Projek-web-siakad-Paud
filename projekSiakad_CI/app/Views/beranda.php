<?= $this->extend('layout/Template'); ?>

<?= $this->section('content'); ?>

<head>
  <style>
    .pirate-theme-background {
      background-image: url('https://www.example.com/path/to/pirate-theme-image.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body class="pirate-theme-background">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="card shadow-lg">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Jadwal Hari Ini | <?= date('l, d-m-Y'); ?></h5>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>Nama Kegiatan</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($jadwal_hari_ini)) : ?>
                    <?php foreach ($jadwal_hari_ini as $jhi) : ?>
                      <tr>
                        <td><?= $jhi->nama_kegiatan ?? ""; ?></td>
                        <td><?= $jhi->jam_mulai ?? ""; ?></td>
                        <td><?= $jhi->jam_selesai ?? ""; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <tr>
                      <td colspan="3" class="text-center">Tidak ada kegiatan hari ini</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <div class="container mt-2">
    <div class="row">
      <?php foreach ($artikel as $art) : ?>
        <div class="col-md-6">
          <div class="card shadow-lg mb-4">
            <div class="card-body">
              <dl class="row">
                <dt class="col-sm-3">Tanggal</dt>
                <dd class="col-sm-9"><?= $art->tanggal ?? ""; ?></dd>
                <dt class="col-sm-3">Judul</dt>
                <dd class="col-sm-9"><?= $art->judul ?? ""; ?></dd>
                <dt class="col-sm-3">
                  <p>Content</p>
                </dt>
                <dd class="col-sm-9"><?= $art->isi ?? ""; ?></dd>
              </dl>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

<?= $this->endSection(); ?>