<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Complain Modify</h3>
			</div>
			<form action="<?php echo site_url('admin/complaints/edit/'.$complaints["id"]); ?>" method="POST">
				<div class="box-body" autocomplete="on">
					<div class="row clearfix">
					<div class="col-md-3 hidden">
							<label for="id" class="control-label">Complaint No</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="id"
									value="<?php echo ($this->input->post('id') ? $this->input->post('id') : $complaints['id']); ?>"
									readonly class="form-control" id="id" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="complaint_no" class="control-label">Complaint No</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="complaint_no"
									value="<?php echo ($this->input->post('complaint_no') ? $this->input->post('complaint_no') : $complaints['complaint_no']); ?>"
									readonly class="form-control" id="complaint_no" />
							</div>
						</div>
						<div class="col-md-3 hidden">
							<label for="complain_entry_date" class="control-label">Complain Entry Date</label>
							<div class="form-group">
								<input type="text" name="complain_entry_date" autocomplete="on"
									value="<?php echo ($this->input->post('complain_entry_date') ? $this->input->post('complain_entry_date') : $complaints['complain_entry_date']); ?>"
									class="form-control" id="complain_entry_date" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="client_name" class="control-label">Customer Name</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="client_name"
									value="<?php echo ($this->input->post('client_name') ? $this->input->post('client_name') : $complaints['client_name']); ?>"
									class="form-control" id="client_name" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="client_phone" class="control-label">Customer Phone Number</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="client_phone"
									value="<?php echo ($this->input->post('client_phone') ? $this->input->post('client_phone') : $complaints['client_phone']); ?>"
									class="form-control" id="client_phone" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="address" class="control-label">Address</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="address"
									value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $complaints['address']); ?>"
									class="form-control" id="address" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="pin_code" class="control-label">Pin Code</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="pin_code"
									value="<?php echo ($this->input->post('pin_code') ? $this->input->post('pin_code') : $complaints['pin_code']); ?>"
									class="form-control" id="pin_code" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="service_engineer" class="control-label">Service Engineer</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="service_engineer"
									value="<?php echo ($this->input->post('service_engineer') ? $this->input->post('service_engineer') : $complaints['service_engineer']); ?>"
									class="form-control" id="service_engineer" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="region" class="control-label">Region</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="region"
									value="<?php echo ($this->input->post('region') ? $this->input->post('region') : $complaints['region']); ?>"
									class="form-control" id="region" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="LRO" class="control-label">LRO</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="LRO"
									value="<?php echo ($this->input->post('LRO') ? $this->input->post('LRO') : $complaints['LRO']); ?>"
									class="form-control" id="LRO" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="outsourced" class="control-label">Outsourced</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="outsourced"
									value="<?php echo ($this->input->post('outsourced') ? $this->input->post('outsourced') : $complaints['outsourced']); ?>"
									class="form-control" id="outsourced" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_name" class="control-label">Dealer Name</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('dealer_name') ? $this->input->post('dealer_name') : $complaints['dealer_name']); ?>"
									name="dealer_name" class="form-control" id="dealer_name" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_price" class="control-label">Dealer Price</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('dealer_price') ? $this->input->post('dealer_price') : $complaints['dealer_price']); ?>"
									name="dealer_price" class="form-control" id="dealer_price" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_contact_no" class="control-label">Dealer Contact No</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('dealer_contact_no') ? $this->input->post('dealer_contact_no') : $complaints['dealer_contact_no']); ?>"
									name="dealer_contact_no" class="form-control" id="dealer_contact_no" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="product" class="control-label">Product</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('product') ? $this->input->post('product') : $complaints['product']); ?>"
									name="product" class="form-control" id="product" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="product_serial_no" class="control-label">Product Serial No</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('product_serial_no') ? $this->input->post('product_serial_no') : $complaints['product_serial_no']); ?>"
									name="product_serial_no" class="form-control" id="product_serial_no" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="service_tag" class="control-label">Service Tag</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo ($this->input->post('service_tag') ? $this->input->post('service_tag') : $complaints['service_tag']); ?>" name="service_tag"
									class="form-control" id="service_tag" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="complain_closed" class="control-label">Complain Closed</label>
							<div class="form-group">
								<select name="complain_closed" id="complain_closed" class="form-control">
									<option value="0" <?= $complaints['complain_closed']==0 ? 'selected' :''?>>No</option>
									<option value="1" <?= $complaints['complain_closed']==1 ? 'selected' :'' ?>>Yes</option>
								</select>
								<!-- <input type="text" autocomplete="on" value="<?php echo $this->input->post('complain_closed'); ?>" name="complain_closed" class="form-control" id="complain_closed" /> -->
							</div>
						</div>
						<div class="col-md-3">
							<label for="complain_closed_date" class="control-label">Complain Closed Date</label>
							<div class="form-group">
								<input type="date" autocomplete="on" value="<?php echo ($this->input->post('complain_closed_date') ? $this->input->post('complain_closed_date') : $complaints['complain_closed_date']); ?>"
									name="complain_closed_date" class="form-control" id="complain_closed_date" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="complain_text" class="control-label">Write Your Problem</label>
							<div class="form-group">
								<textarea name="complain_text" autocomplete="on" id="complian_text" class="form-control"
									cols="30" rows="10"><?php echo ($this->input->post('complain_text') ? $this->input->post('complain_text') : $complaints['complain_text']); ?></textarea>
							</div>
						</div>
						<div class="col-md-3">
							<label for="work_done_till_date" class="control-label">Work Done Till Date</label>
							<div class="form-group">
								<textarea name="work_done_till_date" autocomplete="on" id="work_done_till_date"
									class="form-control" cols="30"
									rows="10"><?php echo ($this->input->post('work_done_till_date') ? $this->input->post('work_done_till_date') : $complaints['work_done_till_date']); ?></textarea>
							</div>
						</div>
						<div class="col-md-3">
							<label for="solution" class="control-label">Solution</label>
							<div class="form-group">
								<textarea name="solution" autocomplete="on" id="solution" class="form-control" cols="30"
									rows="10"><?php echo ($this->input->post('solution') ? $this->input->post('solution') : $complaints['solution']); ?></textarea>
							</div>
						</div>
					</div>


				</div>
				<div class="box-footer">
					<button type="submit" id="submitFormBtn" class="btn btn-success">
						<i class="fa fa-save"></i> Update
					</button>
				</div>
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

