<?php echo form_open('super_admin/cek_datasiswa') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">LAPORAN DAFTAR SELURUH SISWA</th></tr>
        <tr><td width="150">Jurusan</td>
  <td>
        <div class='col-sm-4'>
          <select name='kode_jurusan'  class='form-control' > 
              <option value='X'>X</option>
              <option value='TKR01'>IPA</option> 
              <option value='TL01'>IPS</option>
              </select>
        </div>             
       

<tr><td>Tahun Angkatan</td>
          <td>
             <div class='col-sm-4'>
       <select name='tahun_angkatan'  class='form-control' > 
              <option value='2013-2014'>2013-2014</option> 
              <option value='2014-2015'>2014-2015</option>
              <option value='2015-2016'>2015-2016</option>
              <option value='2016-2017'>2016-2017</option>
              <option value='2017-2018'>2017-2018</option>
              </select>  
       </div>    
</tr>    


    </table>
    
</div>
<input type="submit" name="submit" value="CEK DATA" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="index.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>