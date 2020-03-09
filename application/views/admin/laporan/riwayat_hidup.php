<hr>
<div class="row">
<div class="col-md-12">
              <!-- PANEL DEFAULT -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data Riwayat Hidup</h3>
                <div class="right">
                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="identifier" placeholder="Masukkan NIP/Nama Pegawai">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <button class="btn btn-primary btn-sm" id="filter" type="button"><i class="fa fa-search"></i>Cari</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


    <div id="ajaxResult" class="col-md-12">
              <!-- PANEL DEFAULT -->
    </div>

</div>
<script type="text/javascript">
    $("#filter").on('click', function(event) {
    $.ajax({
        type: 'POST',
        url: '<?=admin_url("Laporan/FilterAjax/")?>',
        data: {
          identifier: $('#identifier').val()
        }
        }).done(function(response) {
            if (response.success) {
                $("#ajaxResult").html(response.template);
            }else{
              var div = `
                    <div class="panel panel-headline" align="center">
                        <div class="panel-heading">
                            <h4 class="panel-title">Data Tidak Ditemukan</h4>
                        </div>
                    </div>
                `;
                $("#ajaxResult").html(div);
            }
        });
});
</script>
