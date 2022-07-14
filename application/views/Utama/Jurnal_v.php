<section class="container">
    <h2 class="mt-5 mb-4">Jurnal yang tersedia</h2>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Jurnal" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
    </div>
    <?php
    foreach ($data_jurnal as $d) {
    ?>
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title"><?= $d['judul'] ?></h5>
                <p class="card-text"><?= $d['penulis'] ?></p>
                <p class="card-text"><?= substr($d['abstrak'], 1, 300) ?>........</p>
                <a href="<?= base_url('/Utama/detail/' . $d['id_jurnal']) ?>" class="btn btn-primary"> Selengkapnya..</a>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    echo $this->pagination->create_links();
    ?>
</section>