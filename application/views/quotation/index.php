<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quotation Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('quotation/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="box-body">

            	<h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
               <table class="table table-striped quotation" id="quotation">
					<thead>	
						<tr>
							<th>Sl#</th>
							<th>Quotation No.</th>
							<th>Quote Date</th>
							<th>Customer</th>
							<th>Description</th>
							<th>Total Amount</th>
							<th style="display: none;"></th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="quotationTbodyId">
                    <?php $slno=1; foreach($quotation as $q){  ?>
                    
						<tr>
						<td><?php echo $slno;?></td>
						<td><?php echo $q['quotation_no']; ?></td>
						<td><?php echo $q['quote_date']; ?></td>
						<td><?php echo $q['customer_name']; ?></td>
						<td><?php echo $q['description']; ?></td>
						<td><?php echo $q['quotation_amount']; ?></td>
						<td style="display: none;"><?php echo $q['approval_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('quotation/edit/'.$q['id']); ?>" class="btn btn-info btn-xs" target="_blank"><span class="fa fa-pencil" ></span></a> 
                            <a href="<?php echo site_url('quotation/printQuotation/'.$q['quotation_no']); ?>" class="btn btn-default btn-xs"  target="_blank"><span class="fa fa-print"></span></a>
                        </td>
					</tr>
					<?php $slno++; } ?>
					<tbody>
                    
                </table>
                                
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script>
	
	$(document).ready(function(){
		
		$("#quotationTbodyId tr").each(function(){

			if($(this).find("td:eq(6)").text()=="Approved"){
				$(this).find("td:eq(7)").find("a:eq(0)").hide();
			}
		});
		
	});
</script>