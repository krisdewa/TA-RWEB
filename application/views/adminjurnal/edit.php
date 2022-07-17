<div class="container pt-5 mb-5">
    <!-- Heading -->
    <div class="p-2 bg-light mb-3 border rounded">
        <h1 class=""><?= $title ?></h1>
        <!-- Breadcrumb -->
        <nav class="d-flex">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a>Jurnal</a></li>
                <li class="breadcrumb-item "><a href="<?= base_url('jurnal'); ?>">List Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
        <!-- Breadcrumb -->
    </div>
    <!-- Heading -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id_jurnal' => 'FrmEditJurnal', 'method' => "post", "autocomplete" => "off");
                    echo form_open_multipart('', $attributes);
                    ?>
                    <div class="form-group row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id_jurnal" name="id_jurnal" value=" <?= $data_jurnal->id_jurnal; ?>">
                            <input type="text" class="form-control" id="judul" name="judul" value=" <?= $data_jurnal->judul; ?>">
                            <small class="text-danger">
                                <?php echo form_error('judul') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="penulis" name="penulis" value="<?= $data_jurnal->penulis; ?>">
                            <small class="text-danger">
                                <?php echo form_error('penulis') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data_jurnal->penerbit; ?>">
                            <small class="text-danger">
                                <?php echo form_error('penerbit') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Edisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="edisi" value="<?= $data_jurnal->edisi ?>">
                            <small class="text-danger">
                                <?php echo form_error('edisi') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-2">
                            <select class="form-select" id="tahun" name="tahun">
                                <option value="2022" selected disabled>Pilih</option>
                                <option value="2022" <?php if ($data_jurnal->tahun == "2022") : echo "selected";
                                                        endif; ?>>2022</option>
                                <option value="2021" <?php if ($data_jurnal->tahun == "2021") : echo "selected";
                                                        endif; ?>>2021</option>
                                <option value="2020" <?php if ($data_jurnal->tahun == "2020") : echo "selected";
                                                        endif; ?>>2020</option>
                                <option value="2019" <?php if ($data_jurnal->tahun == "2019") : echo "selected";
                                                        endif; ?>>2019</option>
                                <option value="2018" <?php if ($data_jurnal->tahun == "2018") : echo "selected";
                                                        endif; ?>>2018</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('tahun') ?>
                            </small>
                        </div>
                    </div>
                    <div class="mb-3 row form-groub">
                        <label for="tahun" class="col-sm-2 col-form-label">Abstrak</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="abstrak" rows="3"><?= $data_jurnal->abstrak; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('abstrak') ?>
                            </small>
                        </div>
                    </div>
                    <div class="input-group row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="file_jurnal">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>