<!DOCTYPE html>
<html>
<head>
    <title>Lampiran SK Mutasi Pelaksana</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css" >
        html * {
            font-family: Arial, Helvetica, sans-serif !important;
            line-height: 1.5;
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
            border: 1px solid black;
            font-size: 0.9rem;
        }

        table td{
            vertical-align:top;
        }

        @page {
            size: legal;
            margin: 8%;
        }

        /*css style agar footernya nempel terus seperti aku dan kamu uncchhh*/
        footer {
            position: fixed;
            height: 20px;
            bottom: 0px;
            left: 8%;
            right:  8%;
            margin-bottom: 0px;
        }
        body {
            margin-bottom:8px;
        }

    </style>

</head>
<body>
<div id="div">
    <div>
        <div class="text-center">
            <img src="<?=assets_url('img').'pemprov-bnw.png'?>" style="width: 75px;">
            <p style="margin: 0; padding: 0; font-size: 1rem;">PEMERINTAH PROPINSI SULAWESI SELATAN</p>
            <p style="margin: 0; padding: 0; font-size: 1.4rem; font-weight: bold">DINAS KEBUDAYAAN DAN KEPARIWISATAAN</p>
            <p style="margin: 0; padding: 0; font-size: 0.7rem">Gedung Mulo Jl. Sudirman No. 23 Telp. (0411) 878912 Fax 872314 MAKASSAR 90133</p>
            <p style="margin: 0; padding: 0; font-size: 0.7rem">Homepage: www.Celebestourism.co.id e-mail: disbudpar.provsulsel@gmail.com</p>
            <hr style=" border: 1px black solid; margin-bottom: 3px;">
            <hr style=" border: 2px black solid; margin-top: 0;">
        </div>

        <div class="c3 text-center">
            <h2>NOTA DINAS</h2>
        </div>

        <br>
        <table class="vertical" style="font-size: 0.9rem;">
            <tr>
                <td width="50px;" style="color: white"></td>
                <td width="100px;">Kepada</td>
                <td width="1px">:</td>
                <td>Yth. Para Kepala Bidang/UPTD, Kepala Seksi/Subag, Lingkup Disbudpar<br>Prov. Sulsel</td>
            </tr>
            <tr>
                <td style="color: white"></td>
                <td>Dari</td>
                <td>:</td>
                <td>Bapak Kepala Dinas Budpar Prov. Sulsel</td>
            </tr>
            <tr>
                <td style="color: white"></td>
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
                <td style="color: white"></td>
                <td>Nomor</td>
                <td>:</td>
                <td><?=$sk->no_sk?></td>
            </tr>
            <tr>
                <td style="color: white"></td>
                <td>Sifat</td>
                <td>:</td>
                <td>Penting</td>
            </tr>
            <tr>
                <td style="color: white"></td>
                <td>Lampiran</td>
                <td>:</td>
                <td>-</td>
            </tr>
            <tr>
                <td style="color: white"></td>
                <td>Hal</td>
                <td>:</td>
                <td><b>Penempatan Pegawai Pada Disbudpar Prov. Sulsel</b></td>
            </tr>
        </table>
    </div>
    <hr style=" border: 1px black solid; width: 585px; margin-left: 55px;">
    <table style=" font-size: 0.9rem;">
        <tr>
            <td width="50px;" style="color: white"></td>
            <td align="justify"><span style="color: transparent">....</span>
                Berdasarkan Analisis Kebutuhan Pegawai pada Dinas Kebudayaan dan Kepariwisataan,
                maka dianggap perlu melakukan pembinaan dan pengembangan karir pegawai untuk membantu kelancaran pekerjaan.
            </td>
            <td width="20px;" style="color: white"></td>
        </tr>
        <?php
        $tmt = $sk->tmt_sk;
        $tmt = str_replace('/', '-', $tmt);
        $tmt1 = date("Y-m-d", strtotime($tmt ));
        ?>
        <tr>
            <td width="50px;" style="color: white"></td>
            <td align="justify"><span style="color: transparent">....</span>
                Sehubungan dengan hal tersebut di atas, maka dengan ini disampaikan kepada saudara(i)
                bahwa terhitung mulai tanggal <?php echo format_tgl($tmt1,true);?> Pegawai Negeri Sipil (PNS) yang namanya tersebut di bawah ini:
            </td>
            <td width="20px;" style="color: white"></td>
        </tr>
    </table>
    <hr style="margin-bottom: 0px; border: 0px;">
    <table class="table" border="1">
        <thead style="border: 1px solid black">
        <tr >
            <th height="50px" style="vertical-align : middle;text-align:center; border: 1px solid black " > No.</th>
            <th height="50px" width="32%" style="vertical-align : middle;text-align:center; border: 1px solid black" > Nama/NIP</th>
            <th height="50px" width="18%" style="vertical-align : middle;text-align:center; border: 1px solid black" > Pangkat/Gol.</th>
            <th height="50px" width="22%" style="vertical-align : middle;text-align:center; border: 1px solid black"> Jabatan Lama</th>
            <th height="50px" width="22%" style="vertical-align : middle;text-align:center; border: 1px solid black"> Jabatan Baru</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach ($individu as $b): ?>
            <tr>
                <td style="padding: 6px; border-right: 1px solid black" align="center"><?=$i++?></td>
                <td style="padding: 6px; border-right: 1px solid black"><?=$b->nama?> <br>NIP : <?=$b->nip?></td>
                <td style="padding: 6px; border-right: 1px solid black" align="center"><?=$b->pangkat_gol?></td>
                <td style="padding: 6px; border-right: 1px solid black" align="center"><?=$b->jabatan_lama?>, SUB. BAGIAN  <?=$b->satker_lama?>, <?=$b->unker_lama?></td>
                <td style="padding: 6px; border-right: 1px solid black" align="center"><?=$b->jabatan_baru?>, SUB. BAGIAN <?=$b->satker_baru?>, <?=$b->unker_baru?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<div>
    <br>
    <table style=" font-size: 0.9rem;">
        <tr>
            <td width="50px;" style="color: white"></td>
            <td align="justify"><span style="color: transparent">.....</span>
                Demikian disampaikan, atas perhatian bapak/ibu diucapkan terima kasih.
            </td>
            <td width="20px;" style="color: white"></td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width: 100%; font-size: 0.9rem;" class="text-center">
        <tr>
            <td width="50%">
            </td>
            <td width="50%">
                <p><b>KEPALA DINAS</b></p>
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
</div>
</body>
</html>

