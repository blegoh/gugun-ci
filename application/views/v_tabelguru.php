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
                            <a  class="btn btn-primary  btn-sm" href="index.php/super_admin/input_guru">TAMBAH</a>

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
                                    <th>Action</th>
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
                                <td>
                                <a href="index.php/super_admin/edit_guru/<?php echo $row->nip ?>" title="">
                                    <li class="fa fa-pencil-square-o">
                                    EDIT
                                    </li>
                                </a> &nbsp; &nbsp; 
                                <a href="index.php/super_admin/hapus_guru/<?php echo $row->nip ?>" title="">
                                     <li class="fa fa-trash-o" onclick="hapus (1)">
                                    HAPUS
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->