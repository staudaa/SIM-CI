<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Siswa</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">kelas</label>
            <div class="alert alert-light" role="alert">
             <?= $row ['id_kelas'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">keahlian</label>
            <div class="alert alert-light" role="alert">
               <?= $row ['id_keahlian'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama siswa</label>
            <div class="alert alert-light" role="alert">
               <?= $row ['nama_siswa'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">jenis kelamin</label>
            <div class="alert alert-light" role="alert">
               <?= $row ['jenis_kelamin'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">nomor induk</label>
            <div class="alert alert-light" role="alert">
               <?= $row ['nomer_induk'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nik</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['nik'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tempat lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tempat_lahir'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tanggal_lahir'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">agama</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['agama'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">kewarganegaraan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kewarganegaraan'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">no hp</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['no_hp'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">alamat</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['alamat'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">RT/RW</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['rt_rw'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Dusun</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['dusun'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kelurahan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kelurahan'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kecamatan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kecamatan'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kabupaten</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kabupaten'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">provinsi</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['provinsi'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kode Pos</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kode_pos'] ?>
            </div>
          </div>
          
         
          
         
        </div>
        <!-- /.card-body -->

       
      </form>
    </div>
    <!-- /.card -->

    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Ayah</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="form-group">
            <label for="exampleInputEmail1">Nama Ayah</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['nama_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">tempat Lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tempat_lahir_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">tanggal lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tanggal_lahir_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">pendidikan terakhir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pendidikan_terakhir_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">pekerjaan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pekerjaan_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">penghasilan bulanan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['penghasilan_bulanan_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">no hp</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['no_hp_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">agama</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['agama_ayah'] ?>
            </div>
          </div>
      </div>
    </div>
    <!-- /.card -->

   
   
  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Form Element sizes -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Data Ibu</h3>
      </div>
      <div class="card-body">
      <div class="form-group">
            <label for="exampleInputEmail1">Nama ibu</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['nama_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">tempat Lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tempat_lahir_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">tanggal lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tanggal_lahir_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">pendidikan terakhir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pendidikan_terakhir_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">pekerjaan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pekerjaan_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">penghasilan bulanan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['penghasilan_bulanan_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">no hp</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['no_hp_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">agama</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['agama_ibu'] ?>
            </div>
          </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

 
    <!-- /.card -->

    <!-- general form elements disabled -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Data Wali</h3>
      </div>
      <div class="card-body">
      <div class="form-group">
            <label for="exampleInputEmail1">Nama ibu</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['nama_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">tempat Lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tempat_lahir_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">tanggal lahir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['tanggal_lahir_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">pendidikan terakhir</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pendidikan_terakhir_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">pekerjaan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['pekerjaan_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">penghasilan bulanan</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['penghasilan_bulanan_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">no hp</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['no_hp_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">agama</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['agama_wali'] ?>
            </div>
          </div>
      </div>
      <!-- /.card-body -->
      
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- general form elements disabled -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Data Pendukung</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="form-group">
            <label for="exampleInputEmail1">Foto</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['foto'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">KTP Ayah</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['ktp_ayah'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">KTP Ibu</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['ktp_ibu'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">KTP Wali</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['ktp_wali'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">KK Siswa</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kk_siswa'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">KK Wali</label>
           <div class="alert alert-light" role="alert">
               <?= $row ['kk_wali'] ?>
            </div>
          </div>
         
      </div>
    </div>
    <a href="<?= base_url('data') ?>" class="btn btn-primary">Back</a>

    <!-- /.card -->
  </div>
  
  <!--/.col (right) -->
  
</div>
<!-- /.row -->