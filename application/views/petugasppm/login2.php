<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/'?>/style.css">

  
</head>



<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input type="email" name="email" value="" id="identity" class="input" placeholder="Alamat Email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" name="pass" value="" id="password" class="input" placeholder="Password">
				</div>
				
				<div class="group">
					<a href="<?php echo site_url('login/proseslogin')?>" name="submit" class="button">Sign In</a>
					<!-- <input type="submit"  value="Sign In"> -->
				</div>
				
			</div>
			
		</div>
	</div>
</div>
  
  
</body>
</html>
