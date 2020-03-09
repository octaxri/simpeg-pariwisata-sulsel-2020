<!DOCTYPE html>
<html>
<head>
	<title>Laporan SK Mutasi Individu</title>

<style type="text/css">
	h1{
		font-size: 1.5rem;
		margin-bottom: 0px;
	}
	h2{
		font-size: 1.2rem;
		margin-bottom: 0px;
	}
	p, ol li{
		font-size: 0.9rem;
		margin-top: 0px;
		margin-bottom: 0px;
	}
	.text-center{
		text-align: center;
	}
	.c1{
		margin-bottom: 0px;
	}
	.c2{
		font-weight: 100;
		margin-top: 0px;
		letter-spacing: 10px;
	}
	.c3{
		font-weight: bold;
		width: 60%;
		margin:auto;
	}
	.c3 > p {
		margin-top: 0px;
		margin-bottom: 0px;
	}
	.table {
	  border-collapse: collapse;
	}

	table td{
		vertical-align:top;
	}

	.table, .th, .td {
	  border: 1px solid black;
	}	
</style>

</head>
<body>

<div class="text-center">
	<img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'./public/assets/img/pancasila.jpg';?>" style="width: 75px;">
	<h1 class="c1">BUPATI WAKATOBI <br> PROVINSI SULAWESI TENGGARA</h1>
	<hr size="4px">
	<div class="c3">
		<h2 >KEPUTUSAN BUPATI WAKATOBI</h2>
		<p style="text-transform: uppercase; font-weight: lighter;">NOMOR : <?=$individu->no_sk?></p>
		<h2 style="letter-spacing: 6px; margin-top: 10px;">TENTANG</h2>
		<p style="text-transform: uppercase; font-weight: lighter;">
		PEMINDAHAN DAN PENEMPATAN PEGAWAI NEGERI SIPIL 
		<br> ATAS NAMA <b><?=$individu->nama?></b> NIP. <b><?=$individu->nip?></b>
		<br> DI LINGKUNGAN PEMERINTAH KABUPATEN WAKATOBI</p>
	</div>

	<h2>BUPATI WAKATOBI</h2>

	<br>
	<table class="vertical">
		<tr>
			<td>Menimbang</td>
			<td>:</td>
			<td>a.</td>
			<td>bahwa untuk kepentingan dinas dan kelancaran tugas-tugas pemerintahan, maka dipandang perlu mengadakan pemindahan / Penempatan Pegawai Negeri Sipil dalam Lingkungan Pemerintah Kabupaten Wakatobi;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>b.</td>
			<td>bahwa berdasarkan pertimbangan sebagaimana dimaksud dalam huruf a, perlu menetapkan Keputusan Bupati tentang Pemindahan dan Penempatan Pegawai Negeri Sipil Atas Nama <?=strtoupper($individu->nama)?> NIP. <?=strtoupper($individu->nip)?> di Lingkungan Pemerintah Kabupaten Wakatobi;</td>
		</tr>
		<tr>
			<td>Mengingat</td>
			<td>:</td>
			<td>1.</td>
			<td>Undang-Undang Nomor 29 Tahun 2003 tentang Pembentukan Kabupaten Bombana, Kabupaten Wakatobi dan kabupaten Kolaka Utara di Provinsi Sulawesi Tenggara (Lembaga Negara Republik Indonesia Tahun 2003 Nomor 144,tambahan Lembaran Negara Republik Indonesia Nomor 4339);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>2.</td>
			<td>Undang - Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 6, Tambahan Lembaran Negara Republik Indonesia Nomor 5494);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>3.</td>
			<td>Undang - Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Nomor 5587) sebagaimana telah diubah dua kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang-Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Nomor 5679);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>4.</td>
			<td>Undang - Undang Nomor 7 Tahun 1977 tentang Peraturan Gaji pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 1977 Nomor 11, Tambahan Lembaran Negara Republik Indonesia Nomor 3089) sebagaimana telah diubah dua kali, terakhir dengan Undang-Undang Nomor 30 Tahun 2015 tentang Perubahan Ketujuh Belas Atas Peraturan Pemerintah Nomor 7 Tahun 1977 Tentang Peraturan Gaji Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 123);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>5.</td>
			<td>Peraturan Pemerintah Nomor 54 Tahun 2010 tentang Disipilin Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2010 Nomor 74);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>6.</td>
			<td>Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2017 Nomor 63, tambahan Lembaran Negara Republik Indonesia Nomor 6037);</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>7.</td>
			<td>Peraturan Daerah Pemerintah Wakatobi Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Wakatobi (Lembaran Daerah Kabupaten Wakatobi Tahun 2016 Nomor 5);</td>
		</tr>
	</table>
	<br>
	<p><b>MEMUTUSKAN :</b></p>
