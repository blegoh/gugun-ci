<div class="col-lg-12">
    <h1 class="page-header">TABEL DATA JURUSAN</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a  class="btn btn-primary  btn-sm" href="index.php/super_admin/input_absen">TAMBAH</a>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>siswa</th>
                            <th>Tanggal</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $row) : ?>

                          <tr>
                            <td><?php echo $row->id ?></td>
                            <td><?php echo $row->nama_siswa ?></td>
                            <td><?php echo $row->waktu ?></td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
                            <!-- /.table-responsive -->