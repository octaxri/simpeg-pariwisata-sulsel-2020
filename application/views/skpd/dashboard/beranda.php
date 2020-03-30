<h2 align="center">Statistik Pegawai</h2>
<hr>
<!-- OVERVIEW -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-metric_1 animate">
                    <span class="icon-wrapper custom-bg-orange"><i class="fa fa-area-chart"></i></span>
                    <div class="right">
                        <span class="value"><?=$total_pegawai?> <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                        <span class="title">Total Pegawai
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-metric_1 animate">
                    <span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-area-chart"></i></span>
                    <div class="right">
                        <span class="value"><?=$data_pegawai_pns?><i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                        <span class="title">Pegawai PNS
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-metric_1 animate">
                    <span class="icon-wrapper custom-bg-blue2"><i class="fa fa-area-chart"></i></span>
                    <div class="right">
                        <span class="value"><?=$data_pegawai_cpns?> <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                        <span class="title">Pegawai CPNS
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-metric_1 animate">
                    <span class="icon-wrapper custom-bg-purple"><i class="fa fa-area-chart"></i></span>
                    <div class="right">
                        <span class="value"><?=$data_pegawai_pensiun?> <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                        <span class="title">Pegawai Pensiun
                        </span>
                    </div>
                </div>
            </div>
        </div>
<!-- END OVERVIEW -->
<div class="row">
    <!-- <div class="col-md-12"> -->
        <!-- <div class="col-md-12"> -->
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Statistik Berdasarkan Jenis Kelamin</h3>
                    </div>
                    <div class="panel-body">
                        <!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
                        <canvas id="donut-chart-jeniskelamin" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Statistik Berdasarkan Pendidikan Terakhir</h3>
                    </div>
                    <div class="panel-body">
                        <!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
                        <canvas id="donut-chart-pendidikan" height="150"></canvas>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Statistik Berdasarkan Golongan</h3>
                </div>
                <div class="panel-body">
                    <!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
                    <canvas id="donut-chart-golongan" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Statistik Berdasarkan Eselon</h3>
                </div>
                <div class="panel-body">
                    <!-- <div id="demo-bar-chart" class="ct-chart"></div> -->
                    <canvas id="donut-chart-eselon" height="150"></canvas>
                </div>
            </div>
        </div>



    <!-- </div> -->
<!--     <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Statistik Berdasarkan Pendidikan</h3>
            </div>
            <div class="panel-body">
                <div id="demo-bar-chart2" class="ct-chart"></div>
            </div>
        </div>
    </div> -->
</div>

