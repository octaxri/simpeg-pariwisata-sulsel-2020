<div class="row">
    <div class="col-md-12">
        <!-- PANEL DEFAULT -->
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-sm-4">
                      <label class=" control-label">Bidang/Bagian</label>
                      <select id="jenis_dokumen" class="form-control select-2">
                        <option value="all">-Semua Dokumen-</option>
                        <?php foreach ($data_dokumen as $data_dokumen1): ?>
                          <option value="<?=$data_dokumen1->id?>"><?=$data_dokumen1->jenis_dokumen?></option>
                        <?php endforeach ?>
                      </select>
                    </div>                    
                    <div class="col-md-12">

                        <table id="dokumen_pegawai" class="table" style="min-width: 100%;">
                            <thead>
                                <tr>
                                    <th width="50px;">No.</th>
                                    <th>Nama Dokumen</th>
                                    <th width="15%"></th>
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
            <table class="table" id="tambah_data_dokumen">
                <thead>
                    <tr>
                        <td>Jenis Dokumen</td>
                        <td>Nama Dokumen</td>
                        <td>File (PDF)</td>
                        <td width="50px"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="dokumen_id[]" class="form-control select-2 jenis_dokumen">
                                <?php foreach ($data_dokumen as $data_dokumen): ?>
                                  <option value="<?=$data_dokumen->id?>"><?=$data_dokumen->jenis_dokumen?></option>
                                <?php endforeach ?>
                              </select>                        
                        </td>
                        <td>
                           <input type="text" name="nama_dokumen[]" class="form-control" style="width: 100%;"> 
                        </td>
                        <td>
                            <input type="file" name="userfile0">
                        </td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><a class="btn btn-primary add_kolom" style="width: 100%;">Tambah Kolom</a></td>
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
                "url": '<?=skpd_url("Ajax/get_data")?>',
                "type": "POST",
                "data": {
                    "table" : '<?=$table?>',
                    "dokumen_id" : dokumen_id,
                    "nip" : '<?=$this->input->get('nip')?>',
                    "select" : 'id, nama_dokumen' // yang perlu di setup
                },
            },
           "columns": [ // yang perlu di setup
                {"data": "id"},
                {"data": "nama_dokumen"},
                { "data": null, "defaultContent": "<button class='btn btn-xs btn-success lihat_<?=$table?>'><i class='fa fa-eye'></i>Lihat</button> <button class='btn btn-xs btn-primary edit_<?=$table?>'><i class='fa fa-pencil'></i>Edit</button> <button class='btn btn-xs btn-danger delete_<?=$table?>' data-type='delete' data-table='<?=$table?>'><i class='fa fa-trash'></i>Hapus</button>"}
            ],
            dom: 'Bfrtip',
            buttons: [
                {
                    text: '<i class="fa fa-plus"></i>&nbsp;Tambah Data Dokumen',
                    className: 'btn btn-primary btn-sm',
                    action: function ( e, dt, node, config ) {
                        $("#tambah_dokumen_pegawai_modal").modal('show')
                    }
                }
            ],
            // "order": [[ 9, "asc" ]],
            scrollX:        true,
            scrollCollapse: true,
          }); 

            $("#satunya").on('submit', function(e){
                    e.preventDefault()
                    var table = $(this).data('table')
                    var type = $(this).data('type')
                    var nip = '<?=$this->input->get('nip')?>'

                    var formData = new FormData(this)
                    formData.append('type', type)
                    formData.append('nip', nip)

                    $.ajax({
                        url : '<?=skpd_url('Ajax/data/')?>' + table,
                        method : "POST",
                        data : formData,
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        complete:function(data){
                            json = JSON.parse(data.responseText)
                            if(json.stat == 'sukses'){
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

            $(".update_data_dokumen").on('submit', function(e){
                    e.preventDefault()

                    var nip = '<?=$this->input->get('nip')?>'

                    var formData = new FormData(this)
                    formData.append('nip', nip)
                    $.ajax({
                        url : '<?=skpd_url('Ajax/update_data_dokumen')?>',
                        method : "POST",
                        data : formData,
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        complete:function(data){
                            json = JSON.parse(data.responseText)
                            if(json.stat == 'sukses'){
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

            // yang perlu di setup
            $('#<?=$table?> tbody').on( 'click', '.edit_<?=$table?>', function () {
                var edit = data_dokumen.row( $(this).parents('tr') ).data();
                var html = ""
                for(x in edit){
                    if(x == 'id'){
                        type = 'hidden'
                    }else{
                        type = 'text'
                    }
                    html += 
                    '<div class="form-group col-sm-12 '+type+'">' +
                        '<label class="col-sm-3 control-label">'+x+'</label>' +
                        '<div class="col-sm-9">' +
                          '<input type="'+type+'" name="'+x+'" class="form-control" value="'+edit[x]+'">' +
                        '</div>' +
                      '</div>' }

                    html = html + '<div class="form-group col-sm-12 '+type+'">' +
                        '<label class="col-sm-3 control-label">Ganti file</label>' +
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
                    url : '<?=skpd_url("ReferensiAjax/data/")?><?=$table?>',
                    method : "POST",
                    data : {
                        type : type,
                        id : delet['id']
                    },
                    complete:function(data){
                        json = JSON.parse(data.responseText)
                        if(json.stat == 'sukses'){
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
                replace = edit.nama_dokumen.replace(" ", "_")
                window.open("<?=site_url()?>" + 'public/uploads/dokumen/<?=$nip?>/' + replace + '.pdf')
            })

            $(document).on('click', '.add_kolom', function(){
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
                '</td><td><a class="delete-kolom">X</a></td> </tr>';
                $("#tambah_data_dokumen tbody").append(html)
                $("select").select2()
            })

            $(document).on('click', '.delete-kolom', function(){
                $(this).parent().parent().empty()
            })

    }

})

</script>

