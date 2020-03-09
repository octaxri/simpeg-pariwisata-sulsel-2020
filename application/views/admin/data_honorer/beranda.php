          <?=($this->session->flashdata('sukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('sukses').'</div>': '')?>
          <?=($this->session->flashdata('gagal') ? '<div class="alert alert-danger fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('gagal').'</div>': '')?>
          <?=($this->session->flashdata('passsukses') ? '<div class="alert alert-success fade in"><button data-dismiss="alert" class="close" type="button">×</button>'.$this->session->flashdata('passsukses').'</div>': '')?>
          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="<?=$table?>" style="min-width: 100%;"  class="table table-bordered">
                        <thead>
                          <tr>
                            <th width="50px;"> ID</th>
                            <th> Nama Honorer</th>
                            <th> NIK</th>
                            <th>  </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data_honorer as $data_honorer): ?>
                          <tr data-id="<?=$data_honorer->nip?>">
                            <td><?=$data_honorer->id?></td>
                            <td><?=$data_honorer->nama?></td>
                            <td><?=$data_honorer->nip?></td>
                            <td>
                              <a class='btn btn-xs btn-primary edit_<?=$table?>' href="<?=admin_url('honorer/edit?id=')?><?=$data_honorer->id?>"><i class="fa fa-pencil"></i>Edit</a>

                              <button class='btn btn-xs btn-danger delete_<?=$table?>' data-type='delete' data-table='<?=$table?>'><i class="fa fa-trash"></i>Hapus</button>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          

<script type="text/javascript">
  $(document).ready(function(){
    data_honorer = $('#<?=$table?>').DataTable({
      dom: 'Bfrtip',
      buttons: [
          {
              text: '<i class="glyphicon glyphicon-plus"></i> Tambah Data Honorer',
              className : 'btn btn-primary btn-sm',
              action: function ( e, dt, node, config ) {
                 window.location.href = "<?=admin_url('honorer/tambah')?>"
              }
          }
      ]      
    })

  $('#<?=$table?> tbody').on( 'click', '.delete_<?=$table?>', function () {
    var delet = data_honorer.row( $(this).parents('tr') ).data();
    var table = $(this).data('table')
    var type = $(this).data('type') 

        $.ajax({
          url : '<?=admin_url("ReferensiAjax/data/")?><?=$table?>',
          method : "POST",
          data : {
            type : type,
            id : delet[0]
          },
          complete:function(data){
            json = JSON.parse(data.responseText)
            if(json.stat == 'sukses'){
              swal(json.stat, json.res, 'success') 
              setTimeout(function(){ location.reload() }, 2000)
            }else{
              swal(json.stat, json.res, 'error')  
            }           
          }

        })
    })

  })
</script>
