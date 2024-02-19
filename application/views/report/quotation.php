<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quotation Manage</h3>
            </div>
            <div class="box-body">

            	<h4 class="text-center text-success"><?php echo $this->session->flashdata('response'); ?></h4>
                <table class="table table-striped quotation" id="quotation">
					<thead>	
						<tr>
							<th style="display: none">ID</th>
							<th>Sl#</th>
							<th>Quotation No.</th>
							<th>Quote Date</th>
							<th>Customer</th>
							<th>Mobile Number</th>
							<th>Email</th>
							<th>Total Amount</th>
							
							<th>Actions</th>
						</tr>
					</thead>
                    <?php $slno=1; foreach($quotation as $q){  ?>
                    <tbody>
						<tr>
						<td style="display: none"><?php echo $q['id']; ?></td>
						<td><?php echo $slno;?></td>
						<td><?php echo $q['quotation_no']; ?></td>
						<td><?php echo $q['quote_date']; ?></td>
						<td><?php echo $q['customer_name']; ?></td>
						<td><?php echo $q['mob_no']; ?></td>
						<td><?php echo $q['email']; ?></td>
						<td><?php echo $q['total']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/quotation/edit/'.$q['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/quotation/remove/'.$q['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
					</tr>
					<tbody>
                    <?php $slno++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>