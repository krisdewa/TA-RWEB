<nav class="navbar navbar-expand-md" style="background-color: #FFC18E;">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="jurnal">Dashboard Admin Website</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('jurnal'); ?>">Jurnal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('admin_skripsi'); ?>">Skripsi</a>
                </li>
            </ul>
        </div>
        <?php
        $session_login = $this->session->userdata('username');
        if (!isset($session_login)) : ?>
            <span class="nav-text">
                <a class="nav-link active" href="Login">login</a>
            </span>
        <?php endif ?>
        <?php
        $session_login = $this->session->userdata('username');
        if (isset($session_login)) :
        ?>
            <span class="nav-item dropdown fs-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $this->session->userdata('username') ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= base_url('Login/logout'); ?>">Logout</a></li>
                </ul>
            </span>
        <?php endif ?>
    </div>
</nav>