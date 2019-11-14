<div class="panel panel-white">
	<div class="panel-body">
<div class="row">
	<?php
	if(isset($result)) {
		?>
		<div
				class="alert alert-dismissible fade in <?php echo ($result['success']) ? 'alert-success' : 'alert-danger' ?>">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong><?php echo (!$result['success']) ? 'Error!' : 'Success!' ?></strong> <?php echo $result['message'] ?>
			</div>
	 	<?php
	}

if($this->uri->segment(3)=='new' || $this->uri->segment(3)=='edit' ) {
	 	?>
	<div class="col-md-6 col-md-offset-3">
		<p><a href="<?php echo base_url('admin/users'); ?>"><i class="fa fa-long-arrow-left"></i> Back</a></p>
		<form method="post" action="<?php echo current_url(); ?>">
		
			<div class="form-group">
				<label for="usr_fst_nm">First Name:</label>
				<input type="text" name="usr_fst_nm" id="usr_fst_nm" value="<?php echo $user->usr_fst_nm; ?>" class="form-control" placeholder="Enter First Name">
				<span class="text-danger"><?php echo form_error('usr_fst_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_mdl_nm">Middle Name:</label>
				<input type="text" name="usr_mdl_nm" id="usr_mdl_nm" value="<?php echo $user->usr_mdl_nm; ?>" class="form-control" placeholder="Enter Middle Name">
				<span class="text-danger"><?php echo form_error('usr_mdl_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_lst_nm">Last Name:</label>
				<input type="text" name="usr_lst_nm" id="usr_lst_nm" value="<?php echo $user->usr_lst_nm; ?>" class="form-control" placeholder="Enter Last Name">
				<span class="text-danger"><?php echo form_error('usr_lst_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_eml_add">Email Address:</label>
				<input type="email" name="usr_eml_add" id="usr_eml_add" value="<?php echo $user->usr_eml_add; ?>" class="form-control" placeholder="Enter Email Address">
				<span class="text-danger"><?php echo form_error('usr_eml_add') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_phn_no">Phone Number:</label>
				<input type="text" name="usr_phn_no" id="usr_phn_no" value="<?php echo $user->usr_phn_no; ?>" class="form-control" placeholder="Enter Phone Number">
				<span class="text-danger"><?php echo form_error('usr_phn_no') ?></span>
			</div>
			<div class="form-group">
				<label for="tb_00_aut_id">User Role:</label>
				<select  class="form-control" id="tb_00_aut_id" name='tb_00_aut_id'>
					<?php
					if($roles->num_rows() > 0){
						foreach($roles->result() as $row){
							?>
						<option value='<?php echo $row->aut_id; ?>'><?php echo $row->aut_00_nm; ?></option>
							<?php
						}
					}
					?>
				</select>
			</div>
			<?php
			if($this->uri->segment(3)=='edit'){
				?>
					<input type="hidden" name="usr_id" value="<?php echo $user->usr_id; ?>">
			<?php
			}
			?>
			<div class="form-group">
				<input type="submit" name="submit" value="<?php echo $this->uri->segment(3)=='edit'? 'Update': 'Create New' ?>" class="btn btn-info"/>
			</div>
		</form>
	</div>
	<?php
}else{
?>
<div class="col-md-12">
	<p>
		<a class="Create New" href="<?php echo base_url('admin/users/new'); ?>">
		<i class="fa fa-plus"></i> Create New</a>
	</p>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if($users->num_rows() > 0){
			foreach($users->result() as $user){
				echo "<tr>
						<td>$user->usr_fst_nm</td>
						<td>$user->usr_mdl_nm</td>
						<td>$user->usr_lst_nm</td>
						<td>$user->usr_eml_add</td>
						<td>$user->usr_phn_no</td>
						<td><a href='".base_url()."admin/users/edit/$user->usr_id'><i class='fa fa-lg fa-pencil-square-o'></i></a> </td>
					</tr>";
			}
		}
		?>
		</tbody>
	</table>
</div>
	<?php
}
?>
</div>
</div>
</div>