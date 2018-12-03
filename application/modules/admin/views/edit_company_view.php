<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<form id="add_company_form" method="post" action="<?php echo base_url('admin/edit_company_form'); ?>" class="formclass">
						<div class="row">
							<div class="col-xs-10">
								<div class="form-group">
									<label>Company <span>*</span></label>
									<input type="text" name="company_name" class="form-control" value="<?php echo $company_name; ?>">
								</div>
							</div>
							<div class="col-xs-2">
                                <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
								<input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-top: 24px;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->