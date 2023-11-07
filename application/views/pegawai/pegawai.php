<div class="card">
  <!-- <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div> -->
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pegawai</th>
          <th>Tempat Tanggal Lahir</th>
          <th>Agama Pegawai</th>
          <th>Status Pegawai</th>
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
              <?php echo $dpegawai['tanggal_lahir_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['agama_pegawai'] ?>
            </td>
            <td>
              <?php echo $dpegawai['status_pegawai'] ?>
            </td>
            <td>
              <a href="<?= base_url('pegawai/edit/') ?><?= $dpegawai['id_pegawai']; ?>" class="btn btn-warning btn-sm"><i
                  class="fas fa-edit"></i> </a>
              <a href="<?= base_url('pegawai/hapus/') ?><?= $dpegawai['id_pegawai']; ?>"
                onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i
                  class="fas fa-trash"></i></a>
              <a href="<?= base_url('pegawai/detail/') ?><?= $dpegawai['id_pegawai']; ?>" class="btn btn-info btn-sm"><i
                  class="fas fa-search"></i> </a>
            </td>
          </tr>

        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->