<style type="text/css">
    .inventory_title{
        color:red;
        

    }
    .inventory_price{
        color: #3c8dbc;
        font-weight: bold;
        margin-top: -10px;
    }

</style>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Inventory Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('inventory/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a> 
                </div>
				
				<div class="row clearfix">
                <div class="col-md-3">
                    <label for="company_gst" class="control-label"><h3 class="text-primary">Total Rate</h3> </label>
                    <div class="form-group">
                            <h3 class="inventory_price"><?php echo($count_all_rate[0]['total_rate']); ?></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="company_gst" class="control-label"><h3 class="text-green">Total Amount Received</h3> </label>
                    <div class="form-group">
                            <h3 class="inventory_price"><?php echo($count_all_amount[0]['total_amount']); ?></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="company_gst" class="control-label"><h3 class="inventory_title">Total Dues </h3></label>
                    <div class="form-group">
                            <h3 class="inventory_price"><?php echo($count_all_rate[0]['total_rate']-$count_all_amount[0]['total_amount']); ?></h3>
                    </div>
                </div>
            </div>
			<!--<h3>Total Dues </h3> -->
            </div>
			
			
            <h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
            <div class="box-body">
                <table class="table table-striped invoice display nowrap" id="inventory">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Part Description</th>
                        <th>Dealer Name</th>
                        <th>Date</th>
                        <th>Rate</th>
						<th>Payment Status</th>
						<th>Dues</th>
                        <th>Payment Mode</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach($inventory as $i){ ?>
                        <tr>
                            <td><?php echo $i['id']; ?></td>
                            <td><?php echo $i['part_description']; ?></td>
                            <td><?php echo $i['dealer_name']; ?></td>
                            <td><?php echo $i['date']; ?></td>
                            <td><?php echo $i['rate']; ?></td>
                            <td><?php echo $i['payment_status']."--".$i['amount']?></td>
							<td><?php echo ($i['rate'])-($i['amount']); ?></td>
                            <td><?php echo $i['payment_mode']; ?></td>
                        <td>
                            <a href="<?php echo site_url('inventory/edit/'.$i['id']); ?>" class="btn btn-default btn-xs" target="_blank"><span class="fa fa-pencil"></span></a>
                        </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    
                </table>
                                
            </div>
        </div>
    </div>
</div>


