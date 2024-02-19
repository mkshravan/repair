<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manage Date to Date Tax Invoice</h3>
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
                <table class="table table-striped datetodateinvoice" id="dateToDateTaxInvoice">
				<thead>
                    <tr>
						<th>Sl No</th>
						<th>Invoice No.</th>
						<th>Invoice Date</th>
						<th>Customer</th>
						<th>Description</th>
						<th>Total Amount</th>
                    </tr>
					</thead>
                    <?php
						$count=1;
					foreach($date_invoice as $i){ ?>
                    <tr>
						<td><?php echo $count++ ?></td>
						<td><?php echo $i['invoice_no']; ?></td>
						<td><?php echo $i['invoice_date']; ?></td>
						<td><?php echo $i['customer_name']; ?>
						<td><?php echo $i['description']; ?>
						<td><?php echo $i['total']; ?>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
