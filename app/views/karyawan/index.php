<div class="container mt-5" >

	<div class="row">
		<div class="col-6">
			<h3>Daftar Karyawan</h3>
			<?php foreach( $data['kry'] as $kry ) : ?>
				<ul>
					<li><?= $kry['nama']; ?></li>
					<li><?= $kry['nk']; ?></li>
					<li><?= $kry['email']; ?></li>
					<li><?= $kry['status']; ?></li>
				</ul>
			<?php endforeach; ?>

		</div>
	</div>


</div>