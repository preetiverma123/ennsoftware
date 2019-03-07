<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
	<script>var SITE_URL = '<?php echo site_url() ?>';</script>
	<script>var BASE_URL = '<?php echo base_url() ?>';</script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">

  <!-- build:css({.tmp/serve,src}) styles/vendor.css -->
  <!-- bower:css -->
<link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ionicons.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-toastr.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/animate.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-select.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-switch.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap-tagsinput.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/font-awesome.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/fullcalendar.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/leaflet.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-progress-button-styles.min.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/angular-chart.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/chartist.min.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/morris.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ion.rangeSlider.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/ion.rangeSlider.skinFlat.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/textAngular.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/xeditable.css" >
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/lib/style.css" >
  <!-- endbuild -->

  <!-- build:css({.tmp/serve,src}) styles/auth.css -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bluradmin')?>/app/auth.css">
  <!-- endinject -->
  <!-- endbuild -->
</head>
<body>
<main class="auth-main">
  <div class="auth-block">
  	<?php 
			
				if($this->session->flashdata('message'))
						$message = $this->session->flashdata('message');
				  if($this->session->flashdata('error'))
						$error  = $this->session->flashdata('error');
					if(function_exists('validation_errors') && validation_errors() != '')
					{
						$error  = validation_errors();
					}
			?>
			
              <?php if (!empty($error)): ?>
                    <div class="alert alert-danger alert-dismissable col-md-11">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $error; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($message)): ?>
                    <div class="alert alert-info alert-dismissable col-md-11">
                        <i class="fa fa-info"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <?php echo $message; ?>
                    </div>
                    <?php endif; ?>
    <h1>Sign In</h1>

    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">User Id</label>

        <div class="col-sm-10">
          <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Email/Username">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-auth">Sign in</button>
          <a href='<?php echo site_url('forgot/forgot_password')?>' class="forgot-pass">Forgot password?</a>
		  <input type="hidden" value="<?php echo @$redirect; ?>" name="redirect"/>
        <input type="hidden" value="submitted" name="submitted"/>
        </div>
      </div>
    </form>

   <?php /*?> <div class="auth-sep"><span><span>or Sign in with one click</span></span></div>

    <div class="al-share-auth">
      <ul class="al-share clearfix">
        <li><i class="socicon socicon-facebook" title="Share on Facebook"></i></li>
        <li><i class="socicon socicon-twitter" title="Share on Twitter"></i></li>
        <li><i class="socicon socicon-google" title="Share on Google Plus"></i></li>
      </ul>
    </div>
	<?php */?>
  </div>
</main>
<script src="<?php echo base_url('assets/bluradmin')?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url('assets/bluradmin')?>/lib/bootstrap.min.js"></script>
</body>
</html>