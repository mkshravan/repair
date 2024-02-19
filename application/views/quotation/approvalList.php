<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quotation Approval</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('quotation/quotationApprovalAdd'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="box-body">

            	<h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
                <table class="table table-striped quotationApproval" id="quotation">
					<thead>	
						<tr>
							<th style="display: none">ID</th>
							<th>Sl No.</th>
							<th>Quotation No.</th>
							<th>Approval Date</th>
							<th>Approval Status</th>
							<th>Payment For</th>
							<th>Description</th>
							<th>Amount</th>
							<th style="display: none">Invoice</th>
							<th>Actions</th>
						</tr>
					</thead>
                    <?php $sl_no=1;foreach($quotation as $q){ ?>
                    <tbody id="approvlListTbodyId">
						<tr>
						<td style="display: none"><?php echo $q['id']; ?></td>
						<td><?php echo $sl_no; ?></td>
						<td><?php echo $q['quotation_no']; ?></td>
						<td><?php echo $q['approval_date']; ?></td>
						<td><?php echo $q['approval_status']; ?></td>
						<td><?php echo $q['payment_for']; ?></td>
						<td><?php echo $q['description']; ?></td>
						<td><?php echo $q['total']; ?></td>
						<td style="display: none"><?php echo $q['invoice_generated']; ?></td>
						<td>
							<a href="<?php echo site_url('quotation/editApproval/'.$q['id']); ?>" class="btn btn-primary btn-xs" target="_blank" style="display: none" ><span class="fa fa-edit"></span></a>
                            <a href="<?php echo site_url('quotation/printQuotationApproval/'.$q['quotation_no']); ?>" class="btn btn-default btn-xs" target="_blank" ><span class="fa fa-print"></span></a>
                            <a href="<?php echo site_url('invoice/printInvoice/'.$q['quotation_no'].'?tax_invoice=11xSweQwoiyuTY'); ?>" class="btn btn-default btn-xs" target="_blank"><span class="fa fa-print"></span></a>
                        </td>
					</tr>
					<tbody>
                    <?php $sl_no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
	
	$(document).ready(function(){

		/*$("#quotation tbody tr").each(function(){

			if($(this).find("td:eq(7)").text()=="yes"){
				$(this).find("td:last").find("a:first").hide();
			}

			else{
				$(this).find("td:last").find("a:first").show();
			}
		});*/

		$("#approvlListTbodyId tr").each(function(){

			if($(this).find("td:eq(5)").text()=="Tax Invoice"){
				$(this).find("td:last").find("a:eq(1)").hide();
				$(this).find("td:last").find("a:eq(2)").show();
			}
			else{
				$(this).find("td:last").find("a:eq(1)").show();
				$(this).find("td:last").find("a:eq(2)").hide();
			}
		});

		


	});

</script>