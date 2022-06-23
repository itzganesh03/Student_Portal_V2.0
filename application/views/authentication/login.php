<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel='stylesheet'>
	<link rel="stylesheet" href="assets/login/style.css">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>">
    <!-- sweetalert js/css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/sweetalert/sweetalert-custom.css');?>">
	<script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js');?>"></script>
	<title>
		<?php echo translate('login');?>
	</title>
</head>

<body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						 <?php echo form_open($this->uri->uri_string()); ?>
						<div class="input-group <?php if (form_error('email')) echo 'has-error'; ?>">
							<i class='bx bxs-user'></i>
							<!--<input type="email" value="<?php echo set_value('email');?>" placeholder="email" />-->
                            <input type="text" name="email" value="<?php echo set_value('email');?>" placeholder="email" />
						</div>
						
                        <div class="input-group <?php if (form_error('password')) echo 'has-error'; ?>">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password" />
						</div>
						
                        <button type="login" id="btn_submit" class="btn btn-block btn-round">
                                        <i class="fas fa-sign-in-alt"></i> <?php echo translate('login');?>
						</button>
						<p>
							<span>
								Admin Plz
							</span>
							<b onclick="toggle()" class="pointer">
								Click here....
							</b>
						</p>
                        <?php echo form_close();?>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-up">
                    <div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password">
						</div>
						<button>
							Sign in
						</button>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
					<div class="social-list align-items-center sign-in">
                        <div class="align-items-center insta-bg">
							<i class='bx bxl-instagram-alt'></i>
						</div>
						<div class="align-items-center facebook-bg">
							<i class='bx bxl-facebook'></i>
						</div>
						<div class="align-items-center google-bg">
							<i class='bx bxl-google'></i>
						</div>
						<div class="align-items-center twitter-bg">
							<i class='bx bxl-twitter'></i>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome back<br>DYPIU <br>admin Side <br>
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
				<div class="img sign-in">
					<img src="assets/login/undraw_different_love_a3rg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
					<img src="assets/login/undraw_creative_team_r90h.svg" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						DYPIU Student Portal
					</h2>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit obcaecati, accusantium
						molestias, laborum, aspernatur deserunt officia voluptatum tempora dicta quo ab ullam. Assumenda
						enim harum minima possimus dignissimos deserunt rem.
					</p>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery-placeholder.js');?>"></script>
		<!-- backstretch js -->
		<script src="<?php echo base_url('assets/login_page/js/jquery.backstretch.min.js');?>"></script>
		<script src="<?php echo base_url('assets/login_page/js/custom.js');?>"></script>
            <?php
            $alertclass = "";
            if($this->session->flashdata('alert-message-success')){
                $alertclass = "success";
            } else if ($this->session->flashdata('alert-message-error')){
                $alertclass = "error";
            } else if ($this->session->flashdata('alert-message-info')){
                $alertclass = "info";
            }
            if($alertclass != ''):
                $alert_message = $this->session->flashdata('alert-message-'. $alertclass);
            ?>
                <script type="text/javascript">
                    swal({
                        toast: true,
                        position: 'top-end',
                        type: '<?php echo $alertclass;?>',
                        title: '<?php echo $alert_message;?>',
                        confirmButtonClass: 'btn btn-default',
                        buttonsStyling: false,
                        timer: 8000
                    })
                </script>
            <?php endif; ?>
	<script src="assets/login/index.js"></script>
</body>

</html>