<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Complaints Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/complaints/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <div class="box-body table-responsive">

            	<h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
               <table class="table table-striped complaints" id="complaints">
					<thead>	
						<tr>
							<th>Sl#</th>
							<th>Complaints No.</th>
							<th>Complaints Text</th>
							<th>Customer Name</th>
							<th>Customer Phone No.</th>
							<th>Address</th>
							<th>Service Engineer</th>
							<th>LRO</th>
							<th>Outsourced</th>
							<th>Dealer Name</th>
							<th>Dealer Price</th>
							<th>Dealer Contact No.</th>
							<th>Product</th>
							<th>Product Serial</th>
							<th>Service Tag</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="complaintsTbodyId">
                    <?php $slno=1; foreach($complaints as $q){  ?>
                    
						<tr>
						<td><?php echo $slno;?></td>
						<td><?php echo $q['complaint_no']; ?></td>
						<td><?php echo $q['complain_text']; ?></td>
						<td><?php echo $q['client_name']; ?></td>
						<td><?php echo $q['client_phone']; ?></td>
						<td><?php echo $q['address']; ?></td>
						<td><?php echo $q['service_engineer']; ?></td>
						<td><?php echo $q['LRO']; ?></td>
						<td><?php echo $q['outsourced']; ?></td>
						<td><?php echo $q['dealer_name']; ?></td>
						<td><?php echo $q['dealer_price']; ?></td>
						<td><?php echo $q['dealer_contact_no']; ?></td>
						<td><?php echo $q['product']; ?></td>
						<td><?php echo $q['product_serial_no']; ?></td>
						<td><?php echo $q['service_tag']; ?></td>
						<!-- <td style="display: none;"><?php echo $q['approval_status']; ?></td> -->
						<td>
                            <a href="<?php echo site_url('admin/complaints/view/'.$q['id']); ?>" class="btn btn-info btn-xs" target=""><span class="fa fa-eye" ></span></a> 
							<a href="<?php echo site_url('admin/complaints/edit/'.$q['id']); ?>" class="btn btn-info btn-xs" target=""><span class="fa fa-pencil" ></span></a> 
							<?php
							if($this->session->userdata('roles')==1){
								echo "<a href='".site_url('admin/complaints/remove/'.$q['id'].'')."'
								 class='btn btn-danger btn-xs' ><span class='fa fa-remove'></span></a>";
							}
							?>
                            
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
		
		$("#complaintsTbodyId tr").each(function(){

			if($(this).find("td:eq(6)").text()=="Approved"){
				$(this).find("td:eq(7)").find("a:eq(0)").hide();
			}
		});
		
	});
</script>