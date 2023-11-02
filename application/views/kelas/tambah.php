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
              <label for="id_keahlian">id_keahlian</label>
              <input type="text" class="form-control" id="id_keahlian" name="id_keahlian">

            </div>
            <div class="form-group">
              <label for="kode_kelas">kode_kelas</label>
              <input type="text" class="form-control" id="kode_kelas" name="kode">

            </div>
            <div class="form-group">
              <label for="nama_kelas">nama_kelas</label>
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">

            </div>
            <div class="form-group">
              <label for="wali_kelas">wali_kelas</label>
              <input type="text" class="form-control" id="wali_kelas" name="wali">
              <small class="form-text text-danger">
                <?= form_error('wali'); ?>
              </small>
            </div>

            <div class="card-footer">
              <div class="row">
                <div class="col-sm-9">
                  <a href="<?= base_url('kelas') ?>" class="btn btn-primary">Back</a>
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