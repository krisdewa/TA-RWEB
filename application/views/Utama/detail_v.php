<section class="container">
    <h1>Detail Jurnal</h1>
    <h3><?= $data_detail->judul ?></h3>
    <p> <?= $data_detail->penulis ?>, <span><?= $data_detail->tahun ?></span> </p>
    <p class="lead"><?= $data_detail->abstrak ?></p>

    <button class="btn btn-primary">Download</button>
</section>