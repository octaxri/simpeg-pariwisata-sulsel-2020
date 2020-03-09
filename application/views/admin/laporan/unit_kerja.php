          <div class="row">
            <div class="col-md-12">
              <!-- PANEL DEFAULT -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Daftar Subbidang/Seksi</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <table id="datatable-data-export" style="min-width: 100%;" class="table table-striped table-hover table-bordered">
                        <thead>
                          <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Subbidang/Seksi</th>
                            <th colspan="3">Jumlah Pegawai</th>
                          </tr>
                          <tr>
                            <th>PNS</th>
                            <th>CPNS</th>
                            <th>Pensiun</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; foreach ($data_skpd as $data_skpd): ?>
                            <tr>
                            <td><?=$i?></td>
                            <td><?=$data_skpd->satuan_kerja?></td>
                            <td>105</td>
                            <td>67</td>
                            <td>12</td>
                          </tr>
                        <?php $i++; endforeach ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END PANEL DEFAULT -->
            </div>
          </div>
