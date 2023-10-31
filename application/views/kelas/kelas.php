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
          <th>id_keahlian</th>
          <th>kode_kelas</th>
          <th>nama_kelas</th>
          <th>wali_kelas</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($kelas as $dkelas): ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?php echo $dkelas['id_keahlian'] ?>
            </td>
            <td>
              <?php echo $dkelas['kode_kelas'] ?>
            </td>
            <td>
              <?php echo $dkelas['nama_kelas'] ?>
            </td>
            <td>
              <?php echo $dkelas['wali_kelas'] ?>
            </td>
            <td>
              <a href="<?= base_url('kelas/edit/') ?><?= $dkelas['id_kelas']; ?>" class="btn btn-primary">edit</a>
              <a href="<?= base_url('kelas/hapus/') ?><?= $dkelas['id_kelas']; ?>" class="btn btn-danger">hapus</a>
              <a href="<?= base_url('kelas/detail/') ?><?= $dkelas['id_kelas']; ?>" class="btn btn-primary">detail</a>
            </td>
          </tr>

        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->