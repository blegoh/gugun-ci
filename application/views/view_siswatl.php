<?php 
  //error_reporting(0);
  echo $nama_wali;
  $sql = "SELECT * FROM tbl_walikelas where nama_login='$nama_wali' ";

    $d=$this->db->query($sql);
    foreach ($d->result() as $ds) {


 ?>
 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa Teknik Listrik</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama Siswa</th>
                        <th>Nama Walikelas</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>

                      <?php
                      $sql = "SELECT * FROM tbl_siswa where kode_walikelas='$ds->kode_walikelas' ";

                    $result=$this->db->query($sql);
                    foreach ($result->result() as $row) {

                      ?>
                        <td>
                        <?php echo $row->nik ?></td>
                        <td>
                        <?php if($row->konfirmasi == '1')
                          {
                            ?>
                            <b style="color: red"><?php echo $row->nama_siswa; ?></b>
                            <?php
                          }else{
                            ?>
                          <?php echo $row->nama_siswa; ?>
                            <?php
                          }
                          ?>
                        </td>
                        <td>
                          <?php echo $row->kode_walikelas; ?>
                        </td>
                        <td>
                          <?php echo $row->kelas; ?>
                        </td>
                        <td>
                          <?php 
                            echo $row->kode_jurusan;
                           ?>
                        </td>
                        <td>
                        
                          <?php if($row->konfirmasi == '1')
                          {
                            ?>
                            Selesai
                            <?php
                          }else{
                            ?>
                          <a href="<?php echo base_url() ?>index.php/from_walikelas_tl/input_nilai/<?php echo $row->nik ?>">PILIH</a>
                            <?php
                          }
                          ?>
                        </td>
                      </tr>
                        <?php } } ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->