<div class="container">
  <div class="row mt-3">
    <div class="col md-6 ">

      <div class="card">
        <div class="card-header">
          Form Edit Kelas
        </div>

        <div class="card-body">
          <form action="" method="post">
          <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas'];?>">
            <div class="form-group">
              <label for="id_keahlian">id keahlian</label>
              <input type="text" class="form-control" id="id_keahlian" name="id_keahlian" value="<?= $kelas['id_keahlian'];?>">
              <small class="form-text text-danger">
                <?= form_error('id_keahlian'); ?>
              </small>
            </div>
            <div class="form-group">
              <label for="kode_kelas">Kode kelas</label>
              <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="<?= $kelas['kode_kelas'];?>">
              <small class="form-text text-danger">
                <?= form_error('kode_kelas'); ?>
              </small>
            </div>
            <div class="form-group">
              <label for="nama_kelas">Nama kelas</label>
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'];?>">
              <small class="form-text text-danger">
                <?= form_error('nama_kelas'); ?>
              </small>
            </div>
            <div class="form-group">
              <label for="wali_kelas">Wali kelas</label>
              <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" value="<?= $kelas['wali_kelas'];?>">
              <small class="form-text text-danger">
                <?= form_error('wali'); ?>
              </small> 
            </div>

            <button type="submit" name="edit" class="btn btn-primary float-right">Edit data</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>