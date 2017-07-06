<div class="col-lg-12">
                    <h1 class="page-header">TABEL DATA GURU</h1>
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
                                    <th>Nama Guru</th>
                                    <th>Ststus Pegawai</th>
                                    <th>Bidang Study</th>
                                    <th>Jenis Kelamin</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama_guru ?></td>
                                <td><?php echo $row->status_pegawai ?></td>
                                <td><?php echo $row->bidang_study ?></td>
                                <td><?php echo $row->jenis_kelamin ?></td>
                              
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->