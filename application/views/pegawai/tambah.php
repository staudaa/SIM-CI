<div class="container">
  <div class="row mt-3">
    <div class="col md-6 ">

      <div class="card">
        <div class="card-header">
          Form Tambah Barang
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama_pegawai">nama_pegawai</label>
              <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
              <!-- <small class="form-text text-danger"><?= form_error('pegawai'); ?></small> -->

              <div class="form-group">
                <label for="tempat_lahir_pegawai">tempat_lahir_pegawai</label>
                <input type="text" class="form-control" id="tempat_lahir_pegawai" name="tempat_lahir_pegawai">

              </div>
              <div class="form-group">
                <label for="tanggal_lahir_pegawai">tanggal_lahir_pegawai</label>
                <input type="date" class="form-control" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai">

              </div>
              <div class="form-group">
                <label for="agama_pegawai">agama_pegawai</label>
                <input type="text" class="form-control" id="agama_pegawai" name="agama">

              </div>
              <div class="form-group">
                <label for="status_pegawai">status_pegawai</label>
                <input type="text" class="form-control" id="status_pegawai" name="status">
                <small class="form-text text-danger"><?= form_error('status'); ?></small>
              </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-9">
                    <a href="<?= base_url('pegawai') ?>" class="btn btn-primary">Back</a>
                  </div>
                  <div class="col-sm-3" align="right">
                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>