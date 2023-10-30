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
          <th>id kelas</th>
          <th>id_keahlian</th>
          <th>nama_siswa</th>
          <th>jenis_kelamin</th>
          <th>nomer_induk</th>
          <th>nik</th>
          <th>tempat_lahir</th>
          <th>tanggal_lahir</th>
          <th>agama</th>
          <th>kewarganegaraan</th>
          <th>no_hp</th>
          <th>alamat</th>
          <th>rt_rw</th>
          <th>dusun</th>
          <th>kelurahan</th>
          <th>kecamatan</th>
          <th>kabupaten</th>
          <th>provinsi</th>
          <th>kode_pos</th>
          <th>nama_ayah</th>
          <th>tempat_lahir_ayah</th>
          <th>tanggal_lahir_ayah</th>
          <th>pendidikan_terakhir_ayah</th>
          <th>pekerjaan_ayah</th>
          <th>penghasilan_bulanan_ayah</th>
          <th>no_hp_ayah</th>
          <th>agama_ayah</th>
          <th>nama_ibu</th>
          <th>tempat_lahir_ibu</th>
          <th>tanggal_lahir_ibu</th>
          <th>pendidikan_terakhir_ibu</th>
          <th>pekerjaan_ibu</th>
          <th>penghasilan_bulanan_ibu</th>
          <th>no_hp_ibu</th>
          <th>agama_ibu</th>
          <th>nama_wali</th>
          <th>tempat_lahir_wali</th>
          <th>tanggal_lahir_wali</th>
          <th>pendidikan_terakhir_wali</th>
          <th>pekerjaan_wali</th>
          <th>penghasilan_bulanan_wali</th>
          <th>no_hp_wali</th>
          <th>agama_wali</th>
          <th>foto</th>
          <th>ktp_ayah</th>
          <th>ktp_ibu</th>
          <th>ktp_wali</th>
          <th>kk_siswa</th>
          <th>kk_wali</th>

        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($data as $ddata): ?>
          <tr>
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?php echo $ddata['id_kelas'] ?>
            </td>
            <td>
              <?php echo $ddata['id_keahlian'] ?>
            </td>
            <td>
              <?php echo $ddata['nama_siswa'] ?>
            </td>
            <td>
              <?php echo $ddata['jenis_kelamin'] ?>
            </td>
            <td>
              <?php echo $ddata['nomer_induk'] ?>
            </td>
            <td>
              <?php echo $ddata['nik'] ?>
            </td>
            <td>
              <?php echo $ddata['tempat_lahir'] ?>
            </td>
            <td>
              <?php echo $ddata['tanggal_lahir'] ?>
            </td>
            <td>
              <?php echo $ddata['agama'] ?>agama
            </td>
            <td>
              <?php echo $ddata['kewarganegaraan'] ?>
            </td>
            <td>
              <?php echo $ddata['no_hp'] ?>
            </td>
            <td>
              <?php echo $ddata['alamat'] ?>
            </td>
            <td>
              <?php echo $ddata['rt_rw'] ?>
            </td>
            <td>
              <?php echo $ddata['dusun'] ?>
            </td>
            <td>
              <?php echo $ddata['kelurahan'] ?>
            </td>
            <td>
              <?php echo $ddata['kecamatan'] ?>
            </td>
            <td>
              <?php echo $ddata['kabupaten'] ?>
            </td>
            <td>
              <?php echo $ddata['provinsi'] ?>
            </td>
            <td>
              <?php echo $ddata['kode_pos'] ?>
            </td>
            <td>
              <?php echo $ddata['nama_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['tempat_lahir_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['tanggal_lahir_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['pendidikan_terakhir_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['pekerjaan_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['penghasilan_bulanan_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['no_hp_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['agama_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['nama_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['tempat_lahir_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['tanggal_lahir_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['pendidikan_terakhir_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['pekerjaan_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['penghasilan_bulanan_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['no_hp_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['agama_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['nama_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['tempat_lahir_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['tanggal_lahir_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['pendidikan_terakhir_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['pekerjaan_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['penghasilan_bulanan_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['no_hp_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['agama_wali'] ?>
            </td>

            <td>
              <?php echo $ddata['foto'] ?>
            </td>
            <td>
              <?php echo $ddata['ktp_ayah'] ?>
            </td>
            <td>
              <?php echo $ddata['ktp_ibu'] ?>
            </td>
            <td>
              <?php echo $ddata['ktp_wali'] ?>
            </td>
            <td>
              <?php echo $ddata['kk_siswa'] ?>
            </td>
            <td>
              <?php echo $ddata['kk_wali'] ?>
            </td>
          </tr>

        </tbody>
      <?php endforeach; ?>

    </table>
  </div>
  <!-- /.card-body -->
</div>

<!-- /.card -->