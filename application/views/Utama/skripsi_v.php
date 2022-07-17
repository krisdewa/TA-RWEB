<section class="container">
    <h2 class="mt-5 mb-4">Skripsi yang tersedia</h2>
    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('Skripsi') ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Skripsi...." name="keyword">
                    <div class="input-groub-append">
                        <input class="btn btn-light" style="background-color: #FFC18E;" type="submit" name="submit"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    foreach ($skripsi_data as $d) {
    ?>
        <div class="card mb-5">
            <div class="card-body">
                <h5 class="card-title"><?= $d['Judul'] ?></h5>
                <p class="card-text"><?= $d['penulis'] ?></p>
                <p class="card-text"><?= substr($d['abstrak'], 1, 300) ?>........</p>
                <a href="<?= base_url('/Skripsi/detail/' . $d['id']) ?>" class="btn btn-light" style="background-color: #FFC18E;"> Selengkapnya..</a>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="tablefooter clearfix">
        <div class="pagination">

        </div>
    </div>
</section>