<?php echo form_open('super_admin/cek_nilaisiswa') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">LAPORAN NILAI SELURUH SISWA</th></tr>
        <tr><td width="150">Jurusan</td>
  <td>
        <div class='col-sm-4'>
          <select name='kode_jurusan'  class='form-control' >
              <option value='X'>X</option>
              <option value='TKR01'>IPA</option> 
              <option value='TL01'>IPA</option>
              </select>
        </div>             
       

<tr><td>Kelas</td>
          <td>
             <div class='col-sm-4'>
       <select name='kelas'  class='form-control' > 
              <option value='1'>I</option> 
              <option value='2'>II</option>
              <option value='3'>III</option>
              </select>  
       </div>    
</tr>    
<tr><td>Semester</td>
          <td>
              <div class="col-md-4">
              <select name='smester'  class='form-control' > 
              <option value='1'>Ganjil</option> 
              <option value='2'>Genap</option>
              </select>

       </div></tr>    

    </table>
    
</div>
<input type="submit" name="submit" value="CEK DATA" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="index.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>