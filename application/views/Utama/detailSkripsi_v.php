<section style="margin-top: 50px; margin-bottom: 50px;" class="container">
    <h1 class="mb-3">Detail Skripsi</h1>
    <hr>
    <h4><?= $detail_skripsi->Judul ?></h4>
    <p class="mt-5 fw-bold">Abstrak</p>
    <p class="lead"><?= $detail_skripsi->abstrak ?></p>
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
                <td><?= $detail_skripsi->penulis ?></td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td><?= $detail_skripsi->penerbit ?></td>
            </tr>
            <tr>
                <th>Tahun</th>
                <td><?= $detail_skripsi->tahun ?></td>
            </tr>
            <tr>
                <th>Jenis Penelitian</th>
                <td><?= $detail_skripsi->jenis_penelitian ?></td>
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
        <a href="<?= base_url('Skripsi/download/' . $detail_skripsi->id) ?>" class="btn btn-primary">Download</a>
    <?php endif ?>
</section>