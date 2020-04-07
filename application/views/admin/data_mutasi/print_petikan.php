<!DOCTYPE html>
<html>
<head>
    <title>Laporan Petikan SK Kolektif</title>

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

        .table, .th, .td {
            border: 1px solid black;
        }
    </style>

</head>
<body>

<div class="text-center">
    <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'./public/assets/img/pancasila.jpg';?>" style="width: 75px;">
    <h1 class="c1">BUPATI WAKATOBI</h1>
    <hr size="4px">

    <h2 class="c2">PETIKAN</h2>

    <div class="c3">
        <p>KEPUTUSAN BUPATI WAKATOBI</p>
        <p style="text-transform: uppercase;">NOMOR <?=$sk[0]->no_sk?></p>
        <p style="letter-spacing: 10px; margin-top: 10px;">TENTANG</p>
        <p style="text-transform: uppercase;">PEMINDAHAN DAN PENEMPATAN PEGAWAI NEGERI SIPIL <br> LINGKUP PEMERINTAH KABUPATEN WAKTOBI</p>
    </div>

    <h2>BUPATI WAKATOBI</h2>

    <p style="margin-top: 10px;">Menimbang : &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; dst;</p>
    <p style="margin-bottom: 10px;">Mengingat : &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; dst;</p>

    <p><b>MEMUTUSKAN :</b></p>
</div>

<table style="width: 100%; font-size: 0.9rem;">
    <tr>
        <td>
            Menetapkan :
        </td>
    </tr>
    <tr>
        <td>PERTAMA</td>
        <td>:</td>
        <td>
            Memindahakan Pegawai Negeri Sipil Lingkup Pemerintah Kabupaten Wakatobi sebagaimana namanya tercantum dalam lajur 2 dari tempat tugas sebagaimana tercantum dalam lajur 4 dan ditempatkan sebagai tercantum dalam lajur 5 Lampiran Keputusan ini;
        </td>
    </tr>
    <tr>
        <td>KEDUA</td>
        <td>:</td>
        <td>Keputusan ini mulai berlaku sejak tanggal ditetapkan, dengan ketentuan bahwa apabila dikemudian hari ternyata terdapat kekeluruan didalamnya, akan diadakan perubahan dan perbaikan sebagaimana mestinya.</td>
    </tr>
</table>

<p style="margin-top: 10px;"><b>PETIKAN</b> Keputusan ini disampikan kepada :</p>

<ol>
    <li>Yth. Kepala Badan Kepegawaian Negara di Jakarta;</li>
    <li>Yth. Direktur Jenderal Anggaran Departemen Keuangan di Jakarta;</li>
    <li>Yth. Kepala Kantor Regional IV BKN Makassar di Makassar;</li>
    <li>Yth. Gubernur Sulawesi Tenggara di Kendari;</li>
    <li>Yth. Kepala Perum PT. Taspen (Persero) Jl. Mayjen Sutoyo Nomor 55 di Kendari;</li>
    <li>Yth. Kepala Kantor Perbendaharaan Kas Negara Bau-Bau Di Bau-Bau;</li>
    <li>Yth. Kepala Dinas Pendapatan, Pengelolaan Keuangan dan Aset Daerah Kab. Wakatobi di Wangi-Wangi;</li>
    <li>Yth. Pejabat lain yang di pandang perlu;</li>
    <li>Yth. Pegawai Negeri Sipil yang bersangkutan;</li>
    <li>Arsip.-</li>
</ol>

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
            $date = $sk[0]->tgl_sk;
            $date = str_replace('/', '-', $date);
            echo date("d F Y", strtotime($date ));
            ?></td>
    </tr>
</table>

<table style="width: 100%; font-size: 0.9rem;" class="text-center">
    <tr>
        <td width="50%">
            <p style="font-style: italic;">Petikan sesuai dengan aslinya</p>
            <p><b>a. n BUPATI WAKATOBI SEKRETARIS DAERAH KABUPATEN,<b></p>
            <br>
            <br>
            <br>
            <br>
            <p style="text-decoration: underline; font-weight: bold;">MUH. ILYAS ABIBU, SE., MDM</p>
            <p>Pembina Utama Muda, IV/c</p>
            <p>NIP. 1922222222222</p>
        </td>
        <td width="50%">
            <p><b>BUPATI WAKATOBI,<b></p>
            <br>
            <br>
            <br>
            <br>
            <p style="text-decoration: underline; font-weight: bold;"></p>
        </td>
    </tr>
