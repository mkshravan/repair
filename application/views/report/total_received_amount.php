<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manage Received Amount</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped" id="totalreceivedamount">
                <thead>
                    <tr>
						<th>Sl No</th>
						<th>Transaction No.</th>
						<th>Date</th>
						<th>Quotation No.</th>
						<th>Invoice No.</th>
						<th>Payment For</th>
						<th>payment Mode</th>
						<th>Total Amount</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($quotation as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['transaction_no']; ?></td>
						<td><?php echo $i['quote_date']; ?></td>
						<td><?php echo $i['quotation_no']; ?></td>
						<td><?php echo $i['invoice_no']; ?></td>
						<td><?php echo $i['payment_for']; ?></td>
						<td><?php echo $i['payment_mode']; ?></td>
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
