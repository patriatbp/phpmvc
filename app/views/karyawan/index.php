<div class="container mt-3" >
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  		Tambah Data Karyawan
		</button>
		<br>
			<h3>Daftar Karyawan</h3>
			
				<ul class="list-group">
				<?php foreach( $data['kry'] as $kry ) : ?>
					<li class="list-group-item ">
					<?= $kry['nama']; ?>
					
					<a href="<?= BASEURL;  ?>/karyawan/hapus/<?= $kry['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin ?');">Hapus</a> 

					<a href="<?= BASEURL;  ?>/karyawan/edit/<?= $kry['id']; ?>" class="badge badge-primary float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kry['id'];  ?>">Edit</a>

					<a href="<?= BASEURL;  ?>/karyawan/detail/<?= $kry['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
					</li>
				<?php endforeach; ?>
				</ul>
			

		</div>
	</div>


</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Karyawanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/karyawan/tambah" method="post">
		<input type="hidden" name="id" id="id">
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>
		<div class="form-group">
			<label for="nk">NK</label>
			<input type="text" class="form-control" id="nk" name="nk">
		</div>
		<div class="form-group">
			<label for="Email">Email</label>
			<input type="text" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="status">Status</label>
			<select class="form-control" id="status" name="status">
			<option>Tetap</option>
			<option>Kontrak</option>
			<option>Bantuan</option>
			</select>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>