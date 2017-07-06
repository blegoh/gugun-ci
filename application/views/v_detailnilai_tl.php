<?php 
  //error_reporting(0);
  echo $nama_wali;
  $sql = "SELECT * FROM tbl_walikelas where nama_login='$nama_wali' ";

    $d=$this->db->query($sql);
    foreach ($d->result() as $ds) {


 ?>
 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Nilai Siswa IPS</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No Induk</th>
                        <th>Semester</th>
                        <th>B. Indonesia</th>
                        <th>B. Inggris</th>
                        <th>Matematika</th>
                        <th>Rata - Rata</th>
                        <th>Penjas</th>
                        <th>Seni Budaya</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>

                      <?php
                     
                    foreach ($data->result() as $row) {

                      ?>
                        <td>
                        <?php echo $row->no_induk ?></td>
                        <td>
                          <?php echo $row->smester; ?>
                        </td>
                        <td>
                          <?php echo $row->b_indonesia; ?>
                        </td>
                        <td>
                          <?php echo $row->b_inggris; ?>
                        </td>
                        <td>
                          <?php 
                            echo $row->mtk;
                           ?>
                        </td>
                        <td><?php echo $row->rata_rata; ?></td>
                        <td><?php echo $row->penjas; ?></td>
                        <td><?php echo $row->seni_budaya; ?></td>
                        <td>
                        <a href="<?php echo base_url() ?>index.php/from_walikelas_tl/edit_nilai/<?php echo $row->id_pel ?>">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/from_walikelas_tl/hapus_nilai/<?php echo $row->id_pel ?>">Hapus</a>
                          
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