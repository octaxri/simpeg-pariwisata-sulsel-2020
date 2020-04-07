<!DOCTYPE html>
<html>
<head>
	<title>Lampiran SK Mutasi Pelaksana</title>

<style type="text/css">
    html * {
        font-family: Arial, Helvetica, sans-serif !important;
    }
    html, body{
        height:100%; margin-top: 30px;
    }
    footer {
        position:absolute;
        bottom:0;
    }
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

<div class="text-center ">
    <img src="public/assets/img/pemprov-bnw.png" style="width: 75px;">
    <p style="margin: 0; padding: 0; font-size: 16px;">PEMERINTAH PROPINSI SULAWESI SELATAN</p>
    <p style="margin: 0; padding: 0; font-size: 26px; font-weight: bold">DINAS KEBUDAYAAN DAN KEPARIWISATAAN</p>
    <p style="margin: 0; padding: 0;">Gedung Mulo Jl. Sudirman No. 23 Telp. (0411) 878912 Fax 872314 MAKASSAR 90133</p>
    <p style="margin: 0; padding: 0;">Homepage: www.Celebestourism.co.id e-mail: disbudpar.provsulsel@gmail.com</p>
    <hr style=" border: 1px black solid; margin-bottom: 3px;">
    <hr style=" border: 2px black solid; margin-top: 0;">

	<div class="c3">
		<h2>NOTA DINAS</h2>
	</div>

	<br>
	<table class="vertical" style="font-size: 0.9rem;">
		<tr>
            <td width="50px;" style="color: white">.</td>
			<td width="100px;">Kepada</td>
			<td width="1px">:</td>
			<td>Yth. Para Kepala Bidang/UPTD, Kepala Seksi/Subag, Lingkup Disbudpar<br>Prov. Sulsel</td>
		</tr>
        <tr>
            <td style="color: white">.</td>
            <td>Dari</td>
            <td>:</td>
            <td>Bapak Kepala Dinas Budpar Prov. Sulsel</td>
        </tr>
        <tr>
            <td style="color: white">.</td>
            <td>Tanggal </td>
            <td>:</td>
            <td><?php
                $date = $sk->tgl_sk;
                $date = str_replace('/', '-', $date);
                $date1 = date("Y-m-d", strtotime($date ));
                echo format_tgl($date1,true);
                ?>
            </td>
        </tr>
        <tr>
            <td style="color: white">.</td>
            <td>Nomor</td>
            <td>:</td>
            <td><?=$sk->no_sk?></td>
        </tr>
        <tr>
            <td style="color: white">.</td>
            <td>Sifat</td>
            <td>:</td>
            <td>Penting</td>
        </tr>
        <tr>
            <td style="color: white">.</td>
            <td>Lampiran</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td style="color: white">.</td>
            <td>Hal</td>
            <td>:</td>
            <td><b>Penempatan Pegawai Pada Disbudpar Prov. Sulsel</b></td>
        </tr>
	</table>
</div>
<hr style=" border: 1px black solid; width: 610px">
<table style=" font-size: 0.9rem;">
	<tr>
        <td width="50px;" style="color: white">.</td>
		<td align="justify"><span style="color: white">.......</span>
            Berdasarkan Analisis Kebutuhan Pegawai pada Dinas Kebudayaan dan Kepariwisataan,
            maka dianggap perlu melakukan pembinaan dan pengembangan karir pegawai untuk membantu kelancaran pekerjaan.
        </td>
        <td width="20px;" style="color: white">.</td>
        <td width="10px;" style="color: white">.</td>
	</tr>
    <?php
    $tmt = $sk->tmt_sk;
    $tmt = str_replace('/', '-', $tmt);
    $tmt1 = date("Y-m-d", strtotime($tmt ));
    ?>
    <tr>
        <td width="50px;" style="color: white">.</td>
        <td align="justify"><span style="color: white">.......</span>
            Sehubungan dengan hal tersebut di atas, maka dengan ini disampaikan kepada saudara(i)
            bahwa terhitung mulai tanggal <?php echo format_tgl($tmt1,true);?> Pegawai Negeri Sipil (PNS) yang namanya tersebut di bawah ini:
        </td>
        <td width="20px;" style="color: white">.</td>
        <td width="10px;" style="color: white">.</td>
    </tr>
</table>

<table class="table" style="min-width: 100%; font-size: 0.9rem; margin-top: 25px;" border="1">
    <thead>
    <tr>
        <th height="50px" width="5%" style="vertical-align : middle;text-align:center;" > No.</th>
        <th height="50px" width="30%" style="vertical-align : middle;text-align:center;" > Nama/NIP</th>
        <th height="50px" style="vertical-align : middle;text-align:center;" > Pangkat/Gol.</th>
        <th height="50px" style="vertical-align : middle;text-align:center;"> Jabatan Lama</th>
        <th height="50px" style="vertical-align : middle;text-align:center;"> Jabatan Baru</th>
    </tr>
<!--    <tr style="background-color: #86BC8B;">-->
<!--        <th style="vertical-align : middle;text-align:center;">1</th>-->
<!--        <th style="vertical-align : middle;text-align:center;">2</th>-->
<!--        <th style="vertical-align : middle;text-align:center;">3</th>-->
<!--        <th style="vertical-align : middle;text-align:center;">4</th>-->
<!--        <th style="vertical-align : middle;text-align:center;">5</th>-->
<!--    </tr>-->
    </thead>
    <tbody>
    <?php $i=1; foreach ($individu as $b): ?>
        <tr>
            <td align="center"><?=$i++?></td>
            <td>&nbsp; <?=$b->nama?> <br> &nbsp; NIP : <?=$b->nip?></td>
            <td align="center"><?=$b->pangkat_gol?></td>
            <td align="center"><?=$b->jabatan_lama?>,<br> SUB. BAGIAN  <?=$b->satker_lama?>,<br> <?=$b->unker_lama?></td>
            <td align="center"><?=$b->jabatan_baru?>,<br> SUB. BAGIAN <?=$b->satker_baru?>,<br> <?=$b->unker_baru?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<br>
<table style=" font-size: 0.9rem;">
    <tr>
        <td width="50px;" style="color: white">.</td>
        <td align="justify"><span style="color: white">.......</span>
            Demikian disampaikan, atas perhatian bapak/ibu diucapkan terima kasih.
        </td>
        <td width="10px;" style="color: white">.</td>
        <td width="10px;" style="color: white">.</td>
    </tr>
</table>
<br>
<br>
<br>
<br>

<table style="width: 100%; font-size: 0.9rem;" class="text-center">
	<tr>
		<td width="50%">
		</td>
		<td width="50%">
			<p><b>KEPALA DINAS<b></p>
			<br>
			<br>
			<br>
			<br>
			<p style="text-decoration: underline; font-weight: bold;">Ir. DENNY IRAWAN SAARDI, M.Si</p>
            <p>Pangkat : Pembina Utama Muda</p>
            <p>NIP. 196206241993031003</p>
		</td>
	</tr>
</table>

<footer>
    <p style="font-weight: bold; font-size: 0.9rem;"><i>Nodis/Pergub Nomor 33/2010 ttg. Tata Naskah</i></p>
</footer>
</body>
</html>
