<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div style="text-align: right; margin-bottom: 10px;"><a href="<?php echo base_url('admin/add-company'); ?>" class="btn btn-primary">Add Company</a></div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Companies</h3>
				</div>
				<div class="box-body">
					<?php if(!empty($companies)){ ?>
						<table id="footable" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Company</th>
								<th></th>
							</tr>
							</thead>
							<?php foreach($companies as $company){ ?>
								<tr>
									<td><?php echo $company['company_name']; ?></td>
									<td style="text-align: right;"><a href="<?php echo base_url('admin/edit-company/'); ?>?id=<?php echo $company['company_id']; ?>" style="color: #3c8dbc;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp;<a href="<?php echo base_url('admin/delete-company/'); ?>?id=<?php echo $company['company_id']; ?>" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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