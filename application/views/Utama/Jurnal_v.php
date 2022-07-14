<section class="container">
    <h2 class="mt-5 mb-4">Jurnal yang tersedia</h2>
    <?php
    foreach ($data_jurnal as $d) {
    ?>
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title"><?= $d->judul ?></h5>
                <p class="card-text"><?= $d->penulis ?></p>
                <p class="card-text"><?= substr($d->abstrak, 1, 300) ?>........</p>
                <a href="Utama/detail/<?= $d->id_jurnal ?>" class="btn btn-primary"> Selengkapnya..</a>
            </div>
        </div>
    <?php
    }
    ?>
</section>