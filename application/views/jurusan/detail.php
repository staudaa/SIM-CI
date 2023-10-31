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
          <?= $jurusan['nama_keahlian'] ?>
        </b>

      </h5>
      <p class="card-text">kelas :
        <br>
       <b><?= $jurusan['id_kelas'] ?></b> 
      </p>
      <p class="card-text">kaproli :
        <br>
       <b> <?= $jurusan['kaproli'] ?></b>
      </p>
      <p class="card-text">deskripsi :
        <br>
      <b> <?= $jurusan['deskripsi'] ?></b> 
      </p>

      <a href="<?= base_url('jurusan') ?>" class="btn btn-primary">Back</a>
    </div>
  </div>
  <!-- /.card -->