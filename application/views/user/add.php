<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add User</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-3">
						<label for="invoice_date" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="invoice_no" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quotation_no" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quotation_no" class="control-label">Confirm Password</label>
						<div class="form-group">
							<input type="text" name="confirm_password" value="<?php echo $this->input->post('confirm_password'); ?>" class="form-control" id="cnfpassword" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="emp_id" class="control-label">Emp ID</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo $this->input->post('emp_id'); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select class="form-control" name="role">
							   <option>---Select---</option>
							   <option value="1">Admin</option>
							   <option value="2">Technician</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="box-footer">
            	<span id="msgPass" class="text-danger">Password Not Matched</span>
	        </div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success" id="cghPwd">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script>
	$(document).ready(function () {

	$('#cghPwd').attr('disabled',true);
	$("#msgPass").hide();

    $( "#password").keyup(function() {
	  if( $(this).val()!= $('#cnfpassword').val())
		  
		  {
		  	$('#cghPwd').attr('disabled',true);
		  	$("#msgPass").show(); 
		  	
		  }
	  else{

	  		if(($(this).val()!='') && ($('#confirmPassword').val()!='') ){
	  			$('#cghPwd').attr('disabled',false);
		  		$("#msgPass").hide();
	  		}
	  		else{
	  			$('#cghPwd').attr('disabled',true);
		  		$("#msgPass").show(); 
	  		}
		  
	  }
	});

$( "#cnfpassword").keyup(function() {
	  if( $(this).val()!=$('#password').val() )
		  
		  {
		  	$('#cghPwd').attr('disabled',true);
		  $("#msgPass").show(); 

		  }
	  else{
		  
			if(($(this).val()!='') && ($('#confirmPassword').val()!='') ){
	  			$('#cghPwd').attr('disabled',false);
		  		$("#msgPass").hide();
	  		}
	  		else{
	  			$('#cghPwd').attr('disabled',true);
		  		$("#msgPass").show(); 
	  		} 
	  }
	});

}); 
</script>