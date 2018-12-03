<!-- Main content -->
<div class="user_contentainer">
    <div class="user_contentainer_title">Manage Staff</div>
    <div class="user_contentainer_content">
        <div style="text-align: right; margin-bottom: 10px;"><a href="<?php echo base_url('users/add-user'); ?>" class="btn btn-primary btn-primary-link">Add User</a></div>
	    <?php if(!empty($users)){ ?>
            <table id="footable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                </thead>
			    <?php foreach($users as $user){ ?>
                    <tr>
                        <td><?php echo $user['first_name'].' '.$user['last_name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['street_address'].', '.$user['city'].', '.$user['state'].', '.$user['zip_code']; ?></td>
                        <td><?php echo get_role_name_by_id($user['user_role']); ?></td>
                        <td style="text-align: right;"><a href="<?php echo base_url('users/edit-user/'); ?>?id=<?php echo $user['id']; ?>" style="color: #3c8dbc;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="<?php echo base_url('users/delete-user/'); ?>?id=<?php echo $user['id']; ?>" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
			    <?php } ?>
            </table>
	    <?php } ?>
    </div>
</div>
<!-- /.content -->