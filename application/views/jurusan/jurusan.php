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
          <th>id_kelas</th>
          <th>nama_keahlian</th>
          <th>kaproli</th>
          <th>deskripsi</th>
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
          </tr>
        </tbody>
      <?php endforeach; ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->