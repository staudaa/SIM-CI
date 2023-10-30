<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="id_kelas">id_kelas</label>
            <input type="number" class="form-control" id="id_kelas" placeholder="Enter id id_kelas" name="id_kelas">
          </div>
          <div class="form-group">
            <label for="nama_keahlian">nama keahlian</label>
            <input type="text" class="form-control" id="nama_keahlian" placeholder="Enter nama_keahlian"
              name="nama_keahlian">

          </div>
          <div class="form-group">
            <label for="kaproli">kaproli</label>
            <input type="text" class="form-control" id="kaproli" placeholder="Enter id kaproli" name="kaproli">
            <small class="form-text text-danger">
              <?= form_error('kaproli'); ?>
            </small>
          </div>
          <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Enter id deskripsi" name="deskripsi">
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

    <!-- general form elements -->

    <!-- /.card -->


    <!-- /.card -->
    <!-- Horizontal Form -->

    <!-- /.card -->

  </div>
</div>