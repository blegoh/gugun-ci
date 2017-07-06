<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <base href="<?php echo base_url() ?>" />
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="shortcut icon" href="asset/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  </head>
  <style type="text/css">
  body{
    background: url('asset/bg_siswa.jpg');
  }
  </style>
<div class="login-box">
      <div class="login-logo">
      <img src="asset/logo.png" width="120px"><br/>
        <a href=".#"><b  style="font-family: Courier new;"></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <?php echo  form_open('siswa/cek_nilai') ?>
          <div class="form-group has-feedback">
            <input type="number" required="Harap Di isi" class="form-control" name="no_induk" placeholder="No. Induk Siswa">
            
          </div>
          
          <div class="form-group">
              
                    <select name="kelas" required="Harap Di isi" class="form-control select2" style="width: 100%;">
                      <option value="belum di pilih" >Kelas</option>
                      <option value="1">I</option>
                      <option value="2">II</option>
                      <option value="3">III</option>
                    </select>
                  </div><!-- /.form-group -->
          <div class="form-group">
              
                    <select name="smester" required="Harap Di isi" class="form-control select2" style="width: 100%;">
                      <option value="belum di pilih" >Semester</option>
                
                      <option value="1">Satu</option>
                      <option value="2">Dua</option>
                    </select>
                  </div><!-- /.form-group -->

          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="cek" class="btn btn-primary btn-block btn-flat">Cek Nilai</button>
            </div><!-- /.col -->
          </div>
        </form>

        
      

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <style type="text/css">
    footer{
      text-align: center;
      color: white;
    }
    </style>
    <footer>
      Hakcipta &copy; SMAN 1 DAYEUHKOLOT 
    </footer> >