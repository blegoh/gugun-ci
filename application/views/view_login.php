<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN GURU</title>
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
    background: url('asset/source/images/black-Linen.png');
   font-weight: bold;
   font-family: Courier new;

  }
  </style>
<div class="login-box">
      <div class="login-logo">
      <img src="asset/logo.png" width="120px"><br/>
       
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login dengan ID Guru</p>
        <?php echo  form_open('login/proses_login') ?>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nama_login" placeholder="Username">
            
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password_login" placeholder="Password">
            
          </div>
          <div class="form-group">
              
                    <select name="jurusan" class="form-control select2" style="width: 100%;">
                      <option >Jurusan</option>
                      <option value="X">X</option>
                      <option value="tkr">IPA</option>
                      <option value="tl">IPS</option>
                    </select>
                  </div><!-- /.form-group -->
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
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
      Hakcipta &copy;SMAN 1 DAYEUHKOLOT 
    </footer> >