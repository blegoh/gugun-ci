
 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>

                      <?php
                     

                     
                    foreach ($data->result() as $row) {

                      ?>
                        <td><?php echo $row->nik ?></td>
                        <td><?php echo $row->nama_siswa ?></td>
                        <td><?php echo $row->kelas ?></td>
                        
                      </tr>
                        <?php } ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->