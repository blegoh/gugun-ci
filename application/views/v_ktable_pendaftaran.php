<div class="col-lg-12">
                    <h1 class="page-header">TABEL DATA PENDAFTARAN</h1>
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
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Nama Ayah</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->nama_siswa ?></td>
                                <td><?php echo $row->ttl_siswa ?></td>
                                <td><?php echo $row->asal_sekolah ?></td>
                                <td><?php echo $row->alamat_siswa ?></td>
                                <td><?php echo $row->nama_ayah ?></td>
                                
                                                                </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->