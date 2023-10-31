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
        <?= $kelas['nama_kelas'] ?>
        </b>

      </h5>
      <p class="card-text">keahlian :
      <br>
        <b>
          <?= $kelas['id_keahlian'] ?>
        </b>
        
      </p>
      <p class="card-text">kode kelas :
        <br>
        <b>
          <?= $kelas['kode_kelas'] ?>
        </b>
      </p>
      
      <p class="card-text">wali kelas :
        <br>
        <b>
          <?= $kelas['wali_kelas'] ?>
        </b>
      </p>

      <a href="<?= base_url('kelas') ?>" class="btn btn-primary">Back</a>
    </div>
  </div>
  <!-- /.card -->