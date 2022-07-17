<section class="container">
    <h1>Detail Skripsi</h1>
    <h4><?= $detail_skripsi->Judul ?></h4>
    <p> <?= $detail_skripsi->penulis ?>, <span><?= $detail_skripsi->tahun ?></span> </p>
    <p class="lead"><?= $detail_skripsi->abstrak ?></p>
    <?php
    $session_login = $this->session->userdata('nama');
    if (isset($session_login)) :
    ?>
        <a href="<?= base_url('Skripsi/download/' . $detail_skripsi->id) ?>" class="btn btn-primary">Download</a>
    <?php endif ?>
</section>