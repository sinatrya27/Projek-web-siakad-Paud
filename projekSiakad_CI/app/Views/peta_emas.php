<?= $this->extend('layout/Template'); ?>

<?= $this->section('content'); ?>
<style>
    body {
        background-color: #F5F5DC;
        font-family: 'Trebuchet MS', sans-serif;
    }

    .card {
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Gambar tema harta karun */
        background-image: url('https://www.transparenttextures.com/patterns/old-map.png');
        background-size: cover;
        border: 2px solid #DAA520;
    }

    .card-body {
        padding: 20px;
        background: rgba(255, 255, 255, 0.8);
    }

    h5 {
        color: #8B4513;
    }

    h3 {
        color: #DAA520;
    }

    dt {
        background-color: #FFD700;
        border-radius: 5px;
        padding: 5px;
        text-align: center;
    }

    dd {
        background-color: #FFF8DC;
        border-radius: 5px;
        padding: 5px;
    }

    .col-sm-2,
    .col-sm-9 {
        display: flex;
        align-items: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2">
                            <h5>Nama</h5>
                        </dt>
                        <dd class="col-sm-9"><?= $siswa->nama ?? ""; ?></dd>

                        <dt class="col-sm-2">
                            <h5>No Induk</h5>
                        </dt>
                        <dd class="col-sm-9">
                            <p><?= $siswa->id_siswa ?? ""; ?></p>
                            <p>
                        </dd>

                        <dt class="col-sm-2">
                            <h5></h5>
                        </dt>
                        <dd class="col-sm-9">
                            <p>
                            <h5>Histori Pembayaran</h5>
                            </p>
                            <p>
                        </dd>

                        <?php
                        $bulan = [
                            'Juli' => 'juli', 'Agustus' => 'agustus', 'September' => 'september',
                            'Oktober' => 'oktober', 'November' => 'november', 'Desember' => 'desember',
                            'Januari' => 'januari', 'Februari' => 'februari', 'Maret' => 'maret',
                            'April' => 'april', 'Mei' => 'mei', 'Juni' => 'juni'
                        ];

                        foreach ($bulan as $nama_bulan => $var_bulan) :
                        ?>
                            <dt class="col-sm-2"><?= $nama_bulan ?? ""; ?></dt>
                            <dd class="col-sm-9">Rp <?= !empty($siswa->$var_bulan) ? number_format($siswa->$var_bulan, 0, ',', '.') : ''; ?></dd>
                        <?php endforeach; ?>

                        <dt class="col-sm-2"></dt>
                        <dd class="col-sm-9">
                            <hr>
                        </dd>

                        <dt class="col-sm-2">
                            <h5>Sisa Bayar</h5>
                        </dt>
                        <dd class="col-sm-9">
                            Rp <?= number_format($sisa_bayar, 0, ',', '.'); ?>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>