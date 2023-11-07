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
          <th>Kelas</th>
          <th>Keahlian</th>
          <th>Kaproli</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($jurusan as $djurusan): ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?php echo $djurusan['id_kelas'] ?>
            </td>
            <td>
              <?php echo $djurusan['nama_keahlian'] ?>
            </td>
            <td>
              <?php echo $djurusan['kaproli'] ?>
            </td>
            <td>
              <?php echo $djurusan['deskripsi'] ?>
            </td>
            <td>
              <a href="<?= base_url('jurusan/edit/') ?><?= $djurusan['id_keahlian']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
              <a href="<?= base_url('jurusan/hapus/') ?><?= $djurusan['id_keahlian']; ?>"  onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
              <a href="<?= base_url('jurusan/detail/') ?><?= $djurusan['id_keahlian']; ?>"
              class="btn btn-info btn-sm"><i class="fas fa-search"></i> </a>
            </td>
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->