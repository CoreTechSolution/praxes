<!-- Main content -->
<div class="user_contentainer">
    <div class="user_contentainer_title">Edit Staff</div>
    <div class="user_contentainer_content">
        <form id="forms" method="post" action="<?php echo base_url('users/edit_user_form'); ?>" class="formclass">
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $user_data[0]['username']; ?>" readonly>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email_address" class="form-control" value="<?php echo $user_data[0]['email']; ?>" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $user_data[0]['first_name']; ?>">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo $user_data[0]['last_name']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $user_data[0]['phone']; ?>">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>License Numbers</label>
                <input type="text" name="license_numbers" class="form-control" value="<?php echo $user_data[0]['license_numbers']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>NPI Number</label>
                <input type="text" name="npi_number" class="form-control" value="<?php echo $user_data[0]['npi_number']; ?>">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>Street Address</label>
                <input type="text" name="street_address" class="form-control" value="<?php echo $user_data[0]['street_address']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $user_data[0]['city']; ?>">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="<?php echo $user_data[0]['state']; ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group">
                <label>ZIP code</label>
                <input type="text" name="zip_code" class="form-control" value="<?php echo $user_data[0]['zip_code']; ?>">
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group">
                <label>User Role</label>
                <select class="form-control" name="user_role">
					<?php $role_id = $user_data[0]['user_role']; ?>
					<?php if(!empty($roles)){ ?>
						<?php foreach($roles as $role){ ?>
                            <option value="<?php echo $role['role_id']; ?>" <?php if($role_id == $role['role_id']){ echo 'selected="selected"'; } ?>><?php echo $role['role_name']; ?></option>
						<?php } ?>
					<?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?php echo $user_data[0]['id']; ?>">
                <input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-top: 24px;">
            </div>
        </div>
    </div>
</form>
    </div>
</div>
<!-- /.content -->