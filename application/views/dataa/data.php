<div class="card">
	<!-- <div class="card-header">
		<h2 class="card-title">DATA SISWA</h2>
	</div> -->
	<!-- /.card-header -->
	<div class="card-body table-responsive">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Kelas</th>
					<th>Keahlian</th>
					<th>Nama Siswa</th>
					<th>Jenis Kelamin</th>
					<th>Nomer Induk</th>
					<th>NIK</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($row->result() as $key => $data) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $data->nama_kelas ?></td>
						<td><?= $data->nama_keahlian ?></td>
						<td><?= $data->nama_siswa ?></td>
						<td><?= $data->jenis_kelamin ?></td>
						<td><?= $data->nomer_induk ?></td>
						<td><?= $data->nik ?></td>
						<td>
							<a href="<?= site_url('data/edit/' . $data->id_data) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="<?= site_url('data/del/' . $data->id_data) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
							<a href="<?= site_url('data/detail/' . $data->id_data) ?>" class="btn btn-info btn-sm"><i class="fas fa-search"></i> </a>
						
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
