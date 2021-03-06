<style type="text/css">
  .google-visualization-orgchart-node.google-visualization-orgchart-node-medium{
    min-width: 150px;
  }
</style>
  <div tabindex='1' id="ajaxResult">
    <p>tampilan tabel organisasi</p>

    <div id="chart_div" style="overflow: scroll;"></div>
  
  </div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

    var satuan_kerja = '<?=$this->session->fullname?>'
    var html = "";

     google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

       $.ajax({
            url : '<?=skpd_url("DataOrganisasi/get_data_pegawai/")?>',
            method : "GET",
            data : {satuan_kerja : satuan_kerja},
            complete:function(data){
              var json = JSON.parse(data.responseText)

              var satuan_kerja = ""

              var number = 0
              var rank = []
              var nama_rank = []

              var tingkat = ""
              var anggota = ""
              json.forEach(function(entry){

                var nama = entry.nama_lengkap.replace("'", " ")
                anggota += "[{v:'" + nama + "', f:'"+nama+"'}, '" + (parseInt(entry.rank)+1) + "', ''],";

                if(number == entry.rank){
                  number = number
                }else{
                  number = number + 1
                  rank.push(number)
                  nama_rank.push(entry.nama_pangkat)
                }
                
                // if(entry.rank === undefined || entry.rank === null){
                //   entry.rank = ''
                // }
                // if(entry.rank == ''){
                //   var ranks = ''
                // }else{
                //   var ranks = (parseInt(entry.rank)+1)
                // }
                // var nama = entry.nama_lengkap.replace("'", " ")
                // html += "[{v:'" + entry.rank + "', f:'"+nama+"'}, '" + entry.rank + "', ''],";
                // html += "['" + entry.rank + "', '" + entry.rank + "', ''],";
              })

              satuan_kerja = "[{v:'1', f:'<?=$this->session->fullname?>'}, '', ''],"

              for(x in rank){
                tingkat += "[{v:'" + parseInt(rank[x]+1) + "', f:'"+nama_rank[x]+"'}, '1', ''],"
              }
              html = "[" + satuan_kerja + tingkat + anggota + "]"

              // html = "[{v:'1', f:'Urutan Sktruktur Organisasi'}, '"+satuan_kerja+"', ''],"+html;
              // html = "["+html+"]";

              var data = new google.visualization.DataTable();
              data.addColumn('string', 'Name');
              data.addColumn('string', 'Manager');
              data.addColumn('string', 'ToolTip');
               userlist = eval(html);
              // For each orgchart box, provide the name, manager, and tooltip to show.
              data.addRows(userlist);

              // Create the chart.
              var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
              // Draw the chart, setting the allowHtml option to true for the tooltips.
              chart.draw(data, {allowHtml:true, size:'medium', allowCollapse:true});

          }
        })


      }

</script>



<!-- <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          ['Mike','', 'The President'],
            ['Jim','Mike', 'VP'],
            ['Alice', 'Mike', ''],
             ['Rifqi', 'Mike', ''],

          ['Bob', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', ''],
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }
   </script> -->