<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<form id="add_role_form" method="post" action="admin/edit_role_form" class="formclass">
						<div class="row">
							<div class="col-xs-10">
								<div class="form-group">
									<label>Role <span>*</span></label>
									<input type="text" name="role_name" class="form-control" value="<?php echo $role_name; ?>">
								</div>
							</div>
							<div class="col-xs-2">
								<input type="hidden" name="role_id" value="<?php echo $role_id; ?>">
								<input type="submit" name="submit" value="Add Role" class="btn btn-primary" style="margin-top: 24px;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->