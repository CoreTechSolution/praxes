<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<form id="forms" method="post" action="user/add_user_form">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="text" name="email_address" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" name="confirm_password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="first_name" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="last_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>Phone</label>
									<input type="text" name="phone" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>License Numbers</label>
									<input type="text" name="license_numbers" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>NPI Number</label>
									<input type="text" name="npi_number" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Street Address</label>
									<input type="text" name="street_address" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" name="city" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>State</label>
									<input type="text" name="state" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>ZIP code</label>
									<input type="text" name="zip_code" class="form-control">
								</div>
							</div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select class="form-control" name="user_role">
										<?php if(!empty($roles)){ ?>
											<?php foreach($roles as $role){ ?>
                                                <option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name']; ?></option>
											<?php } ?>
										<?php } ?>
                                    </select>
                                </div>
                            </div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
                                    <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
									<input type="submit" name="submit" value="Add User" class="btn btn-primary" style="margin-top: 24px;">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->