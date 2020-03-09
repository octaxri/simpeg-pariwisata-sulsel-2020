<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-search"></i> Pencarian Data Organisasi</h3>
        <div class="right">
          <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
          <!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
        </div>
      </div>
      <div class="panel-body">
        <p>Silahkan isi bidang/bagian untuk menampilkan struktur organisasi di setiap bidang/bagian</p>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group col-sm-4">
              <label class=" control-label">Bidang/Bagian</label>
              <select id="satuan_kerja" class="form-control select-2">
                <?php foreach ($data_satker as $data_satker): ?>
                  <option value="<?=$data_satker->id_satker?>"><?=$data_satker->nama_satker?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
        </div>
        <center>
          <button class="btn btn-primary btn-sm" id="filter_tabel" type="button"><i class="fa fa-search"></i>Cari</button>
<!--          <button class="btn btn-danger" type="button"><i class="fa fa-close"></i>Reset</button>-->
        </center>
      </div>
    </div>
  </div>
</div>

<div class="row" id="result">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title"><span id="nama_tabel"></span></h3>
      </div>
      <div class="panel-body">
        <div id="chart_div"></div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">
$("#result").hide()
  $("#filter_tabel").on('click', function(){

    var satker = $("#satuan_kerja").val()
    var nama_satker = $("#satuan_kerja :selected").text()

      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          $.ajax({
            url : '<?=admin_url("DataOrganisasi/get_data_organisasi")?>',
            method : "GET",
            data : {
              table : "<?=$table?>",
              satker : satker
            },
            complete:function(data) {
              json = JSON.parse(data.responseText)

              html = ""

              json.forEach(function(entry){
                if(entry.parent != 0){

                  if(entry.parent == null){
                    html += "[{v:'" + entry.id + "', f:'"+entry.jabatan+"<div>"+entry.nama_lengkap+"</div>'}, '"+ nama_satker +"', ''],"
                  }else{
                    html += "[{v:'" + entry.id + "', f:'"+entry.jabatan+"<div>"+entry.nama_lengkap+"</div>'}, '" + entry.parent + "', ''],"
                  }

                }else{
                  html += "[{v:'" + entry.id + "', f:'"+entry.jabatan+"<div>"+entry.nama_lengkap+"</div>'},  '', ''],"
                }
              })
                html = "[" + html + "]"

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('string', 'parent');
            data.addColumn('string', 'ToolTip');

              userlist = eval(html)
              data.addRows(userlist)

              // Create the chart.
              var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));

              // Draw the chart, setting the allowHtml option to true for the tooltips.
              chart.draw(data, {allowHtml:true});

              if(data.jc.length > 0){
                $("#nama_tabel").text("Struktur Organisasi " + nama_satker)
                $("#result").show()
              }else{
                $("#nama_tabel").text("Struktur Organisasi " + nama_satker)
                $("#chart_div").html("<p class='text-center'>Data tidak ditemukan atau belum ada</p>")
                $("#result").show()
              }


            }
          })

        }
  })

</script>