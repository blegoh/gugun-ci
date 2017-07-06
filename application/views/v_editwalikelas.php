<?php echo form_open('super_admin/proses_edit_walikelas') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<?php 
  $sss = "SELECT * FROM tbl_walikelas where nip='$nip'";
  $rsss=$this->db->query($sss);
foreach ($rsss->result() as $edit) { ?>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA GURU</th></tr>
        <tr><td width="150">Kode walikelas, Nama</td>
  <td>
        <div class='col-sm-2'><input type='text' value="<?php echo $edit->kode_walikelas ?>" name='kode_walikelas' placeholder='kode_walikelas ..' class='form-control' required='required' value='' ></div>             
                                   <div class='col-sm-8'><input type='text' value="<?php echo $edit->nama_walikelas ?>" name='nama_walikelas' placeholder='Nama ..' class='form-control' required='required' value='' ></div>    

<tr><td>NIP</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nip' value="<?php echo $edit->nip ?>" placeholder='NIP ..' class='form-control'  value='' >
       </div></tr>         

<tr><td>Nama Login</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama_login' value="<?php echo $edit->nama_login ?>" placeholder='nama login' class='form-control'  value='' >
       </div></tr>

<tr><td>Password Login</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='password_login' value="<?php echo $edit->password_login ?>" placeholder='Password Login ..' class='form-control'  value='' >
       </div></tr>           <tr><td>Jurusan</td><td>
              <div class='col-sm-4'><select name='kode_jurusan'  class='form-control' > 
              <option value='TKR01'>Teknik Kendaraan Ringan</option> 
              <option value='TL01'>Teknik Listrik</option>
              </select></div>                                            </td></tr>

    </table>
    
</div>
<input type="submit" name="submit" value="UPDATE" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>
<?php  } ?>
           </form>