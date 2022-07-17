<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <?php $this->load->view('templates/header'); ?>
</head>

<body style="background-color: #FFC18E">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light p-5">
                        <div class="text-center mb-3">
                            <a href="" target="_blank"><img src="<?php echo base_url(); ?>image/logo-UAD2.png" alt="" width="200px"></a>
                        </div>
                        <h4 class="mb-2 text-center" style="color: #FFAA85">Selamat Datang</h4>
                        <div mb-2>
                            <!-- Menampilkan flash data (pesan saat data berhasil disimpan)-->
                            <?php if ($this->session->flashdata('login')) :
                                echo $this->session->flashdata('login');
                            endif; ?>
                        </div>
                        <?php echo form_open('Login/login_aksi'); ?>
                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan password" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2 col-15 mx-auto">
                            <button type="submit" class="btn btn-block text-light mb-4" style="background-color: #FFAA85"><b>LOGIN</b></button>
                        </div>
                        <div class="text-center mb-3">
                            <div class="text-dark">Belum punya akun? <a class="text-decoration-none text-warning" href="register">Register Akun</a></div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
    </section>
    <!-- </form> -->


    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        });
    </script>
</body>

</html>