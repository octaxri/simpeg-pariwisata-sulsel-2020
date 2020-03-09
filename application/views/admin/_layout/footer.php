    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2020 <a href="#" target="_blank" style="text-transform: uppercase">DINAS PARIWISATA SULSEL </a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<div class="form-result ajax-wrap" id="ajax-loading">
  <div class="ajax-bg"></div>
  <div class="ajax-content text-center">
    <h4 class="ajax-title"><img src="<?=assets_url()?>img/loading.gif"></h4>
    <p>Mohon Menunggu. Proses sedang berjalan...<p>
</div>
</div>
<!-- Javascript -->
<script src="<?=assets_url()?>vendor/raphael/raphael.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery-mapael/js/jquery.mapael.min.js"></script>
<script src="<?=assets_url()?>vendor/jquery-mapael/js/maps/world_countries.min.js"></script>
<script src="<?=assets_url()?>vendor/datatables/js-main/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script src="<?=assets_url()?>vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
<script src="<?=assets_url()?>vendor/datatables-tabletools/js/dataTables.tableTools.js"></script>
<script src="<?=assets_url()?>vendor/datatables-fixedColumns/js/dataTables.fixedColumns.min.js"></script>
<script src="<?=assets_url()?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?=assets_url()?>vendor/sweetalert/sweetalert.min.js"></script>
<script src="<?=assets_url()?>vendor/select2/js/select2.min.js"></script>
<script src="<?=assets_url()?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?=assets_url()?>vendor/jstree/jstree.js"></script>
<link rel="stylesheet" type="text/css" href="<?=assets_url()?>css/ajax-loader.css">

<script>

    $(document).ajaxStart(function() {
        $( "#ajax-loading" ).fadeIn(0);
    });

    $(document).ajaxStop(function() {
        $( "#ajax-loading" ).fadeOut(0);
    });

    $(document).ready(function() {
        $('.select-2').select2({
            width: 'resolve',
            placeholder: "- Pilih -",
            triggerChange: true,
            allowClear: true,
            tags : true,
            createTag: function(newTag) {
                return {
                    id: newTag.term,
                    text: newTag.term + ' (Buat Baru)'
                };
            }
        });

        $(' #multiselect2').multiselect(
        {
            maxHeight: 300
        });


        $('.onlyYears').datepicker({
            minViewMode: 2,
            format: 'yyyy'
        });

        $('.date').datepicker({
            format: 'dd/mm/yyyy'
        });

        var exportTable = $('#datatable-data-export').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            },
            scrollX: true,
            responsive: true,
            "autoWidth": true,
            sDom: "T<'clearfix'>" +
            "<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
            "t" +
            "<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "tableTools": {
                "sSwfPath": "<?=assets_url()?>vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
        });

        var Exnormal = $('.datatable-Exnormal').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            },
            scrollX: true,
            responsive: true,
            "autoWidth": true
        });

        var normal = $('.datatable-normal').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            },
            scrollX: true,
            responsive: true,
            "autoWidth": true,
            sDom: "T<'clearfix'>" +
            "<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
            "t" +
            "<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "tableTools": {
                "sSwfPath": "<?=assets_url()?>vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
        });

        var otable = $('.datatable').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            },
            scrollX: true,
            responsive: true,
            "autoWidth": true,
            scrollCollapse: true,
            paging: false,
            sDom: "RC" +
            "t" +
            "<'row'<'col-sm-6'><'col-sm-6'p>>"
        });


        var tablenormal = $('.tablenormal ').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            }

        });

        var table = $('#example').DataTable( {
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false
        } );

        var dkp = $('#dkp-table').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "ajax": {
                "url": '<?=admin_url('MigrasiPegawai/getDataDKP')?>',
                "type": "POST"
            },
            "columns": [
                { data: "gambar", title: "Foto Pegawai" },
                { data: "nama_lengkap", title: "Nama Lengkap" },
                { data: "nip", title: "NIP" },
                { data: "jenis_kelamin", title: "Jenis Kelamin" },
                { data: "jenis_jabatan", title: "Jenis Jabatan" },
                { data: "jenis_pangkat", title: "Pangkat/Golongan/Ruang" },
                { data: "tmt_jabatan", title: "TMT Jabatan" },
                { data: "total_waktu", title: "Total Waktu Sejak TMT Pangkat" }
            ],
            "columnDefs" : [
                { targets : [0],
                    render : function(data, type, row) {
                        return '<img src="<?=upload_url('fotopegawai')?>'+data+'" class="img-thumbnail loaded-image" style="width:60px; height: 70px;">'
                    }
                }
            ],
            "scrollX": true,
            "responsive": true,
            "autoWidth": true,
            // "sDom": "T<'clearfix'>" +
            // "<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
            // "t" +
            // "<'row'<'col-sm-6'i><'col-sm-6'p>>",
            // "tableTools": {
            //     "sSwfPath": "<?=assets_url()?>vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            // },
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            }
        });
        // dkp.on('draw.dt', function () {
        //     var PageInfo = $('#dkp-table').DataTable().page.info();
        //     dkp.column(0, { page: 'current' }).nodes().each(function (cell, i) {
        //         cell.innerHTML = i + 1 + PageInfo.start;
        //     });
        // });

    });
</script>
</body>

</html>
