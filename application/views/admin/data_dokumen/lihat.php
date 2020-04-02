<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-sm-4">
                      <label class=" control-label">Jenis Dokumen</label>
                      <select id="jenis_dokumen" class="form-control select-2">
                        <option value="all">-Semua Dokumen-</option>
                        <?php foreach ($data_dokumen as $data_dokumen1): ?>
                          <option value="<?=$data_dokumen1->id?>"><?=$data_dokumen1->jenis_dokumen?></option>
                        <?php endforeach ?>
                      </select>
                    </div>                    
                    <div class="col-md-12">
<!--                        <table id="dokumen_pegawai" class="table" style="min-width: 100%;">-->
                            <table style="min-width: 100%;" id="dokumen_pegawai" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px;">No.</th>
                                    <th>Nama Dokumen</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tambah_dokumen_pegawai_modal" class="modal fade " role="dialog">
  <div class="modal-dialog" style="width: 80%;"><!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Tambah Dokumen</h4>
    </div>
      <div class="modal-body">
         
            <form id="satunya" class="form-inline" data-type="insert" data-table="<?=$table?>" autocomplete="off" enctype="multipart/form-data">
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>PERHATIAN!</strong> Inputan dengan tanda <strong style="color: red;">(*)</strong>  , Wajib untuk diisi (<a role="button" data-dismiss="alert" aria-label="Close" >Tutup</a>)
                </div>
            <table class="table" id="tambah_data_dokumen" style="min-width: 100%">
                <thead>
                    <tr>
                        <th>Jenis Dokumen</th>
                        <th>Nama Dokumen <strong style="color: red"> (*)</strong></th></th>
                        <th>File (PDF) <strong style="color: red"> (*)</strong></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="dokumen_id[]" class="form-control select-2 jenis_dokumen" style="height: 20px;" >
                                <?php foreach ($data_dokumen as $data_dokumen): ?>
                                  <option value="<?=$data_dokumen->id?>"><?=$data_dokumen->jenis_dokumen?></option>
                                <?php endforeach ?>
                              </select>                        
                        </td>
                        <td>
                           <input type="text" name="nama_dokumen[]" class="form-control" style="width: 100%;" required>
                        </td>
                        <td>
                            <input type="file" name="userfile0" required>
                        </td>
                        <td style="width: 1px"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><a class="btn btn-primary " id="add_kolom" style="width: 100%;">Tambah Kolom</a></td>
                    </tr>
                </tfoot>
            </table>
                <center>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
                </center>
         </form>
      </div>
    </div>
  </div>
</div>

