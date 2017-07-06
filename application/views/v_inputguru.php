<?php echo form_open('super_admin/proses_inputguru') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>

<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">INPUT DATA GURU</th></tr>
        <tr><td width="150">No Induk, Nama</td>
  <td>
        <div class='col-sm-2'><input type='text' name='nip' placeholder='No. Induk ..' class='form-control' required='required' value='' ></div>             
                                   <div class='col-sm-8'><input type='text' name='nama_guru' placeholder='Nama ..' class='form-control' required='required' value='' ></div>                        
      <tr><td>Status Pegawai</td><td>
              <div class='col-sm-2'><select name='status_pegawai'  class='form-control' > <option value='pns'>PNS</option> <option value='non.Pns'>Non. PNS</option><option value='guru bantu'>Guru Bantu</option></select></div>                                            </td></tr>
   
      <tr><td>Gender</td>
          <td>
              <div class="col-md-2">
              <select name="jenis_kelamin" class='form-control'>
<option value="Laki - Laki">Laki Laki</option>
<option value="Perempuan">Perempuan</option>
</select>                                  
<tr><td>Bidang Study</td>
          <td>
              <div class="col-md-4">
              <input type='text' name='bidang_study' placeholder='bidang study ..' class='form-control'  value='' >
       </div></tr>
        <tr>
        <td>Tempat, Tanggal Lahir</td>
            <td>
                <div class='col-sm-6'>
                <input type='text' name='tempat_lahir' placeholder='Tempat Lahir ..' class='form-control'  value='' ></div>     
                 <div class="col-sm-6">

        
    </table>
    
</div>
<input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="asset/tbl_peminjam.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>