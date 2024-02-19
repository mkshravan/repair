<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Inventory Edit</h3>
            </div>
			<?php echo form_open('inventory/edit/'.$inventory['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="part_description" class="control-label">Part Description</label>
						<div class="form-group">
							<input type="text" disabled="disabled" name="part_description" value="<?php echo ($this->input->post('part_description') ? $this->input->post('part_description') : $inventory['part_description']); ?>" class="form-control" id="part_description" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dealer_name" class="control-label">Dealer Name</label>
						<div class="form-group">
							<input type="text" disabled="disabled" name="dealer_name" value="<?php echo ($this->input->post('dealer_name') ? $this->input->post('dealer_name') : $inventory['dealer_name']); ?>" class="form-control" id="dealer_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" disabled="disabled" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $inventory['date']); ?>" class="form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rate" class="control-label">Unit Rate</label>
						<div class="form-group">
							<input type="text" disabled="disabled" name="rate" value="<?php echo ($this->input->post('rate') ? $this->input->post('rate') : $inventory['rate']); ?>" class="form-control" id="rate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_status" class="control-label">Payment Advane/ Full</label>
						<div class="form-group">
							<select class="form-control" name="payment_status" id="payment_status">								
								<option val="Advance">Advance</option>
								<option val="Full">Full</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $inventory['amount']); ?>" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_mode" class="control-label">Payment Mode</label>
						<div class="form-group">
							<select class="form-control" name="payment_mode" id="payment_mode">
								<option val="Cash">Cash</option>
								<option val="Online">Online</option>
								<option val="Cheque">Cheque</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#payment_status option[val="<?php echo $inventory['payment_status']?>"]').prop("selected",true);
		$('#payment_mode option[val="<?php echo $inventory['payment_mode']?>"]').prop("selected",true);
	});
		
	
	

</script>