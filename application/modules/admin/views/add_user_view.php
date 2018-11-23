<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<form id="add_user_form" method="post" action="admin/add_user_form">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>Username <span>*</span></label>
									<input type="text" name="username" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Email Address <span>*</span></label>
									<input type="text" name="email_address" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>Password <span>*</span></label>
									<input id="password" type="password" name="password" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Confirm Password <span>*</span></label>
									<input type="password" name="confirm_password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>First Name <span>*</span></label>
									<input type="text" name="first_name" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Last Name <span>*</span></label>
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
									<label>License Numbers <span>*</span></label>
									<input type="text" name="license_numbers" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>NPI Number <span>*</span></label>
									<input type="text" name="npi_number" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Street Address <span>*</span></label>
									<input type="text" name="street_address" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>City <span>*</span></label>
									<input type="text" name="city" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>State <span>*</span></label>
									<input type="text" name="state" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
									<label>ZIP code <span>*</span></label>
									<input type="text" name="zip_code" class="form-control">
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<label>Company <span>*</span></label>
									<select class="form-control" name="company_id">
										<?php if(!empty($companies)){ ?>
											<?php foreach($companies as $company){ ?>
												<option value="<?php echo $company['company_id']; ?>"><?php echo $company['company_name']; ?></option>
											<?php } ?>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>User Role <span>*</span></label>
                                    <select class="form-control" name="user_role">
										<?php if(!empty($roles)){ ?>
											<?php foreach($roles as $role){ ?>
                                                <option value="<?php echo $role['role_id']; ?>"><?php echo $role['role_name']; ?></option>
											<?php } ?>
										<?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6"></div>
                        </div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
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