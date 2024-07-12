<?= $this->extend('layout/Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-2">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-2 text-center">
                            <h5>Nama</h5>
                        </dt>
                        <dd class="col-sm-9"><?= $siswa->nama ?? ""; ?></dd>
                        <dt class="col-sm-2 text-center">
                            <h5>No Induk</h5>
                        </dt>
                        <dd class="col-sm-9">
                            <?= $siswa->id_siswa ?? ""; ?>
                        </dd>
                        <dt class="col-sm-2 text-center">
                            <hr>
                            <h5>Level Pencapaian</h5>
                        </dt>
                        <dd class="col-sm-9">
                            <hr>
                            <p>BSB = Belum Samasekali Belajar</p>
                            <p>MB = Masih Belajar</p>
                            <p>BSH = Belum Sesuai Harapan</p>
                            <p>BSB = Sesuai Harapan</p>
                        </dd>
                    </dl>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body">
                    <dl class="row">
                        <?php
                        $Kategori = ['Bahasa', 'Fisik Motorik', 'Kognitif', 'Keagamaan', 'Seni', 'Sosial Empati'];
                        $counter = 0;

                        foreach ($siswa_all as $s) :
                            if ($counter % 5 == 0) :
                                $kat = $Kategori[$counter / 5];
                        ?>
                                <dt class="col-sm-2 text-left">
                                    <h5><?= $kat; ?></h5>
                                </dt>
                                <dd class="col-sm-9"></dd>
                            <?php endif; ?>

                            <?php
                            $bgColor = '';
                            switch ($s->level_pencapaian) {
                                case 'MB':
                                    $bgColor = 'background-color: #FFFED3;';
                                    break;
                                case 'BSH':
                                    $bgColor = 'background-color: #96C9F4;';
                                    break;
                                case 'SH':
                                    $bgColor = 'background-color: #DEF9C4;';
                                    break;
                                default:
                                    $bgColor = 'background-color: white;';
                                    break;
                            }
                            ?>

                            <dt class="col-sm-9 text-left"><?= $s->indikator ?? ""; ?></dt>
                            <dd class="col-sm-2 text-center" style="<?= $bgColor ?>"><?= $s->level_pencapaian ?? ""; ?></dd>
                        <?php $counter++;
                        endforeach; ?>

                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* body {
        background-image: url('https://www.publicdomainpictures.net/pictures/320000/nahled/background-image.png');
        background-size: cover;
        background-attachment: fixed;
        font-family: 'Courier New', Courier, monospace;
    } */

    .card {
        background-color: rgba(255, 255, 255, 0.8);
        border: 2px solid #ccc;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    h5 {
        /* background-color: darkcyan; */
        color: darkcyan;
        font-weight: bold;
        font-size: 1.2em;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    dt,
    dd {
        padding: 10px;
    }

    dt {
        color: chocolate;
        border-radius: 5px;
    }

    dd {
        font-weight: bold;
        /* background-color: #ecf0f1; */
        border-radius: 10px;
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .container {
        margin-top: 20px;
    }
</style>

<?= $this->endSection(); ?>