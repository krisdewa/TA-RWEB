<section style="margin-top: 50px; margin-bottom: 50px;" class="container">
    <h1>Detail Jurnal</h1>
    <hr>
    <h4><?= $data_detail->judul ?></h4>
    <p class="mt-5 fw-bold">Abstrak</p>
    <p class="lead"><?= $data_detail->abstrak ?></p>
    <hr>
    <h5 class="mt-4">Informasi Tambahan</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Properti</th>
                <th scope="col">Nilai Properti</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>penulis</th>
                <td><?= $data_detail->penulis ?></td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td><?= $data_detail->penerbit ?></td>
            </tr>
            <tr>
                <th>Tahun</th>
                <td><?= $data_detail->tahun ?></td>
            </tr>
            <tr>
                <th>Edisi</th>
                <td><?= $data_detail->edisi ?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <?php
    $session_login = $this->session->userdata('nama');
    if (!isset($session_login)) :
    ?>
        <div class="alert alert-warning" role="alert">
            Untuk melakukan download silahkan <a href="/login" class="alert-link">Login</a> terlebih dahulu !!!
        </div>
    <?php endif ?>
    <?php
    $session_login = $this->session->userdata('nama');
    if (isset($session_login)) :
    ?>
        <a class="btn btn-primary" href="<?= base_url('Utama/download/' . $data_detail->id_jurnal) ?>">Download</a>
    <?php endif ?>
</section>