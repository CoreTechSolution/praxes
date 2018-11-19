<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div style="text-align: right; margin-bottom: 10px;"><a href="<?php echo base_url('admin/add-role'); ?>" class="btn btn-primary">Add Role</a></div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">User Roles</h3>
				</div>
				<div class="box-body">
					<?php if(!empty($roles)){ ?>
						<table id="footable" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Role</th>
									<th></th>
								</tr>
							</thead>
						<?php foreach($roles as $role){ ?>
							<tr>
								<td><?php echo $role['role_name']; ?></td>
								<td style="text-align: right;"><a href="<?php echo base_url('admin/delete-role/'); ?>?id=<?php echo $role['role_id']; ?>" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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