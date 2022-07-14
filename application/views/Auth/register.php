<!DOCTYPE html>
<html lang="en">

<head>
    <title>REGISTER</title>
    <?php $this->load->view('templates/header'); ?>
</head>

<body style="background-color: #FFC18E">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-light p-5" >
                    <div class="text-center mb-3">
                        <a href="" target="_blank"><img src="<?php echo base_url(); ?>image/logo-UAD2.png" alt="" width="200px"></a>
                    </div>
                    <h5 class="text-center mb-4 text-muted">Register your account</h5>
                    <!-- <div mb-2> -->
                        <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                        <?php //if ($this->session->flashdata('register')) :
                            //echo $this->session->flashdata('register');
                        //endif; ?>
                    <!-- </div> -->

                    <?php echo form_open('Register/register_aksi'); ?>            
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Nama</label>
                        <input type="nama" id="nama" name="nama" placeholder="input nama" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" placeholder="input username or email" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="input password" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid gap-2 col-15 mx-auto">
                        <button type="submit" class="btn btn-warning btn-block mb-4">REGISTER</button>
                    </div>
                    <div class="text-center mb-3">
                        You Have Account? <a href="">Login Here</a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- </form> -->
</body>

</html>