</div>

<table style="width: 100%; font-size: 0.9rem;">
	<tr>
		<td>
			Menetapkan	
		</td>
		<td>:</td>
	</tr>
	<tr>
		<td>PERTAMA</td>
		<td>:</td>
		<td>
			Memindahakan Pegawai Negeri Sipil Atas Nama <?=strtoupper($individu->nama)?> NIP. <?=strtoupper($individu->nip)?> Pangkat/Golongan/Ruang <?=strtoupper($individu->pangkat_gol)?> dari Pelaksana di Bidang <?=strtoupper($individu->satker_lama)?> <?=$individu->unker_lama != '' ? 'Subbidang/Seksi '.$individu->unker_lama : '' ?> dan ditempatkan menjadi Pelaksana di Bidang <?=strtoupper($individu->satker_baru)?> <?=$individu->unker_baru != '' ? 'Subbidang/Seksi '.$individu->unker_baru : '' ?> Daerah Kabupaten Wakatobi;
		</td>
	</tr>
	<tr>
		<td>KEDUA</td>
		<td>:</td>
		<td>Keputusan ini mulai berlaku sejak tanggal ditetapkan, dengan ketentuan bahwa apabila dikemudian hari ternyata terdapat kekeluruan didalamnya, akan diadakan perubahan dan perbaikan sebagaimana mestinya.</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<p style="margin-top: 10px;"><b>PETIKAN : </b> Keputusan ini disampikan kepada Pegawai Negeri Sipil yang bersangkutan;</p>
		</td>
	</tr>
</table>
<br>

<table style="width: 100%; font-size: 0.9rem;">
	<tr>
		<td width="50%"></td>
		<td align="right">Ditetapkan di</td>
		<td align="center">:</td>
		<td>Wangi - Wangi</td>
	</tr>
	<tr style="border-bottom: 1px solid #000;">
		<td width="50%"></td>
		<td align="right">Pada tanggal</td>
		<td align="center">:</td>
		<td><?php
		 $date = $individu->tgl_sk;
 		 $date = str_replace('/', '-', $date);
		 echo date("d F Y", strtotime($date ));
		?></td>
	</tr>
</table>
<br>


<table style="width: 100%; font-size: 0.9rem;" class="text-center">
	<tr>
		<td width="50%">
		</td>
		<td width="50%">
			<p><b>BUPATI WAKATOBI,<b></p>
			<br>
			<br>
			<br>
			<br>
			<p style="text-decoration: underline; font-weight: bold;">ARHAWI</p>
		</td>
	</tr>
</table>

<br>
<p style="margin-top: 10px;"><b>TEMBUSAN</b>:</p>

<ol>
	<li>Yth. Kepala Kantor Regional IV BKN Makassar di Makassar;</li>
	<li>Yth. Gubernur Sulawesi Tenggara di Kendari;</li>
	<li>Yth. Kepala Badan Pengelolaan Keuangan dan Aset Daerah Kab. Wakatobi di Wangi-Wangi;</li>
	<li>Yth. Kepala Badan Kepegawaian dan Pengembangan SDM Kab. Wakatobi di Wangi-Wangi;</li>
	<li>Yth. Pejabat Lain yang Dipandang Perlu;</li>
	<li>Arsip.-</li>
</ol>
</body>
</html>
