<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Invoice Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('invoice/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a> 
                </div>
            </div>
            <h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
            <div class="box-body">
                <table class="table table-striped invoice">
                    <thead>
                        <tr>
                        <th>Sl No</th>
                        <th>Quotation No</th>
                        <th>Invoice No</th>
                        <th>Invoice Date</th>
                        <th>Customer</th>
                        <th>Total Amount</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php $sl_no=1; foreach($invoice as $i){ ?>
                    <tr>
                        <td><?php echo $sl_no; ?></td>
                        <td><?php echo $i['quotation_no']; ?></td>
                        <td><?php echo $i['invoice_no']; ?></td>
                        <td><?php echo $i['invoice_date']; ?></td>
                        <td><?php echo $i['customer_name']; ?></td>
                        <td><?php echo $i['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('invoice/printInvoice/'.$i['quotation_no']); ?>" class="btn btn-default btn-xs" target="_blank"><span class="fa fa-print"></span></a>
                        </td>
                    </tr>
                    <?php $sl_no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