<script type="text/javascript">

    $(document).ready(function () {

        var height = $("#div").height();
        console.log(height);
        if (height >= 952) {
            if (height <= 1442) {
                $("#div").css('margin-bottom', '0px');
            } else if ((height > 1442) && (height <= 1560)) {
                $("#div").css('margin-bottom', '260px');
            } else if ((height > 1560) && (height <= 2066)) {
                $("#div").css('margin-bottom', '0px');
            } else if ((height > 2066) && (height <= 2239)) {
                $("#div").css('margin-bottom', '260px');
            } else if ((height > 2239) && (height <= 2648)) {
                $("#div").css('margin-bottom', '0px');
            } else if ((height > 2648) && (height <= 2677)) {
                $("#div").css('margin-bottom', '260px');
            } else if ((height > 2677) && (height <= 3086)) {
                $("#div").css('margin-bottom', '0px');
            } else if ((height > 3086) && (height <= 3225)) {
                $("#div").css('margin-bottom', '260px');
            } else if ((height > 3225) && (height <= 3689)) {
                $("#div").css('margin-bottom', '0px');
            }
        }else if (height < 952) {
            if (height <= 797) {
                $("#div").css('margin-bottom', '0px');
            } else if (height > 797) {
                $("#div").css('margin-bottom', '260px');
            }
        }

        window.print();
    });

</script>