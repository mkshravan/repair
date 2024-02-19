<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manage Cancel Quotation</h3>
            	
            </div>
            <div class="box-body">
                <table class="table table-striped cancelquote" id="cancelquote">
				<thead>	
					<tr>
						<th>Sl No</th>
						<th>Quotation No.</th>
						<th>Description</th>
						<th>Customer Name</th>
						<th>Mob No</th>
						<th>Amount</th>
						<th>Remarks</th>
						<th>Disappoval Date</th>
                    </tr>
					</thead>
                    <?php $sl_no=1; foreach($quotation as $i){ ?>
                    <tr>
						<td><?php echo $sl_no; ?></td>
						<td><?php echo $i['quotation_no']; ?></td>
						<td><?php echo $i['description']; ?></td>
						<td><?php echo $i['customer_name']; ?></td>
						<td><?php echo $i['mob_no']; ?></td>
						<td><?php echo $i['quotation_amount']; ?></td>
						<td><?php echo $i['customer_remarks']; ?></td>
						<td><?php echo $i['approval_date']; ?></td>
						
						
                    </tr>
                    <?php $sl_no++; } ?> 
                </table>
                                
            </div>
        </div>
    </div>
</div>
