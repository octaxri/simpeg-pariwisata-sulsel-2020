<div class="panel">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<a href="<?=skpd_url('DataOrganisasi')?>" class="btn btn-primary btn-sm">Kembali</a>
				<div id="chart_div"></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

	  google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {

	        $.ajax({
	        	url : '<?=skpd_url("DataOrganisasi/get_data_organisasi")?>',
	        	method : "GET",
	        	data : {
	        		table : "<?=$table?>",
	        		satker : "<?=$satker?>"
	        	},
	        	complete:function(data) {
	        		json = JSON.parse(data.responseText)

	        		html = ""

	        		json.forEach(function(entry){
	        			if(entry.parent != 0){
	        				if(entry.parent == null){
	        					html += "[{v:'" + entry.id + "', f:'"+entry.jabatan+"<div>"+entry.nama_lengkap+"</div>'}, '<?=$this->session->fullname?>', ''],"
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
	        	}
	        })

	      }

   </script>