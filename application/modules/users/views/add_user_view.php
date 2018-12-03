<!-- Main content -->
<div class="user_contentainer">
    <div class="user_contentainer_title">Add Staff</div>
    <div class="user_contentainer_content">
        <form id="add_user_form" method="post" action="<?php echo base_url('users/add_user_form'); ?>" class="formclass">
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Username <span>*</span></label>
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Email Address <span>*</span></label>
                        <input type="text" name="email_address" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Password <span>*</span></label>
                        <input id="password" type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Confirm Password <span>*</span></label>
                        <input type="password" name="confirm_password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>First Name <span>*</span></label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Last Name <span>*</span></label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>License Numbers <span>*</span></label>
                        <input type="text" name="license_numbers" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>NPI Number <span>*</span></label>
                        <input type="text" name="npi_number" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>Street Address <span>*</span></label>
                        <input type="text" name="street_address" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>City <span>*</span></label>
                        <input type="text" name="city" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>State <span>*</span></label>
                        <input type="text" name="state" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>ZIP code <span>*</span></label>
                        <input type="text" name="zip_code" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6">
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
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group">
                        <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
                        <input type="submit" name="submit" value="Add User" class="btn btn-primary" style="margin-top: 24px;">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
   jQuery(document).ready(function(){
       jQuery('#add_user_form').validate({
           rules: {
               username: {
                   required: true
               },
               email_address: {
                   required: true,
                   email: true
               },
               password:{
                   required: true,
                   minlength: 8
               },
               confirm_password:{
                   required: true,
                   minlength: 8,
                   equalTo: '#password'
               },
               first_name:{
                   required: true
               },
               last_name:{
                   required: true
               },
               license_numbers:{
                   required: true
               },
               npi_number:{
                   required: true
               },
               street_address:{
                   required: true
               },
               city:{
                   required: true
               },
               state:{
                   required: true
               },
               zip_code:{
                   required: true
               }
           },
           messages: {

           }
       });
   });
</script>
<!-- /.content -->