<div class="content">
	<div class="card" style="padding:10px;">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9">
					<h3> <?= ucfirst($page) ?> Data </h3>
				</div>
				<div class="col-sm-3" align="right">
					<a href="<?= site_url('data') ?>" class="btn btn-info btn-sm"><i class="fas fa-undo"></i> Kembali</a>
				</div>
			</div>
		</div>
		<form action="<?= site_url('data/process') ?>" method="post">
			<div class="row">
				<div class="col-md-6">

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Data Siswa</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Kelas</label>
								<input type="hidden" name="id" value="<?= $row->id_data ?>">
								<?php echo form_dropdown(
									'kelas',
									$kelas,
									$selectedkelas,
									['class' => 'form-control', 'required' => 'required']
								); ?>
								<!-- <input type="text" name="id_kelas" class="form-control" value="<?= $row->id_kelas ?>" placeholder="Masukkan kelas"> -->
							</div>
							<div class="form-group">
								<label for="id_keahlian">Keahlian</label>
								<input type="text" class="form-control" id="id_keahlian" value="<?= $row->id_keahlian ?>" placeholder="Masukkan Keahlian" name="id_keahlian">
							</div>
							<div class="form-group">
								<label for="nama_siswa">Nama Siswa</label>
								<input type="text" class="form-control" id="nama_siswa" value="<?= $row->nama_siswa ?>" placeholder="Masukkan Nama Siswa" name="nama_siswa">
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<input type="text" class="form-control" id="jenis_kelamin" value="<?= $row->jenis_kelamin ?>" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin">
							</div>
							<div class="form-group">
								<label for="nomer_induk">Nomer Induk</label>
								<input type="text" class="form-control" id="nomer_induk" value="<?= $row->nomer_induk ?>" placeholder="Masukkan Nomer Induk" name="nomer_induk">
							</div>
							<div class="form-group">
								<label for="nik">NIK</label>
								<input type="text" class="form-control" id="nik" value="<?= $row->nik ?>" placeholder="Masukkan NIK" name="nik">
							</div>
							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir" value="<?= $row->tempat_lahir ?>" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
							</div>
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input type="text" class="form-control" id="tanggal_lahir" value="<?= $row->tanggal_lahir ?>" placeholder="Masukkan Tangal Lahir" name="tanggal_lahir">
							</div>
							<div class="form-group">
								<label for="agama">Agama</label>
								<input type="text" class="form-control" id="agama" value="<?= $row->agama ?>" placeholder="Masukkan Agama" name="agama">
							</div>
							<div class="form-group">
								<label for="kewarganegaraan">Kewarganegaraan</label>
								<input type="text" class="form-control" id="kewarganegaraan" value="<?= $row->kewarganegaraan ?>" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan">
							</div>
							<div class="form-group">
								<label for="no_hp">No HP</label>
								<input type="text" class="form-control" id="no_hp" value="<?= $row->no_hp ?>" placeholder="Masukkan No HP" name="no_hp">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" value="<?= $row->alamat ?>" placeholder="Masukkan Alamat" name="alamat">
							</div>
							<div class="form-group">
								<label for="rt_rw">RT/RW</label>
								<input type="text" class="form-control" id="rt_rw" value="<?= $row->rt_rw ?>" placeholder="Masukkan RT RW" name="rt_rw">
							</div>
							<div class="form-group">
								<label for="dusun">Dusun</label>
								<input type="text" class="form-control" id="dusun" value="<?= $row->dusun ?>" placeholder="Masukkan Dusun" name="dusun">
							</div>
							<div class="form-group">
								<label for="kelurahan">Kelurahan</label>
								<input type="text" class="form-control" id="kelurahan" value="<?= $row->kelurahan ?>" placeholder="Masukkan Kelurahan" name="kelurahan">
							</div>
							<div class="form-group">
								<label for="kecamatan">Kecamatan</label>
								<input type="text" class="form-control" id="kecamatan" value="<?= $row->kecamatan ?>" placeholder="Masukkan Kecamatan" name="kecamatan">
							</div>
							<div class="form-group">
								<label for="kabupaten">Kabupaten</label>
								<input type="text" class="form-control" id="kabupaten" value="<?= $row->kabupaten ?>" placeholder="Masukkan Kabupaten" name="kabupaten">
							</div>
							<div class="form-group">
								<label for="provinsi">Provinsi</label>
								<input type="text" class="form-control" id="provinsi" value="<?= $row->provinsi ?>" placeholder="Masukkan Provinsi" name="provinsi">
							</div>
							<div class="form-group">
								<label for="kode_pos">Kode Pos</label>
								<input type="text" class="form-control" id="kode_pos" value="<?= $row->kode_pos ?>" placeholder="Masukkan Kode Pos" name="kode_pos">
							</div>
						</div>
					</div>

					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Data Ayah</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="nama_ayah">Nama Ayah</label>
								<input type="text" class="form-control" id="nama_ayah" value="<?= $row->nama_ayah ?>" placeholder="Masukkan Nama Ayah" name="nama_ayah">
							</div>
							<div class="form-group">
								<label for="tempat_lahir_ayah">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir_ayah" value="<?= $row->tempat_lahir_ayah ?>" placeholder="Masukkan Tempat Lahir" name="tempat_lahir_ayah">
							</div>
							<div class="form-group">
								<label for="tanggal_lahir_ayah">Tanggal Lahir</label>
								<input type="text" class="form-control" id="tanggal_lahir_ayah" value="<?= $row->tanggal_lahir_ayah ?>" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir_ayah">
							</div>
							<div class="form-group">
								<label for="pendidikan_ayah">Pendidikan Terakhir</label>
								<input type="text" class="form-control" id="pendidikan_ayah" value="<?= $row->pendidikan_terakhir_ayah ?>" placeholder="Masukkan Pendidikan Terakhir" name="pendidikan_ayah">
							</div>
							<div class="form-group">
								<label for="pekerjaan_ayah">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaan_ayah" value="<?= $row->pekerjaan_ayah ?>" placeholder="Masukkan Pekerjaan Ayah" name="pekerjaan_ayah">
							</div>
							<div class="form-group">
								<label for="penghasilan_ayah">Penghasilan Bulanan</label>
								<input type="text" class="form-control" id="penghasilan_ayah" value="<?= $row->penghasilan_bulanan_ayah ?>" placeholder="Masukkan Penghasilan Bulanan" name="penghasilan_ayah">
							</div>
							<div class="form-group">
								<label for="no_hp_ayah">No HP</label>
								<input type="text" class="form-control" id="no_hp_ayah" value="<?= $row->no_hp_ayah ?>" placeholder="Masukkan No Hp" name="no_hp_ayah">
							</div>
							<div class="form-group">
								<label for="agama_ayah">Agama </label>
								<input type="text" class="form-control" id="agama_ayah" value="<?= $row->agama_ayah ?>" placeholder="Masukkan Agama" name="agama_ayah">
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">

					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">Data Ibu</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="nama_ibu">Nama Ibu</label>
								<input type="text" class="form-control" id="nama_ibu" value="<?= $row->nama_ibu ?>" placeholder="Masukkan Nama ibu" name="nama_ibu">
							</div>
							<div class="form-group">
								<label for="tempat_lahir_ibu">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir_ibu" value="<?= $row->tempat_lahir_ibu ?>" placeholder="Masukkan Tempat Lahir" name="tempat_lahir_ibu">
							</div>
							<div class="form-group">
								<label for="tanggal_lahir_ibu">Tanggal Lahir</label>
								<input type="text" class="form-control" id="tanggal_lahir_ibu" value="<?= $row->tanggal_lahir_ibu ?>" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir_ibu">
							</div>
							<div class="form-group">
								<label for="pendidikan_ibu">Pendidikan Terakhir</label>
								<input type="text" class="form-control" id="pendidikan_ibu" value="<?= $row->pendidikan_terakhir_ibu ?>" placeholder="Masukkan Pendidikan Terakhir" name="pendidikan_ibu">
							</div>
							<div class="form-group">
								<label for="pekerjaan_ibu">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaan_ibu" value="<?= $row->pekerjaan_ibu ?>" placeholder="Masukkan Pekerjaan ibu" name="pekerjaan_ibu">
							</div>
							<div class="form-group">
								<label for="penghasilan_ibu">Penghasilan Bulanan</label>
								<input type="text" class="form-control" id="penghasilan_ibu" value="<?= $row->penghasilan_bulanan_ibu ?>" placeholder="Masukkan Penghasilan Bulanan" name="penghasilan_ibu">
							</div>
							<div class="form-group">
								<label for="no_hp_ibu">No HP</label>
								<input type="text" class="form-control" id="no_hp_ibu" value="<?= $row->no_hp_ibu ?>" placeholder="Masukkan No Hp" name="no_hp_ibu">
							</div>
							<div class="form-group">
								<label for="agama_ibu">Agama </label>
								<input type="text" class="form-control" id="agama_ibu" value="<?= $row->agama_ibu ?>" placeholder="Masukkan Agama" name="agama_ibu">
							</div>
						</div>
					</div>

					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title">Data Wali</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="nama_wali">Nama Wali</label>
								<input type="text" class="form-control" id="nama_wali" value="<?= $row->nama_wali ?>" placeholder="Masukkan Nama wali" name="nama_wali">
							</div>
							<div class="form-group">
								<label for="tempat_lahir_wali">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir_wali" value="<?= $row->tempat_lahir_wali ?>" placeholder="Masukkan Tempat Lahir" name="tempat_lahir_wali">
							</div>
							<div class="form-group">
								<label for="tanggal_lahir_wali">Tanggal Lahir</label>
								<input type="text" class="form-control" id="tanggal_lahir_wali" value="<?= $row->tanggal_lahir_wali ?>" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir_wali">
							</div>
							<div class="form-group">
								<label for="pendidikan_wali">Pendidikan Terakhir</label>
								<input type="text" class="form-control" id="pendidikan_wali" value="<?= $row->pendidikan_terakhir_wali ?>" placeholder="Masukkan Pendidikan Terakhir" name="pendidikan_wali">
							</div>
							<div class="form-group">
								<label for="pekerjaan_wali">Pekerjaan</label>
								<input type="text" class="form-control" id="pekerjaan_wali" value="<?= $row->pekerjaan_wali ?>" placeholder="Masukkan Pekerjaan wali" name="pekerjaan_wali">
							</div>
							<div class="form-group">
								<label for="penghasilan_wali">Penghasilan Bulanan</label>
								<input type="text" class="form-control" id="penghasilan_wali" value="<?= $row->penghasilan_bulanan_wali ?>" placeholder="Masukkan Penghasilan Bulanan" name="penghasilan_wali">
							</div>
							<div class="form-group">
								<label for="no_hp_wali">No HP</label>
								<input type="text" class="form-control" id="no_hp_wali" value="<?= $row->no_hp_wali ?>" placeholder="Masukkan No Hp" name="no_hp_wali">
							</div>
							<div class="form-group">
								<label for="agama_wali">Agama </label>
								<input type="text" class="form-control" id="agama_wali" value="<?= $row->agama_wali ?>" placeholder="Masukkan Agama" name="agama_wali">
							</div>
						</div>
					</div>

					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Data Pendukung</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="text" class="form-control" id="foto" value="<?= $row->foto ?>" placeholder="Masukkan foto" name="foto">
							</div>
							<div class="form-group">
								<label for="ktp_ayah">KTP Ayah</label>
								<input type="text" class="form-control" id="ktp_ayah" value="<?= $row->ktp_ayah ?>" placeholder="Masukkan ktp_ayah" name="ktp_ayah">
							</div>
							<div class="form-group">
								<label for="ktp_ibu">KTP Ibu</label>
								<input type="text" class="form-control" id="ktp_ibu" value="<?= $row->ktp_ibu ?>" placeholder="Masukkan ktp_ibu" name="ktp_ibu">
							</div>
							<div class="form-group">
								<label for="ktp_wali">KTP Wali</label>
								<input type="text" class="form-control" id="ktp_wali" value="<?= $row->ktp_wali ?>" placeholder="Masukkan ktp_wali" name="ktp_wali">
							</div>
							<div class="form-group">
								<label for="kk_siswa">KK Siswa</label>
								<input type="text" class="form-control" id="kk_siswa" value="<?= $row->kk_siswa ?>" placeholder="Masukkan kk_siswa" name="kk_siswa">
							</div>
							<div class="form-group">
								<label for="kk_wali">KK Wali</label>
								<input type="text" class="form-control" id="kk_wali" value="<?= $row->kk_wali ?>" placeholder="Masukkan kk_wali" name="kk_wali">
							</div>
						</div>
					</div>

					<button name="<?= $page ?>" type="submit" class="btn btn-primary"><i class="fas fas fa-paper-plane"></i> Submit</button>
					<button type="reset" class="btn btn-secondary"><i class="fas fa-trash"></i> Reset</button>
				</div>
			</div>
		</form>
	</div>
</div>
