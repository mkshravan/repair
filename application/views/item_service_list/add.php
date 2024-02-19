<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Item Service List Add</h3>
            </div>
            <?php echo form_open('item_service_list/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="sl_no" class="control-label">Sl No</label>
						<div class="form-group">
							<input type="text" name="sl_no" value="<?php echo $this->input->post('sl_no'); ?>" class="form-control" id="sl_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hsn_sac" class="control-label">Hsn Sac</label>
						<div class="form-group">
							<input type="text" name="hsn_sac" value="<?php echo $this->input->post('hsn_sac'); ?>" class="form-control" id="hsn_sac" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="goods_service_desc" class="control-label">Goods Service Desc</label>
						<div class="form-group">
							<input type="text" name="goods_service_desc" value="<?php echo $this->input->post('goods_service_desc'); ?>" class="form-control" id="goods_service_desc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label">Qty</label>
						<div class="form-group">
							<input type="text" name="qty" value="<?php echo $this->input->post('qty'); ?>" class="form-control" id="qty" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="unit_price" class="control-label">Unit Price</label>
						<div class="form-group">
							<input type="text" name="unit_price" value="<?php echo $this->input->post('unit_price'); ?>" class="form-control" id="unit_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gst_percentage" class="control-label">Gst Percentage</label>
						<div class="form-group">
							<input type="text" name="gst_percentage" value="<?php echo $this->input->post('gst_percentage'); ?>" class="form-control" id="gst_percentage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gst_amount" class="control-label">Gst Amount</label>
						<div class="form-group">
							<input type="text" name="gst_amount" value="<?php echo $this->input->post('gst_amount'); ?>" class="form-control" id="gst_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label">Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quotation_no" class="control-label">Quotation No</label>
						<div class="form-group">
							<input type="text" name="quotation_no" value="<?php echo $this->input->post('quotation_no'); ?>" class="form-control" id="quotation_no" />
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