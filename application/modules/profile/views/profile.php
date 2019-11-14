<div class="panel panel-white">
	<div class="panel-body">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
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
		?>

	<form action="<?php uri_string()?>p_profile" method='post' name='process'>
		<div class="row top-buffer">
			<div class="form-group">
				<label for="usr_fst_nm">First Name:</label>
				<input type="text" name="usr_fst_nm" id="usr_fst_nm" value="<?php echo $user->usr_fst_nm; ?>" class="form-control" placeholder="Enter First Name" disabled="disabled">
				<span class="text-danger"><?php echo form_error('usr_fst_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_mdl_nm">Middle Name:</label>
				<input type="text" name="usr_mdl_nm" id="usr_mdl_nm" value="<?php echo $user->usr_mdl_nm; ?>" class="form-control" placeholder="Enter Middle Name" disabled="disabled">
				<span class="text-danger"><?php echo form_error('usr_mdl_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_lst_nm">Last Name:</label>
				<input type="text" name="usr_lst_nm" id="usr_lst_nm" value="<?php echo $user->usr_lst_nm; ?>" class="form-control" placeholder="Enter Last Name" disabled="disabled">
				<span class="text-danger"><?php echo form_error('usr_lst_nm') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_eml_add">Email Address:</label>
				<input type="email" name="usr_eml_add" id="usr_eml_add" value="<?php echo $user->usr_eml_add; ?>" class="form-control" placeholder="Enter Email Address" disabled="disabled">
				<span class="text-danger"><?php echo form_error('usr_eml_add') ?></span>
			</div>
			<div class="form-group">
				<label for="usr_phn_no">Phone Number:</label>
				<input type="text" name="usr_phn_no" id="usr_phn_no" value="<?php echo $user->usr_phn_no; ?>" class="form-control" placeholder="Enter Phone Number" disabled="disabled">
				<span class="text-danger"><?php echo form_error('usr_phn_no') ?></span>
			</div>
			<div class="form-group">
				<label for="tb_00_aut_id">Role:</label>
				<select  class="form-control" id="tb_00_aut_id" name='tb_00_aut_id' disabled="disabled">
					<?php
					if($roles->num_rows() > 0){
						foreach($roles->result() as $row){
							echo "<option value='".$row->aut_id."'".($user->aut_id == $row->aut_id?'selected="selected"':'').">".$row->aut_00_nm."</option>";
						}
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<a href="javascript:;" id="edit_profile" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a>
				<input type="hidden" name="usr_id" value="<?php echo $user->usr_id ?>">
				<input type="submit" name="update" value="Update" class="btn btn-info" disabled="disabled"/>
			</div>
		</div>
	</form>
</div><!--End Panel Body-->
</div>
</div>
</div>