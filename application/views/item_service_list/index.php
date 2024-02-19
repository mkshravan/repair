<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Item Service List Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('item_service_list/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Sl No</th>
						<th>Hsn Sac</th>
						<th>Goods Service Desc</th>
						<th>Qty</th>
						<th>Unit Price</th>
						<th>Gst Percentage</th>
						<th>Gst Amount</th>
						<th>Total</th>
						<th>Quotation No</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($item_service_list as $i){ ?>
                    <tr>
						<td><?php echo $i['id']; ?></td>
						<td><?php echo $i['sl_no']; ?></td>
						<td><?php echo $i['hsn_sac']; ?></td>
						<td><?php echo $i['goods_service_desc']; ?></td>
						<td><?php echo $i['qty']; ?></td>
						<td><?php echo $i['unit_price']; ?></td>
						<td><?php echo $i['gst_percentage']; ?></td>
						<td><?php echo $i['gst_amount']; ?></td>
						<td><?php echo $i['total']; ?></td>
						<td><?php echo $i['quotation_no']; ?></td>
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
