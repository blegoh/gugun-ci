<?php echo form_open('super_admin/proses_input_walikelas') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA GURU</th></tr>
        <tr><td width="150">Kode walikelas, Nama</td>
  <td>
        <div class='col-sm-2'><input type='text' name='kode_walikelas' placeholder='kode_walikelas ..' class='form-control' required='required' value='' ></div>             
                                   <div class='col-sm-8'><input type='text' name='nama_walikelas' placeholder='Nama ..' class='form-control' required='required' value='' ></div>    

<tr><td>NIP</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nip' placeholder='NIP ..' class='form-control'  value='' >
       </div></tr>         

<tr><td>Nama Login</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='nama_login' placeholder='nama login' class='form-control'  value='' >
       </div></tr>

<tr><td>Password Login</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='password_login' placeholder='Password Login ..' class='form-control'  value='' >
       </div></tr>           <tr><td>Jurusan</td><td>
              <div class='col-sm-4'><select name='kode_jurusan'  class='form-control' >
              <option value='X'>X</option>
              <option value='TKR01'>IPA</option> 
              <option value='TL01'>IPS</option>
              </select></div>                                            </td></tr>

    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>