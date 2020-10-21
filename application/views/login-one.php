<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* This is the one-part login option. 
	*
	*	If you would prefer the login -> password input on one page,
	* see application/views/login.php
	*
	* Originally created by Gavin Brown (http://gavinbrown.ca/) 
	* or @gavbro on twitter!
	* Created on April 08, 2019
	*
	* @see https://codeigniter.com/user_guide/general/views.html for 
	* assistance in updating or creating custom views for codeigniter.
	*
	*/
?><!doctype html>

<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Silahkan Login</title>    
        <!-- Bootstrap-->
        <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="assets/css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="assets/lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="assets/lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

<body>
<body class='bg-white'>

<div class="page-wrapper" id="page-wrapper">
	<main class="content">
		<div class="container-fluid flex d-flex">
			<div class='row flex align-items-center'>
				<div class='col-lg-6 d-flex flex h-lg-down  full-height bg-pattern bg-fHeight' style='background-image: url(assets/img/Upload-4-1024x768.jpg)'>
				</div>
				<div class='col-lg-3 col-md-5 col-sm-6 ml-auto flex d-flex mr-auto full-height pt-40 pb-20'>
					<div class="w100 d-block">
						<img src="assets/img/giriwangi.png" height="200" width="200" style="margin-left:20%;">

					<div class="title-sep text-center sep-white mt-20 mb-30">
						<span class='font600 fs16 text-dark'>Sign In</span>
					</div>
					<div>

					<?php echo form_open(); ?>
								<div class="input-icon-group">
									<div class="d-flex flex flex-row">
										<label class="flex d-flex mr-auto" for='pass'>Username</label>
									<div class="flex d-flex ml-auto justify-content-end">
									</div>
								   </div>
									<div class='input-icon-append'>
										<i class="fa fa-user"></i>
										<?php
											echo form_input(
											array(
												'type' => 'email',
												'id' => 'email',
												'name' => 'email',
												'value' => '',
												'placeholder' => 'Username',
												'class' => 'form-control')
											); 
										?>
									</div>
								</div>
								<div class="input-icon-group">
								   <div class="d-flex flex flex-row">
									   <label class="flex d-flex mr-auto" for='pass'>password</label>
									<div class="flex d-flex ml-auto justify-content-end">
									</div>
								   </div>
									<div class='input-icon-append'>
										<i class="fa fa-lock"></i>
										<?php 
											echo form_input(
												array(
													'type' => 'password',
													'id' => 'password',
													'name' => 'password',
													'value' => '',
													'placeholder' => 'Password',
													'class' => 'form-control')
											); ?>
									</div>
								</div>
								<?php	echo form_submit('submit-email', '  Continue  ', array("class" => "btn btn-gradient-success btn-block btn-lg")); ?>
								<?php echo form_close(); ?>
					</div>
					</div>
				</div>
			</div>
		</div><!-- main end-->

	</main><!-- page content end-->
</div><!-- app's main wrapper end -->
<!-- Common plugins -->
<script type="text/javascript" src="assets/js/plugins/plugins.js"></script> 
<script type="text/javascript" src="assets/js/appUi-custom.js"></script> 
</body>
</body>
</html>