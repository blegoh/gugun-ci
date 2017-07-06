<div class="col-lg-12">
                    <h1 class="page-header">TABEL DATA WALI KELAS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                    <th>NIP</th>
                                    <th>Nama Walikelas</th>
                                    <th>Kode Walikelas</th>
                                    <th>Nama Login</th>
                                    <th>Password Login</th>
                                    <th>Jurusan</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama_walikelas ?></td>
                                <td><?php echo $row->kode_walikelas ?></td>
                                <td><?php echo $row->nama_login ?></td>
                                <td><?php echo $row->password_login ?></td>
                                <td><?php $sq="SELECT * FROM tbl_jurusan where kode_jurusan='$row->kode_jurusan'"; $r=$this->db->query($sq); foreach ($r->result() as $vi){ echo $vi->nama_jurusan;} ?></td>        
                               
                             
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->