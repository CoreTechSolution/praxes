<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
					<form id="add_company_form" method="post" action="admin/edit_company_form" class="formclass">
						<div class="row">
							<div class="col-xs-10">
								<div class="form-group">
									<label>Company <span>*</span></label>
									<input type="text" name="company_name" class="form-control" value="<?php echo $company_name; ?>">
								</div>
							</div>
							<div class="col-xs-2">
								<input type="submit" name="submit" value="Add Company" class="btn btn-primary" style="margin-top: 24px;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->