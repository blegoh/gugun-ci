<?php echo form_open('super_admin/proses_input_jurusan') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA JURUSAN</th></tr>
        <tr><td width="150">id jurusan, Kode jurusan</td>
  <td>
        <div class='col-sm-2'><input type='text' name='id_jurusan' placeholder='Id jurusan ..' class='form-control' required='required' value='' ></div>             
                                   <div class='col-sm-8'><input type='text' name='kode_jurusan' placeholder='Kode jurusan ..' class='form-control' required='required' value='' ></div>    

<tr><td>Nama jurusan</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama_jurusan' placeholder='Nama jurusan ..' class='form-control'  value='' >
       </div></tr>     
    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>