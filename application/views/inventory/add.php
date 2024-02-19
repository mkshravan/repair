 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Inventory Add</h3>
            </div>
          	<div class="box-body">
          		<div class="row clearfix">				
				</div>
			</div>

			<div class="box-header with-border">
              	<h3 class="box-title">Inventory Details</h3>
            </div>

            <form action="<?php echo base_url();?>inventory/add" method="POST">
			<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-3">
						<label for="part_description" class="control-label">Part Description</label>
						<div class="form-group">
							<input type="text" name="part_description" value="<?php echo $this->input->post('part_description'); ?>" class="form-control" id="part_description" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="dealer_name" class="control-label">Dealer Name</label>
						<div class="form-group">
							<input type="text" name="dealer_name" value="<?php echo $this->input->post('dealer_name'); ?>" class="form-control" id="dealer_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="date" name="date" value="<?php echo date("yy-m-d"); ?>" class="form-control" id="date" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="rate" class="control-label">Unit Rate</label>
						<div class="form-group">
							<input type="text" name="rate" value="" class="form-control" id="rate" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="payment_status" class="control-label">Payment Advane/ Full</label> 
						<div class="form-group">
							<select class="form-control" name="payment_status" id="payment_status">
								<option value="Advance">Advance</option>
								<option value="Full">Full</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 amountDiv">
						<label for="payment_status" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="payment_mode" class="control-label">Payment Mode</label>
						<div class="form-group">
							<select class="form-control" name="payment_mode">
								<option value="Cash">Cash</option>
								<option value="Online">Online</option>
								<option value="Cheque">Cheque</option>
							</select>
						</div>
					</div>
					
				</div>


			</div>

          	<div class="box-footer">
            	<button type="submit" class="btn btn-primary" id="submitFormBtn">
            		<i class="fa fa-check"></i> Submit
            	</button>
          	</div>
          </form>
      	</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script>
	
	$(document).ready(function(){

		 
		$('#payment_status').on('change',function(){

			if($(this).val()=="Full"){
				$("#amount").val($("#rate").val());
			}
			else{
				$("#amount").val("");
			}
			
		});
		
		
	});
</script>