<div class="container pt-5 mb-3">
    <?php if ($this->session->flashdata('login')) :
        echo $this->session->flashdata('login');
    endif; ?>
    <!-- Heading -->
    <div class="p-2 bg-light mb-3 border rounded">
        <h1 class=""><?= $title ?></h1>
        <!-- Breadcrumb -->
        <nav class="d-flex">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a>Jurnal</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Data</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
    </div>
    <!-- Heading -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-light mb-3 font-weight-bold" style="background-color: #FFC18E;" href="<?= base_url('admin_skripsi/add'); ?>">TAMBAH SKRIPSI</a>
                    <div mb-2>
                        <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                        <?php if ($this->session->flashdata('message')) :
                            echo $this->session->flashdata('message');
                        endif; ?>
                    </div>

                    <div class="table-responsive rounded">
                        <table class="table table-striped table-bordered table-hover myTable" id="myTable">
                            <thead>
                                <tr class="table-warning">
                                    <th>JUDUL</th>
                                    <th>PENULIS</th>
                                    <th>PENERBIT</th>
                                    <th>TAHUN</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_skripsi as $d) : ?>
                                    <tr>
                                        <td><?= $d['Judul'] ?></td>
                                        <td><?= $d['penulis'] ?></td>
                                        <td><?= $d['penerbit'] ?></td>
                                        <td><?= $d['tahun'] ?></td>
                                        <td>
                                            <a href="<?= site_url('admin_skripsi/edit_skripsi/' . $d['id']) ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> </a>
                                            <a href="<?= site_url('admin_skripsi/delete/' . $d['id']) ?>" data="<?= $d['id'] ?>" class="btn btn-danger btn-sm item-delete"><i class="bi bi-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    });
</script>

<script>
    $(document).ready(function() {
        $('.myTable').DataTable();
    });
</script>