<section class="container">
    <h1>Detail Jurnal</h1>
    <h4><?= $data_detail->judul ?></h4>
    <p> <?= $data_detail->penulis ?>, <span><?= $data_detail->tahun ?></span> </p>
    <p class="lead"><?= $data_detail->abstrak ?></p>
    <?php
    $session_login = $this->session->userdata('nama');
    if (isset($session_login)) :
    ?>
        <a href="<?= base_url('Utama/download/' . $data_detail->id_jurnal) ?>">Download</a>
    <?php endif ?>
</section>