<script>
    $(document).ready(function(){
        $(function() {
            var options;
            var scalesOptions = {
                xAxes: [
                {
                    gridLines:
                    {
                        display: false
                    }
                }],
                yAxes: [
                {
                    gridLines:
                    {
                        color: '#eff3f6',
                        drawBorder: false,
                    },
                }]
            };

            var data_eselon = {
                labels: ['I/a', 'I/b', 'II/a', 'II/b', 'III/a', 'III/b', 'IV/a', 'IV/b', 'Non-Eselon'],
                series: [
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'I.a', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'I.b', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'II.a', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'II.b', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'III.a', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'III.b', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'IV.a', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'IV.b', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('eselon' => 'Non-Eselon', 'satuan_kerja' => $this->session->fullname))?>
                ]

            };

            var data_jeniskelamin = {
                labels: ['Pria', 'Wanita'],
                series: [
                    <?=$this->crud->cw('data_pegawai', array('jenis_kelamin' => 'Pria', 'satuan_kerja' => $this->session->fullname))?>,
                    <?=$this->crud->cw('data_pegawai', array('jenis_kelamin' => 'Wanita', 'satuan_kerja' => $this->session->fullname))?>
            ]};

            var data_pendidikan = {
                labels: ['SD', 'SMP', 'SMA', 'D-I', 'D-II', 'D-III', 'S1/D-IV', 'S2', 'S3'],
                series: [
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='SD' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='SMP' AND riwayat_pendidikan.saat_ini ='1'")?>, 
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='SMA' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='D-I' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='D-II' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='D-III' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='S1/D-IV' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='S2' AND riwayat_pendidikan.saat_ini ='1'")?>,
                <?=$this->crud->qa("SELECT * FROM `riwayat_pendidikan` INNER JOIN `data_pegawai` on data_pegawai.nip = riwayat_pendidikan.nip WHERE data_pegawai.satuan_kerja = '".$this->session->fullname."' AND riwayat_pendidikan.tingkat ='S3' AND riwayat_pendidikan.saat_ini ='1'")?>

                ]
            };

            var data_golongan = {
                labels: ['I/A', 'I/B', 'I/C', 'I/D','II/A', 'II/B', 'II/C', 'II/D', 'III/A', 'III/B', 'III/C', 'III/D', 'IV/A', 'IV/B', 'IV/C', 'IV/D', 'IV/E'],
                series: [
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='A'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='B'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='C'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='I' AND data_golongan.nama_ruang ='D'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='A'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='B'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='C'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='II' AND data_golongan.nama_ruang ='D'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='A'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='B'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='C'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='III' AND data_golongan.nama_ruang ='D'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='A'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='B'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='C'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='D'")?>,
                <?=$this->crud->qa("SELECT * FROM `data_pegawai` INNER JOIN `data_golongan` on data_pegawai.id_pangkat = data_golongan.id_golongan WHERE `satuan_kerja` = '".$this->session->fullname."' AND data_golongan.nama_golongan ='IV' AND data_golongan.nama_ruang ='E'")?>

            ]};

            var ctxDonutChart = document.getElementById("donut-chart-golongan").getContext("2d");
            var ctxDonutChartEselon = document.getElementById("donut-chart-eselon").getContext("2d");
            var ctxDonutChartJenisKelamin = document.getElementById("donut-chart-jeniskelamin").getContext("2d");
            var ctxDonutChartPendidikan = document.getElementById("donut-chart-pendidikan").getContext("2d");


            var donutChartEselon = new Chart(ctxDonutChartEselon,
            {
                type: 'bar',
                data:
                {
                    labels: data_eselon.labels,
                    datasets: [
                        {
                            data: data_eselon.series,
                            backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', ],
                            label: 'Total Data',
                            borderColor: 'transparent',
                            backgroundColor: 'rgba(1,279,148,.50)'
                        }
                    ]
                },
                options:
                {
                    responsive: true,
                    scales: scalesOptions,
                }
            });

            var donutChartJenisKelamin = new Chart(ctxDonutChartJenisKelamin,
            {
                type: 'pie',
                data:
                {
                    labels: data_jeniskelamin.labels,
                    datasets: [
                        {
                            data: data_jeniskelamin.series,
                            backgroundColor: ['#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', ],
                        }
                    ]
                },
                options:
                {
                    responsive: true,
                    legend:
                    {
                        position: 'left',
                    },
                }
            });

            var donutChartPendidikan = new Chart(ctxDonutChartPendidikan,
            {
                type: 'radar',
                data:
                {
                    labels: data_pendidikan.labels,
                    datasets: [
                        {
                            data: data_pendidikan.series,
                            label: 'Pendidikan',
                            // backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E', '#D29DBA','#A54GD8','#98D53G'],
                            backgroundColor: 'rgba(248,155,2,0.50)',
                            borderColor: 'rgb(248,155,2)',
                            pointBackgroundColor: 'rgb(248,155,2)',
                            borderWidth: 2
                        }
                    ]
                },
                options:
                {
                    legend:
                    {
                        position: 'right'
                    },
                    scale:
                    {
                        ticks:
                        {
                            beginAtZero: true
                        }
                    },
                }
            });

             var donutChart = new Chart(ctxDonutChart,
            {
                type: 'bar',
                data:
                {
                    labels: data_golongan.labels,
                    datasets: [
                        {
                            data: data_golongan.series,
                            backgroundColor: ['#4A90E2', '#7CAC25', '#FF4402', '#AB7DF6', '#F3BB23', '#20B2AA', '#1DBB8E'],
                            label: 'Total Data',
                            borderColor: 'transparent',
                            backgroundColor: 'rgba(1,153,248,.50)'
                        }
                    ]
                },
                options:
                {
                    responsive: true,
                    scales: scalesOptions,
                }
            });






        // // bar chart
        // options = {
        //     height: "300px",
        //     axisX: {
        //         showGrid: false
        //     },
        // };

        // new Chartist.Bar('#demo-bar-chart', data, options);



        // new Chartist.Bar('#demo-bar-chart2', data2, options);

    });
    });
    
</script>
