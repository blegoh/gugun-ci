<div class="col-lg-12">
                    <h1 class="page-header">TABEL DATA SISWA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a  class="btn btn-primary  btn-sm" href="index.php/super_admin/input_siswa">TAMBAH</a>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                      <tr>
                                    <th>No Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Tahun Angkatan</th>
                                    <th>Nama Walikelas</th>
                                    <th>Jurusan</th>
                                      </tr>   
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data->result() as $row) : ?>
                                    
                                                                      <tr>
                                <td><?php echo $row->nik ?></td>
                                <td><?php echo $row->nama_siswa ?></td>
                                <td><?php echo $row->kelas ?></td>
                                <td><?php echo $row->tahun_angkatan ?></td>
                                <td><?php $sql="SELECT * FROM tbl_walikelas where kode_walikelas='$row->kode_walikelas'"; $rs=$this->db->query($sql); foreach ($rs->result() as $viw){ echo $viw->nama_walikelas;} ?>
                                </td>        
                                
                                <td><?php $sq="SELECT * FROM tbl_jurusan where kode_jurusan='$row->kode_jurusan'"; $r=$this->db->query($sq); foreach ($r->result() as $vi){ echo $vi->nama_jurusan;} ?></td>        
                               
                             
                             
                                     </tr>
                            <?php endforeach; ?>
                                                

                                                                                </tbody>
                                    </table>
                            </div>
                            <!-- /.table-responsive -->