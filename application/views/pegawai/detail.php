<div class="col-md-6">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Details</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
      <h5>
        <b>
          <?= $pegawai['nama_pegawai'] ?>
        </b>

      </h5>
      <p class="card-text">tempat :
        <br>
        <b>
          <?= $pegawai['tempat_lahir_pegawai'] ?>
        </b>

      </p>
      <p class="card-text">tanggal :
        <br>
        <b>
          <?= $pegawai['tanggal_lahir_pegawai'] ?>
        </b>
      </p>

      <p class="card-text">agama pegawai :
        <br>
        <b>
          <?= $pegawai['agama_pegawai'] ?>
        </b>
      </p>
      <p class="card-text">status pegawai :
        <br>
        <b>
          <?= $pegawai['status_pegawai'] ?>
        </b>
      </p>

      <a href="<?= base_url('pegawai') ?>" class="btn btn-primary">Back</a>
    </div>
  </div>
  <!-- /.card -->