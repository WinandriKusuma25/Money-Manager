
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>Money Manager | Register</title>
<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
<!-- Favicon -->
<!--<link rel="icon" href="<?php echo base_url().'asset/images/background.jpeg';?>"-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--<link rel="stylesheet" type="text/css" href="<? echo base_url();?>/assets/login/login.css"> -->
</head>    
<body background =  "<?=base_url();?>./asset/images/background_register.jpg">
          
<div class="container">
    <div class="row">
        <div class="col-sm- col-md-4 col-md-offset-8">
            <div class="account-wall">
                <img class="profile-img" src="<?=base_url();?>asset/images/logo_money_manager.png"alt="">
                <form action="<?php echo base_url('register/proses_register');?>" enctype="multipart/form-data" method="POST" class="form-signin"   role="form" autocomplete="off" >
					
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama"  placeholder="Nama" value="<?=set_value('nama') ?>" >
                    <?= form_error('nama','<small class="text-danger">','</small>'); ?>
                    <br>

					<label>Email</label>
					<input type="text" class="form-control" name="email" id="email"  placeholder="Email" value="<?=set_value('email') ?>" >
                    <?= form_error('email','<small class="text-danger">','</small>'); ?>	
                    
                    <br>
					<label>No Telp</label>	
					<input type="number" class="form-control" name="no_telp" id="telp"  placeholder="No Telp" value="<?=set_value('no_telp') ?>"> 
                    <?= form_error('no_telp','<small class="text-danger">','</small>'); ?>
					<br>
                    
					<label>Foto Profil</label>
					<input type="file" class="form-control" name="foto_profil" id="foto_profil"  placeholder="Foto Profil" value="<?=set_value('foto_profil')?>" required >
                    <?= form_error('foto_profil','<small class="text-danger">','</small>'); ?>
                    <small class="text-danger">Foto Profil harus di isi, maks file 3 mb !</small>
                    
					<br>
                    <label>Foto KTP</label>
					<input type="file" class="form-control" name="foto_ktp" id="foto_ktp"  placeholder="Foto KTP" value="<?=set_value('foto_ktp') ?>"required >
                    <!--<?= form_error('foto_ktp','<small class="text-danger">','</small>'); ?> -->
                    <small class="text-danger">Foto KTP harus di isi, maks file 3 mb !</small>

                    <br>
                    <label>Username</label>
					<input type="username" id="username"class="form-control" name="username"  placeholder="Username" value="<?=set_value('username') ?>" >
                    <?= form_error('username','<small class="text-danger">','</small>'); ?>
                
					<br>
					<label>Password</label>	
					<input type="password" id="password-field"class="form-control" name="password"  placeholder="Password" >
                    <?= form_error('password','<small class="text-danger">','</small>'); ?>
                    <span toggle="#myInput" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        

                    <button  class="btn btn-primary btn-lg btn-block" type="submit" name="submit" >Register</button>
                
                    <a href="#" class="pull-right need-help"> </a><span class="clearfix"></span>
                    <a href="<?=base_url("login");?>" class="text-center new-account">Sudah Punya Akun? Login</a>
                    <br>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

 <!-- ##### Header Area End ##### -->
    
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url().'assets/User/js/jquery/jquery-2.2.4.min.js ';?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/popper.min.js';?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url().'assets/User/js/bootstrap/bootstrap.min.js';?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url().'assets/User/js/plugins/plugins.js';?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url().'assets/User/js/active.js';?>"></script>
<style>

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.form-signin input[type="email"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.account-wall
{
    margin-top: 70px;
    margin-bottom :70px;
    padding: 40px 0px 0px 0px;
    background-color: #ffffff;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>

<script>
$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script> 

