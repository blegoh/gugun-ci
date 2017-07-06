<div class="col-lg-12">
                    <h1 class="page-header">TABEL SEMUA NILAI</h1>
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
                                    <th>No Induk</th>
                                    <th>Kode Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Agama</th>
                                    <th>Kewarganegaraan</th>
                                    <th>B. Indonesia</th>
                                    <th>B. Inggris</th>
                                    <th>IPA</th>
                                    <th>IPS</th>
                                    <th>Action</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->no_induk ?></td>
                                <td><?php echo $row->kode_jurusan ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <td><?php echo $row->agama ?></td>
                                <td><?php echo $row->kewarganegaraan ?></td>
                                <td><?php echo $row->b_indonesia ?></td>
                                <td><?php echo $row->b_inggris ?></td>
                                <td><?php echo $row->ipa ?></td>
                                <td><?php echo $row->ips ?></td>
                                <td>
                                <a href="index.php/super_admin/edit_nilai/<?php echo $row->id_pel ?>" title="">
                                    <li class="fa fa-pencil-square-o">
                                    
                                    </li>
                                </a> &nbsp; &nbsp; 
                                <a href="index.php/super_admin/hapus_nilai/<?php echo $row->id_pel ?>" title="">
                                     <li class="fa fa-trash-o" onclick="hapus (1)">
                                    
                                    </li>
                                </a> 
                                </td>
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->