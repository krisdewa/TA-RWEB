<nav style="background-color: #FFC18E;" class="navbar navbar-expand-lg navbar-dark Small shadow">
    <div class="container">
        <a class="navbar-brand fs-5" href="#"> <strong>Jurnal dan Skripsi</strong> Prodi Informatika</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item fs-5">
                    <a class="nav-link <?php if ($this->uri->segment(1) == "Beranda") {
                                            echo "active";
                                        } ?>" href=" <?= base_url('/Beranda') ?>">Beranda</a>
                <li class="nav-item fs-5">
                    <a class="nav-link <?php if ($this->uri->segment(1) == "Utama") {
                                            echo "active";
                                        } ?>" href=" <?= base_url('/Utama') ?>">Jurnal</a>
                </li>
                <li class="nav-item fs-5">
                    <a class="nav-link <?php if ($this->uri->segment(1) == "Skripsi") {
                                            echo "active";
                                        } ?>" href="<?= base_url('/Skripsi') ?>">Skripsi</a>
                </li>
                <?php
                $session_login = $this->session->userdata('username');
                if (isset($session_login)) :
                ?>
                    <li class="nav-item dropdown fs-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $this->session->userdata('username') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('Login/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
            <?php
                $session_login = $this->session->userdata('username');
                if (!isset($session_login)) : ?>
                    <span class="nav-item fs-5">
                        <a class="nav-link text-light active" href="Login">LOGIN</a>
                    </span>
                <?php endif ?>
        </div>
    </div>
</nav>