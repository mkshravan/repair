<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manage Tax Invoice</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped" id="taxInvoice">
                <thead>
                    <tr>
						<th>Sl No</th>
						<th>Invoice No.</th>
						<th>Invoice Date</th>
						<th>Customer</th>
						<th>Total Amount</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php $count = 1 ?>
                    <?php foreach($tax_invoice as $i){ ?>
                    <tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $i['invoice_no']; ?></td>
						<td><?php echo $i['invoice_date']; ?></td>
						<td><?php echo $i['customer_name']; ?></td>
						<td><?php echo $i['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('report/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('report/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
