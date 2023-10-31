<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>no</th>
          <th>nama_pegawai</th>
          <th>tempat_lahir_pegawai</th>
          <th>tanggal_lahir_pegawai</th>
          <th>agama_pegawai</th>
          <th>status_pegawai</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($pegawai as $dpegawai): ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?php echo $dpegawai['nama_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['tempat_lahir_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['tanggal_lahir_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['agama_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['status_pegawai'] ?>
            </td>
            <td>
              <a href="<?= base_url('pegawai/edit/') ?><?= $dpegawai['id_pegawai']; ?>" class="btn btn-primary">Edit</a>
              <a href="<?= base_url('pegawai/hapus/') ?><?= $dpegawai['id_pegawai']; ?>" class="btn btn-danger">Hapus</a>
              <a href="<?= base_url('pegawai/detail/') ?><?= $dpegawai['id_pegawai']; ?>" class="btn btn-primary">Detail</a>
            </td>
          </tr>

        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->