</table>

<p style="margin-top: 25px;"><b>Kepada </b></p>
<p><b>Saudara : <?=$individu[0]->nama?></b></p>
<br>
<table style="width: 100%; font-size: 0.9rem;">
    <tr>
        <td>LAMPIRAN PETIKAN</td>
        <td>:</td>
        <td>
            <p>KEPUTUSAN BUPATI WAKATOBI</p>
        </td>
    </tr>
    <tr>

        <td></td>
        <td></td>
        <td>
            <table style="font-size: 0.9rem;">
                <tr>
                    <td>NOMOR</td>
                    <td>:</td>
                    <td><?=$sk[0]->no_sk?></td>
                </tr>
                <tr>
                    <td>TANGGAL</td>
                    <td>:</td>
                    <td><?php
                        $date = $sk[0]->tgl_sk;
                        $date = str_replace('/', '-', $date);
                        echo date("d F Y", strtotime($date ));
                        ?></td>
                </tr>
                <tr>
                    <td>TENTANG</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="table" style="min-width: 100%; font-size: 0.7rem; margin-top: 25px;" border="1">
    <thead>
    <tr>
        <th width="5%" style="vertical-align : middle;text-align:center; font-size: 0.9rem;" rowspan="2"> NO.</th>
        <th width="15%" style="vertical-align : middle;text-align:center; font-size: 0.9rem;" rowspan="2"> NAMA / NIP</th>
        <th width="15%" style="vertical-align : middle;text-align:center; font-size: 0.9rem;" rowspan="2"> PANGKAT/GOLONGAN/RUANG</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;" colspan="2"> JABATAN</th>
        <th width="10%" style="vertical-align : middle;text-align:center; font-size: 0.9rem;" rowspan="2">KET</th>
    </tr>
    <tr>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">Lama</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">Baru</th>
    </tr>
    <tr style="background-color: #86BC8B;">
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">1</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">2</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">3</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">4</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">5</th>
        <th style="vertical-align : middle;text-align:center; font-size: 0.9rem;">6</th>
    </tr>
    </thead>
    <tbody class="text-center">
    <tr>
        <td>1</td>
        <td><?=$individu[0]->nama?> <br> NIP : <?=$individu[0]->nip?></td>
        <td><?=$individu[0]->pangkat_gol?></td>
        <td>Jabatan <?=$individu[0]->jabatan_lama?> pada Bidang/Bagian <?=$individu[0]->satker_lama?> di Subbidang/Seksi <?=$individu[0]->unker_lama?></td>
        <td>Jabatan <?=$individu[0]->jabatan_baru?> pada Bidang/Bagian <?=$individu[0]->satker_baru?><?=$individu[0]->unker_baru != '' ? 'di Subbidang/Seksi' : '' ?> <?=$individu[0]->unker_baru?></td>
        <td></td>
    </tr>
    </tbody>
</table>

<table style="width: 100%; margin-top: 50px; font-size: 0.9rem;" class="text-center">
    <tr>
        <td width="50%">
            <p style="font-style: italic;">Petikan sesuai dengan aslinya</p>
            <p><b>a. n BUPATI WAKATOBI SEKRETARIS DAERAH KABUPATEN,<b></p>
            <br>
            <br>
            <br>
            <br>
            <p style="text-decoration: underline; font-weight: bold;">MUH. ILYAS ABIBU, SE., MDM</p>
            <p>Pembina Utama Muda, IV/c</p>
            <p>NIP. 1922222222222</p>
        </td>
        <td width="50%">
            <p><b>BUPATI WAKATOBI,<b></p>
            <br>
            <br>
            <br>
            <br>
            <p style="text-decoration: underline; font-weight: bold;"></p>
        </td>
    </tr>
</table>

</body>
</html>
