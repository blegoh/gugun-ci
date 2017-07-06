<?php echo form_open('super_admin/proses_input_absen') ?>
<div class="col-md-12 clearfix">
  <ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
    <li class=""><a href="#biodata"></a></li>

  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="biodata">
      <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA ABSEN</th></tr>
        <tr>
          <td width="150">Siswa</td>
          <td>
            <div class='col-sm-2'>

              <select name='nik' class='form-control'>
                <?php foreach ($siswa->result() as $s): ?>
                  <option value="<?php echo $s->nik ?>"><?php echo $s->nama_siswa ?></option>
                <?php endforeach ?>
              </select>

            </div>             
          </td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>
            <div class='col-sm-4'>
              <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input name="tgl" type="text" class="form-control">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
          </td>
          </tr>
          <tr>
          <td width="150">Keterangan</td>
          <td>
            <div class='col-sm-2'>

              <select name='ket' class='form-control'>
                <option>masuk</option>
                <option>sakit</option>
                <option>ijin</option>
                <option>alpha</option>
              </select>

            </div>             
          </td>
        </tr>     
        </table>

      </div>
      <input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
      <input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
      <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

    </form>