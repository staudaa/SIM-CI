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


            <!-- <div class="form-group">
              <label for="jenis">jenis barang</label>
              <select class="form-control" id="jenis" name="jenis">
              <option value="Islam">barang baku</option>
                <option value="barang mentah">barang mentah</option>
                <option value="barang jadi">barang jadi</option>
                <option value="barang setengah jadi">barang setengah jadi</option> 
              </select>
            </div> -->




            <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>