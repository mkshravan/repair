<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Invoice Edit</h3>
            </div>
			<?php echo form_open('invoice/edit/'.$invoice['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="invoice_date" class="control-label">Invoice Date</label>
						<div class="form-group">
							<input type="text" name="invoice_date" value="<?php echo ($this->input->post('invoice_date') ? $this->input->post('invoice_date') : $invoice['invoice_date']); ?>" class="form-control" id="invoice_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="invoice_no" class="control-label">Invoice No</label>
						<div class="form-group">
							<input type="text" name="invoice_no" value="<?php echo ($this->input->post('invoice_no') ? $this->input->post('invoice_no') : $invoice['invoice_no']); ?>" class="form-control" id="invoice_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quotation_no" class="control-label">Quotation No</label>
						<div class="form-group">
							<input type="text" name="quotation_no" value="<?php echo ($this->input->post('quotation_no') ? $this->input->post('quotation_no') : $invoice['quotation_no']); ?>" class="form-control" id="quotation_no" />
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