<div id="edit_dokumen_pegawai_modal" class="modal fade " role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Edit Dokumen</h4>
        </div>
          <div class="modal-body">
            <form class="update_data_dokumen" autocomplete="off">
                <div class="row data-edit">

                </div>
            <center>
                <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Simpan Perubahan</button>
            </center>
            </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
    get()

    $("#jenis_dokumen").on('change', function(){
        get()
    })

    //mengambil dan menampilkan data table
    function get () {

        var dokumen_id = $("#jenis_dokumen").val()
        var data_dokumen = $('#<?=$table?>').DataTable({
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                "sEmptyTable": "Tidak ada data di database"
            },
            destroy: true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": '<?=admin_url("ReferensiAjax/get_data")?>',
                "type": "POST",
                "data": {
                    "table" : '<?=$table?>',
                    "dokumen_id" : dokumen_id,
                    "nip" : '<?=$this->input->get('nip')?>',
                    "select" : 'id, nama_dokumen, file' // yang perlu di setup
                },
            },
           "columns": [ // yang perlu di setup
                {"data": "id", render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;}, "searchable": false, "orderable": false,},
                {"data": "nama_dokumen", "searchable": false, "orderable": false,},
                { "data": null, "searchable": false, "orderable": false, "defaultContent": "<button class='btn btn-xs btn-success lihat_<?=$table?>'><i class='fa fa-eye'></i>Lihat</button> <button class='btn btn-xs btn-primary edit_<?=$table?>'><i class='fa fa-pencil'></i>Edit</button> <button class='btn btn-xs btn-danger delete_<?=$table?>' data-type='delete' data-table='<?=$table?>'><i class='fa fa-trash'></i>Hapus</button>"}
            ],
            dom: 'Bfrtip',
            buttons: [
                {
                    text: '<i class="fa fa-plus"></i>&nbsp;Tambah Dokumen',
                    className: 'btn btn-primary btn-sm tambah_dokumen',
                    action: function ( e, dt, node, config ) {
                        $("#tambah_dokumen_pegawai_modal").modal('show')
                    }
                }
            ],
            // "order": [[ 9, "asc" ]],
            scrollX:        true,
            scrollCollapse: true,
        }); 

        // yang perlu di setup
        $('#<?=$table?> tbody').on( 'click', '.edit_<?=$table?>', function () {
            var edit = data_dokumen.row( $(this).parents('tr') ).data();
            var html = ""
            for(x in edit){
                if(x == 'file') continue;
                if(x == 'id'){
                    type = 'hidden'
                }else{
                    type = 'text'
                }
                html += 
                '<div class="form-group col-sm-12 '+type+'">' +
                    '<label class="col-sm-3 control-label">Nama Dokumen</label>' +
                    '<div class="col-sm-9">' +
                        '<input type="'+type+'" name="'+x+'" class="form-control" value="'+edit[x]+'" required>' +
                    '</div>' +
                    '</div>' }

                html = html + '<div class="form-group col-sm-12 '+type+'">' +
                    '<label class="col-sm-3 control-label">Ganti File (PDF)</label>' +
                    '<div class="col-sm-9">' +
                        '<input type="file" name="userfile" />' +
                    '</div>' +
                    '</div>';

            $(".data-edit").empty().html(html)      
            $("#edit_<?=$table?>_modal").modal('show')
        })

        $('#<?=$table?> tbody').on( 'click', '.delete_<?=$table?>', function () {
            var delet = data_dokumen.row( $(this).parents('tr') ).data();
            var table = $(this).data('table')
            var type = $(this).data('type') 

            $.ajax({
                url : '<?=admin_url("ReferensiAjax/data/")?><?=$table?>',
                method : "POST",
                data : {
                    type : type,
                    id : delet['id']
                },
                complete:function(data){
                    json = JSON.parse(data.responseText)
                    if(json.stat == 'Berhasil'){
                        $('#' + table).DataTable().ajax.reload()
                        $(".modal").modal('hide')
                        $('form').trigger("reset")
                        swal(json.stat, json.res, 'success')    
                    }else{
                        swal(json.stat, json.res, 'error')  
                    }               
                }

            })
        })

        $('#<?=$table?> tbody').on( 'click', '.lihat_<?=$table?>', function () {
            var edit = data_dokumen.row( $(this).parents('tr') ).data();
            replace = edit.file.replace(" ", "_")
            window.open("<?=site_url()?>" + 'public/uploads/dokumen/<?=$nip?>/' + replace)
        })

        $(document).on('click', '.delete-kolom', function(){
            $(this).parent().parent().empty()
        })

    }

    $("#satunya").on('submit', function(e){
        e.preventDefault()
        var table = $(this).data('table')
        var type = $(this).data('type')
        var nip = '<?=$this->input->get('nip')?>'

        var formData = new FormData(this)
        formData.append('type', type)
        formData.append('nip', nip)

        let isValid = true;
        for (var item of formData.entries()) {
            if(typeof item[1] === "undefined" ||  item[1] == null || item[1] == "" || (item[1] instanceof File && item[1].name == "")){
                isValid = false
            }
                
        }
        console.log(isValid)
        if(isValid == false)
            swal("Gagal Simpan", "Tidak boleh ada yang kosong", 'error')
        else
            $.ajax({
                url : '<?=admin_url('referensiAjax/data/')?>' + table,
                method : "POST",
                data : formData,
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                complete:function(data){
                    json = JSON.parse(data.responseText)
                    if(json.stat == 'Berhasil'){
                        $('#' + table).DataTable().ajax.reload()
                        $(".modal").modal('hide')
                        $('form').trigger("reset")
                        swal(json.stat, json.res, 'success')
                    }else{
                        swal(json.stat, json.res, 'error')  
                    }
                }
            })

        $(document).ajaxStop(function(){
            window.location.reload();
        });
    })

    $(document).on('click', '.tambah_dokumen', function(){
        $('#tambah_data_dokumen tbody').find("tr:gt(0)").remove();
    })

    $(".update_data_dokumen").on('submit', function(e){
        e.preventDefault()

        var nip = '<?=$this->input->get('nip')?>'

        var formData = new FormData(this)
        formData.append('nip', nip)
        $.ajax({
            url : '<?=admin_url('referensiAjax/update_data_dokumen')?>',
            method : "POST",
            data : formData,
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            complete:function(data){
                json = JSON.parse(data.responseText)
                if(json.stat == 'Berhasil'){
                    $('#dokumen_pegawai').DataTable().ajax.reload()
                    $(".modal").modal('hide')
                    $('form').trigger("reset")
                    swal(json.stat, json.res, 'success')    
                }else{
                    swal(json.stat, json.res, 'error')  
                }
            }
        })
    })

    $('#add_kolom').click( function(){
        console.log($(this)); 
        count = $("#tambah_data_dokumen tbody tr").length;
        options = $(".jenis_dokumen").html()
        html = '<tr><td>' +
            '<select name="dokumen_id[]" class="form-control select-2 jenis_dokumen">' +
                options +
                '</select>' +                         
        '</td><td>' +
            '<input type="text" name="nama_dokumen[]" class="form-control" style="width: 100%;">' +
        '</td><td>' +
            '<input type="file" id="exampleInputFile" name="userfile'+count+'">' +
        '</td><td style="width: 1px"><a class="delete-kolom btn btn-xs btn-danger"><i class="fa fa-times" aria-hidden="true" style="margin:0px;"></i></a></td> </tr>';
        $("#tambah_data_dokumen tbody").append(html)
        $("select").select2()
    })

})

</script>

