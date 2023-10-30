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
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($kelas as $dkelas) : ?>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?php echo $dkelas['kode_kelas']?>
                    </td>
                    <td><?php echo $dkelas['kode_kelas']?></td>
                    <td><?php echo $dkelas['nama_kelas']?></td>
                    <td><?php echo $dkelas['wali_kelas']?></td>
                  </tr>
        
                  </tbody>
                 <?php endforeach; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->