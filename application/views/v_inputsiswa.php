<?php echo form_open('super_admin/proses_inputsiswa') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA SISWA BARU</th></tr>
        <tr><td width="150">No Induk, Nama</td>
  <td>
        <div class='col-sm-2'><input type='text' name='nik' placeholder='No. Induk ..' class='form-control' required='required' value='' ></div>             
                                   <div class='col-sm-8'><input type='text' name='nama_siswa' placeholder='Nama ..' class='form-control' required='required' value='' ></div>                        
      <tr><td>Tahun Agkatan</td><td>
              <div class='col-sm-2'><select name='tahun_angkatan'  class='form-control' > <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option></select></div>                                            </td></tr>
      <tr><td>Jurusan</td><td>
              <div class='col-sm-4'><select name='kode_jurusan'  class='form-control' > 
			  <option value='TKR01'>X</option> 
              <option value='TKR01'>XI IPA</option> 
              <option value='TL01'>XII IPS</option>
              </select></div>                                            </td></tr>
<tr><td>Walikelas</td><td>
              <div class='col-sm-4'><select name='kode_walikelas'  class='form-control' > 
              <?php $sql = "SELECT * FROM tbl_walikelas"; $rs=$this->db->query($sql); foreach($rs->result() as $row) : ?>
              <option value='<?php echo $row->kode_walikelas ?>'><?php echo $row->nama_walikelas ?></option> 
            <?php endforeach; ?>
              </select></div>                                            </td></tr>

      <tr><td>Gender, Agama</td>
          <td>
              <div class="col-md-2">
              <select name="jenis_kelamin" class='form-control'>
<option value="Laki - Laki">Laki Laki</option>
<option value="Perempuan">Perempuan</option>
</select>                                   
       </div>
                 <div class='col-sm-2'><select name='agama'  class='form-control' > <option value='islam'>ISLAM</option> <option value='Keristen'>KRISTEN</option> <option value='Katolik'>KATOLIK</option> <option value='Budha'>BUDHA</option> <option value='Hindu'>HINDU</option> <option value='Kepercayaan'>KEPERCAYAAN</option></select></div></td></tr>
        <tr><td>Tempat, Tanggal Lahir</td>
            <td>
                <div class='col-sm-6'>
                <input type='text' name='tempat_lahir' placeholder='Tempat Lahir ..' class='form-control'  value='' ></div>     
                                                              </td></tr>
       <tr><td>Kelas</td>
           <td>
               <div class="col-sm-6">
                  <div class=''>
                  <select name='kelas'  class='form-control'  id='prodi' >
                      <option value="1">I</option>
                      <option value="2">II</option>
                      <option value="3">III</option>
                  </select>

                    <tr><td>Semester</td>
           <td>
               <div class="col-sm-6">

                  <div class=''>
                  <select name='smester'  class='form-control'  id='prodi' >
                   <option value=1>1</option> 
                   <option value=2>2</option>
                   
                    </select></div>                                               </div>
        <div class="col-sm-6">
        
    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>