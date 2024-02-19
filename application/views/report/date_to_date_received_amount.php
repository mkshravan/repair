<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manage Date to Date Quotation</h3>
            </div>
			<form method="POST">
				<div class="col-md-9">
				<div class="col-md-3">
					<label for="company_gst" class="control-label">From Date</label>
					<div class="form-group">
						<input type="date" name="from_date"class="form-control" id="from_date" />
					</div>
				</div>
				<div class="col-md-3">
					<label for="company_gst" class="control-label">To Date</label>
					<div class="form-group">
						<input type="date" name="to_date"class="form-control" id="to_date" />
					</div>
				</div>
				<div class="col-md-3">
					<label for="company_gst" class="control-label"></label>
					<div class="form-group">
					<input type="submit" name="submit" class="form-control btn btn-info" id="submit" value="Submit" />
					</div>
				</div>
				</div>
				
			</form>
            <div class="box-body">
                <table class="table table-striped" id="dateToDateReceivedAmount">
				<thead>
                    <tr>
						<th>Sl No</th>
						<th>Transaction No.</th>
						<th>Date</th>
						<th>Quotation No.</th>
						<th>Invoice No.</th>
						<th>Payment For</th>
						<th>Payment Mode</th>
						<th>Transaction Details</th>
						<th>Amount</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($date_quotation as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['transaction_no']; ?></td>
						<td><?php echo $i['quote_date']; ?></td>
						<td><?php echo $i['quotation_no']; ?></td>
						<td><?php echo $i['invoice_no']; ?></td>
						<td><?php echo $i['payment_for']; ?></td>
						<td><?php echo $i['payment_mode']; ?></td>
						<td><?php echo $i['transaction_details']; ?></td>
						<td><?php echo $i['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('item_service_list/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item_service_list/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
