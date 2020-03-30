	<link rel="stylesheet" href="<?= assets_url() ?>vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables/css-main/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables-tabletools/css/dataTables.tableTools.css">
	<link rel="stylesheet" href="<?= assets_url() ?>vendor/datatables-fixedColumns/css/fixedColumns.dataTables.min.css">

	<table class="table">
		<thead>
			<tr>
				<td>No.</td>
				<td>NIP</td>
				<td>No.KTP</td>
				<td>Nama</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
				<td>TMT CPNS</td>
				<td>Pangkat/Golongan/Ruang</td>
                <td>TMT Pangkat/Golongan/Ruang</td>
				<td>Jabatan</td>
                <td>TMT Jabatan</td>
				<td>Eselon</td>
                <td>Bidang</td>
				<td>Subbidang/Seksi</td>
				<td>Alamat</td>
				<td>Kelurahan</td>
				<td>Kecamatan</td>
				<td>Kabupaten</td>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($satker as $key) : ?>

				<tr>
					<td><?= $i ?></td>
					<td><?= "NIP: " . $key->nip  ?></td>
					<td><?= "KTP: " . $key->no_ktp ?></td>
					<td><?= (($key->gelar_depan == '') ? '' : $key->gelar_depan . '.') . ' ' . $key->nama_lengkap . (($key->gelar_belakang == '') ? '' : ', ' . $key->gelar_belakang) ?></td>
					<td><?= $key->tempat_lahir ?></td>
					<td><?= $key->tanggal_lahir ?></td>
					<td><?= $key->tanggal_tmt ? $key->tanggal_tmt : '-' ?></td>
					<td><?= $key->jenis_pangkat ?></td>
                    <td><?= $key->tmt_jenis_pangkat ?></td>
					<td><?= $key->nama_jabatan ?></td>
                    <td><?= $key->tmt_jabatan ?></td>
					<td><?= $key->eselon ?></td>
                    <td><?= $key->satuan_kerja ?></td>
					<td><?= $key->unit_kerja ?></td>
					<td><?= $key->alamat ? $key->alamat : '-' ?></td>
					<td><?= $key->kel ? $key->kel : '-' ?></td>
					<td><?= $key->kec ? $key->kec : '-' ?></td>
					<td><?= $key->kab ? $key->kab : '-' ?></td>
				</tr>
			<?php $i++;
			endforeach ?>
		</tbody>
	</table>
	<script src="<?= assets_url() ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= assets_url() ?>vendor/datatables/js-main/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

	<script src="<?= assets_url() ?>vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('table').DataTable({
				dom: 'Bfrtip',
				buttons: [{
					extend: 'excel',
					title: 'Data export'
				}]
			})
			$('.buttons-excel').trigger('click');
			setTimeout(function() {
				window.close();;
			}, 1000);

		});
	</script>
