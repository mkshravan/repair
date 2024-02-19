<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" required value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" required name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" required class="control-label">New Password</label>
						<div class="form-group">
							<input type="text" name="password" value="" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cnfpassword" required class="control-label">Confirm Password</label>
						<div class="form-group">
							<input type="password" name="cnfpassword" value="" class="form-control" id="cnfpassword" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Emp ID</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo ($this->input->post('emp_id') ? $this->input->post('emp_id') : $user['emp_id']); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quotation_no" required class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control">
							<option value="2">Technician</option>
							<option value="1">Admin</option>							
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<span id="msgPass" class="text-danger">Password Not Matched</span>
	        </div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success" id="cghPwd" >
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

