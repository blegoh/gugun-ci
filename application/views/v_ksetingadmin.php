<?php echo form_open('kepsek/proses_seting_admin') ?>
<div class="col-md-12 clearfix">
<ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
<li class=""><a href="#biodata"></a></li>

</ul>
<?php foreach ($data->result() as $row) { ?>
  
<div class="tab-content">
<div class="tab-pane active" id="biodata">
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">SETING DATA KEPSEK</th></tr>
        <tr><td width="150">Nama Admin</td>
  <td>
        <div class='col-sm-4'>
          <input type='text' name='nama_admin' placeholder='No. Induk ..' class='form-control' required='required' value='<?php echo $row->username ?>' >
          <input type="hidden" name="id" value="<?php echo $row->id ?>">
        </div>             
       

<tr>
<tr><td width="150">Nama Login</td>
  <td>
        <div class='col-sm-4'>
          <input type='text' name='nm_admin' placeholder='No. Induk ..' class='form-control' required='required' value='<?php echo $row->nm_admin ?>' >
        </div>             
       

<tr>
<tr><td width="150">Password Admin</td>
  <td>
        <div class='col-sm-4'>
          <input type='text' name='ps_admin' placeholder='No. Induk ..' class='form-control' required='required' value='<?php echo $row->ps_admin ?>' >
        </div>             
       

<tr>


    </table>
    <?php  } ?>
</div>
<input type="submit" name="submit" value="UBAH DATA" class="btn btn-danger  btn-sm">
<input type="reset"  value="RESET" class="btn btn-danger  btn-sm">
            <a href="index.php" class="btn btn-danger btn-sm">KEMBALI</a></form>

           </form>