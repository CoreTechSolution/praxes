<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div style="text-align: right; margin-bottom: 10px;"><a href="<?php echo base_url('admin/add-user'); ?>" class="btn btn-primary">Add User</a></div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Manage Users</h3>
				</div>
				<div class="box-body">
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
									<td><?php echo $user['user_role']; ?></td>
									<td style="text-align: right;"><a href="<?php echo base_url('admin/delete-user/'); ?>?id=<?php echo $user['id']; ?>" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								</tr>
							<?php } ?>
						</table>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->