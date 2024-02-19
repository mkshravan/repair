<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <h4 class="text-center text-success"><b><?php echo $this->session->flashdata('response'); ?></b></h4>
            <div class="box-body">
                <table class="table table-striped invoice">
                    <thead>
                        <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>Emp ID</th>
                        <th>Status</th>
						
						
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($user as $i){ ?>
                    <tr>
                        <td><?php echo $i['id']; ?></td>
                        <td><?php echo $i['name']; ?></td>
                        <td><?php echo $i['emp_id']; ?></td>
                        <td><?php echo $i['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$i['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
