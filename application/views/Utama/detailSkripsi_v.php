<section class="container">
    <h1>Detail Skripsi</h1>
    <h4><?= $detail_skripsi->Judul ?></h4>
    <p> <?= $detail_skripsi->penulis ?>, <span><?= $detail_skripsi->tahun ?></span> </p>
    <p class="lead"><?= $detail_skripsi->abstrak ?></p>
    <?php
    $session_login = $this->session->userdata('nama');
    if (isset($session_login)) :
    ?>
        <button class="btn btn-primary">Download</button>
    <?php endif ?>
</section>