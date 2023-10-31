<div class="container">
    <div class="row mt-3">
        <div class="col md-6 ">

            <div class="card">
                <div class="card-header">
                    Form Edit Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">

                        <input type="hidden" class="form-control" id="id_pegawai" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">

                        <div class="form-group">
                            <label for="nama_pegawai">nama pegawai</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('nama_pegawai'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir_pegawai">tempat_lahir_pegawai</label>
                            <input type="text" class="form-control" id="tempat_lahir_pegawai" name="tempat_lahir_pegawai" value="<?= $pegawai['tempat_lahir_pegawai']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('tempat_lahir_pegawai'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_pegawai">tanggal_lahir_pegawai</label>
                            <input type="date" class="form-control" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai" value="<?= $pegawai['tanggal_lahir_pegawai']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('tanggal_lahir_pegawai'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="agama_pegawai">agama_pegawai</label>
                            <input type="text" class="form-control" id="agama_pegawai" name="agama_pegawai" value="<?= $pegawai['agama_pegawai']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('agama'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="status_pegawai">status_pegawai</label>
                            <input type="text" class="form-control" id="status_pegawai" name="status_pegawai" value="<?= $pegawai['status_pegawai']; ?>">
                            <small class="form-text text-danger"><?= form_error('status_pegawai'); ?></small>
                        </div>

                        <a href="<?= base_url('pegawai') ?>" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit Data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>