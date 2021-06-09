<div class="container">
	<div class="row mt-lg-n10 mt-md-n11 mt-n10">
		<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
			<div class="card z-index-0">
				<div class="card-header text-center pt-4">
					<h5>Login</h5>
				</div>
				<div class="card-body">
					<form role="form text-left" class="user" method="post"
						action="<?= base_url('auth'); ?>">

						<?= $this->session->flashdata('message'); ?>

						<div class="mb-3">
							<?= form_input([
                                'type' => 'text',
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'value' => set_value("email"),
                                'placeholder' => 'Enter Email Address...'
                            ]);
                            echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="mb-3">
							<?= form_input([
                                'type' => 'password',
                                'name' => 'password',
                                'id' => 'password',
                                'class' => 'form-control',
                                'value' => set_value("password"),
                                'placeholder' => 'Password'
                            ]);
                            echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

						</div>

						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" id="rememberMe" checked="">
							<label class="form-check-label" for="rememberMe">Remember me</label>
						</div>

						<div class="text-center">
							<button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
						</div>

					</form>
					<div class="card-footer text-center pt-0 px-lg-2 px-1">
						<p class="mb-4 text-sm mx-auto">
							Don't have an account?
							<a href="<?= base_url('auth/registration'); ?>"
								class="text-info text-gradient font-weight-bold">Sign up</a>
							<br>
							<a href="" class="text-info text-gradient font-weight-bold">Forgot password?</a>
						</p>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
</div>
</div>

</div>

</div>

</div>
