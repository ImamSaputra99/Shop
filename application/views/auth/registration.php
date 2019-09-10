
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-80 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?= base_url('auth/registration'); ?>">
					<span class="login100-form-title p-b-32">
						Registration Account
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required !">
						<input class="input100" type="text" name="nama" id="nama" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Email is required " >
						<input class="input100" type="text" name="email" id="email" >
						<span class="focus-input100">
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12 ">	
					<input class="input100" type="password" id="password1" name="password1" ><?= form_error('pasword1'); ?>
						<span class="focus-input100"></span> 
					</div>
					<span class="txt1 p-b-11">
						Repeat Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">					
						<input class="input100" type="password" id="password2" name="password2" >
						<span class="focus-input100"></span>
					</div>

					
					<div class="flex-sb-m w-full p-b-48">
						
					<div >
							<a href="<?= base_url('auth'); ?>" class="txt3" >
								You Has an A account ?
							</a>
							<br>
							
						</div>


					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Registration
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
