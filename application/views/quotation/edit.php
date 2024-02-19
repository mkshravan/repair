<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modify Quotation</h3>
            </div>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-3" style="display: none;">
						<label for="id" class="control-label">ID</label>
						<div class="form-group">
							<input type="text" name="id" value="<?php echo ($this->input->post('quotation_no') ? $this->input->post('id') : $quotation['id']); ?>" class="form-control" disabled id="id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quotation_no" class="control-label">Quotation No</label>
						<div class="form-group">
							<input type="text" name="quotation_no" value="<?php echo ($this->input->post('quotation_no') ? $this->input->post('quotation_no') : $quotation['quotation_no']); ?>" class="form-control" disabled id="quotation_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quote_date" class="control-label">Quote Date</label>
						<div class="form-group">
							<input type="text" name="quote_date" value="<?php echo ($this->input->post('quote_date') ? $this->input->post('quote_date') : $quotation['quote_date']); ?>" class="form-control" disabled id="quote_date" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="company_gst" class="control-label">Company Gst</label>
						<div class="form-group">
							<input type="text" name="company_gst" value="<?php echo ($this->input->post('company_gst') ? $this->input->post('company_gst') : $quotation['company_gst']); ?>" class="form-control" disabled id="company_gst" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="ref_no" class="control-label">Ref No</label>
						<div class="form-group">
							<input type="text" name="ref_no" value="<?php echo ($this->input->post('ref_no') ? $this->input->post('ref_no') : $quotation['ref_no']); ?>" class="form-control" id="ref_no" />
						</div>
					</div>
					
					<div class="col-md-3">
						<label for="case_id" class="control-label">Case Id</label>
						<div class="form-group">
							<input type="text" name="case_id" value="<?php echo ($this->input->post('case_id') ? $this->input->post('case_id') : $quotation['case_id']); ?>" class="form-control" id="case_id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="make_model" class="control-label">Make Model</label>
						<div class="form-group">
							<input type="text" name="make_model" value="<?php echo ($this->input->post('make_model') ? $this->input->post('make_model') : $quotation['make_model']); ?>" class="form-control" id="make_model" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="sl_no" class="control-label">Sl No</label>
						<div class="form-group">
							<input type="text" name="sl_no" value="<?php echo ($this->input->post('sl_no') ? $this->input->post('sl_no') : $quotation['sl_no']); ?>" class="form-control" id="sl_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="product_no" class="control-label">Product No</label>
						<div class="form-group">
							<input type="text" name="product_no" value="<?php echo ($this->input->post('product_no') ? $this->input->post('product_no') : $quotation['product_no']); ?>" class="form-control" id="product_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $quotation['description']); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="place_of_supply" class="control-label">Place Of Supply</label>
						<div class="form-group">
							<input type="text" name="place_of_supply" value="<?php echo ($this->input->post('place_of_supply') ? $this->input->post('place_of_supply') : $quotation['place_of_supply']); ?>" class="form-control" id="place_of_supply" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="state_code" class="control-label">State Code</label>
						<div class="form-group">
							<input type="text" name="state_code" value="<?php echo ($this->input->post('state_code') ? $this->input->post('state_code') : $quotation['state_code']); ?>" class="form-control" id="state_code" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_name" class="control-label">Customer Name</label>
						<div class="form-group">
							<input type="text" name="customer_name" value="<?php echo ($this->input->post('customer_name') ? $this->input->post('customer_name') : $quotation['customer_name']); ?>" class="form-control" id="customer_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bill_address" class="control-label">Bill Address</label>
						<div class="form-group">
							<input type="text" name="bill_address" value="<?php echo ($this->input->post('bill_address') ? $this->input->post('bill_address') : $quotation['bill_address']); ?>" class="form-control" id="bill_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="delivery_address" class="control-label">Delivery Address</label>
						<div class="form-group">
							<input type="text" name="delivery_address" value="<?php echo ($this->input->post('delivery_address') ? $this->input->post('delivery_address') : $quotation['delivery_address']); ?>" class="form-control" id="delivery_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="contact_person_name" class="control-label">Contact Person Name</label>
						<div class="form-group">
							<input type="text" name="contact_person_name" value="<?php echo ($this->input->post('contact_person_name') ? $this->input->post('contact_person_name') : $quotation['contact_person_name']); ?>" class="form-control" id="contact_person_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $quotation['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="mob_no" class="control-label">Mob No</label>
						<div class="form-group">
							<input type="text" name="mob_no" value="<?php echo ($this->input->post('mob_no') ? $this->input->post('mob_no') : $quotation['mob_no']); ?>" class="form-control" id="mob_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_gst" class="control-label">Customer Gst</label>
						<div class="form-group">
							<input type="text" name="customer_gst" value="<?php echo ($this->input->post('customer_gst') ? $this->input->post('customer_gst') : $quotation['customer_gst']); ?>" class="form-control" id="customer_gst" />
						</div>
					</div>
				</div>

				<div class="box-header with-border">
              		<h3 class="box-title">Goods/Services List</h3>
            	</div>

            	<div class="row">
					<div class="col-md-3">
						<label for="hsnSac" class="control-label">HSN/SAC*</label>
						<div class="form-group">
							<input type="text" name="hsnSac" value="" class="form-control" id="hsnSac" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="itemDesc" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="itemDesc" value="" class="form-control" id="itemDesc" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="itemQty" class="control-label">Qty</label>
						<div class="form-group">
							<input type="number" name="itemQty" value="" class="form-control" id="itemQty" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="itemUnitPrice" class="control-label">Unit Price</label>
						<div class="form-group">
							<input type="number" name="itemUnitPrice" value="" class="form-control" id="itemUnitPrice" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="itemGst" class="control-label">GST</label>
						<div class="form-group">
							<select id="itemGst" class="form-control">
								<option val="0">0</option>
								<option val="5">5%</option>
								<option val="9">9%</option>
								<option val="18">18%</option>
								<option val="28">28%</option>
							</select>
						</div>
					</div>
					<div class="col-md-1" style="margin-top: 24px;">
						<div class="form-group">
							<input type="button" id="addItemBtn" class="btn btn-primary" value="Add"/>
						</div>
					</div>
				</div>

				<!-- Item row-->
					<div class="row">
						<div class="col-md-12">
							<table id="itemTableId" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL #</th>
                                            <th>HSN/SAC</th>
                                            <th>Description of Goods / Services</th>
                                            <th >Quantity</th>
                                            <th>Unit Price</th>
                                            <th>CGST %</th>
                                            <th>CGST Value</th>
                                            <th>SGST %</th>
                                            <th>SGST Value</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itemBodyId">
                                    	<?php foreach($item as $i){ ?>
                                    		<tr>
                                    			<td><?php echo $i['sl_no']; ?></td>
                                    			<td><?php echo $i['hsn_sac']; ?></td>
                                    			<td><?php echo $i['goods_service_desc']; ?></td>
                                    			<td><?php echo $i['qty']; ?></td>
                                    			<td><?php echo $i['unit_price']; ?></td>
                                    			<td><?php echo $i['cgst']; ?></td>
                                    			<td><?php echo $i['cgst_value']; ?></td>
                                    			<td><?php echo $i['sgst']; ?></td>
                                    			<td><?php echo $i['sgst_value']; ?></td>
                                    			<td><?php echo $i['total']; ?></td>
                                    			<td>
                                    				<a class="btn btn-xs btn-info itemEditBtn" href="javascript:void(0)"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a title="Delete" class="btn btn-xs btn-danger itemDelBtn" href="javascript:void(0)"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>

                                    			</td>
                                    		</tr>
                                    	<?php } ?>
                                    </tbody>
                                    <!-- <tfoot>
                                    	<tr>
                                    		<td style="text-align:right" colspan="9"><b>Grand Total</b></td>
                                    		<td><b id="grand_total"></b></td>
                                    	</tr>
                                    </tfoot> -->
                                </table>
						</div>
					
					</div>
				<!-- item row -->


			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success" id="submitFormBtn">
					<i class="fa fa-check"></i> Update
				</button>
	        </div>				
		</div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script>
	
	$(document).ready(function(){

		/*var gt=parseFloat(0);
		$("#itemBodyId tr").each(function(){
			gt=gt+parseFloat($(this).find("td:eq(9)").text());
		});
		$("#grand_total").text(gt.toFixed(2));*/
		
		$("#addItemBtn").attr('disabled',true);
	});
	
</script>

<script >
	
	$("#itemBodyId").on('click','.itemEditBtn',function(){
		
		var hsn=$(this).closest("tr").find("td:eq(1)").text();

		var desc=$(this).closest("tr").find("td:eq(2)").text();
		var qty=$(this).closest("tr").find("td:eq(3)").text();
		var unitPrice=$(this).closest("tr").find("td:eq(4)").text();
		var gst=parseInt($(this).closest("tr").find("td:eq(5)").text()) + parseInt($(this).closest("tr").find("td:eq(7)").text());


		$("#hsnSac").val(hsn);
		$("#itemDesc").val(desc);
		$("#itemQty").val(qty);
		$("#itemUnitPrice").val(unitPrice);
		//$("#itemGst select").val(gst);
		$('#itemGst option[val="'+gst+'"]').prop("selected",true);
		$(this).closest("tr").remove();

	});

	$("#itemBodyId").on('click','.itemDelBtn',function(){
		$(this).closest("tr").remove();

		});
	
	$("#itemQty").on("keyup",function() {
		 var unitPrice=$("#itemUnitPrice").val();
            
		   if( ($(this).val()!='') && (unitPrice!='') )
			  {
			  	$("#addItemBtn").prop('disabled',false);
			  }
		  	else{
			  $("#addItemBtn").prop('disabled',true); 
		  	}
		});

	$("#itemUnitPrice").on("keyup",function() {
		 var qty=$("#itemQty").val();
            
		   if( ($(this).val()!='') && (qty!='') )
			  {
			  	$("#addItemBtn").prop('disabled',false);
			  }
		  	else{
			  $("#addItemBtn").prop('disabled',true); 
		  	}
		});
</script>


<script>
	
 <?php //echo form_open('quotation/add'); ?>

$("#submitFormBtn").on('click',function(){

	$("#addItemBtn").attr("disabled",true);
	$.LoadingOverlay("show");
	var obj=new Object();

	var id=$("#id").val();
	obj.company_gst=$("#company_gst").val();
	obj.ref_no=$("#ref_no").val();
	obj.quote_date=$("#quote_date").val();
	obj.quotation_no=$("#quotation_no").val();
	obj.case_id=$("#case_id").val();

	obj.make_model=$("#make_model").val();
	obj.sl_no=$("#sl_no").val();
	obj.product_no=$("#product_no").val();
	obj.description=$("#description").val();
	obj.place_of_supply=$("#place_of_supply").val();

	obj.state_code=$("#state_code").val();
	obj.customer_name=$("#customer_name").val();
	obj.bill_address=$("#bill_address").val();
	obj.delivery_address=$("#delivery_address").val();
	obj.contact_person_name=$("#contact_person_name").val();

	obj.email=$("#email").val();
	obj.mob_no=$("#mob_no").val();
	obj.customer_gst=$("#customer_gst").val();
	var grand_total=$("#grand_total").text();
	obj.quotation_amount= grand_total;

	//alert(obj.contact_person_name);

	var itemArray = [];
			var $headers = $("#itemTableId thead tr").find("th"); 
			var $rows = $("#itemBodyId tr").each(function(index) {
			    $cells = $(this).find("td:not(:last-child)");
			    itemArray[index] = {};
			  $cells.each(function(cellIndex) {
				  var ind=index+""+cellIndex;
				  var str= $.trim($($headers[cellIndex]).html());
				  var str1 =str.replace(/ /g,'');
				  var strtrim = str1.replace(/['(#)','(%)']/g,'');
				  itemArray[index][strtrim] = $(this).html();
				  
			  });
			});

			obj.items=itemArray; // Final item
			
			 $.ajax({
		        url : '<?php echo base_url();?>quotation/edit/'+ id +'',
		        type : "POST",
		        dataType : "text",
		        data : obj,
		        success : function(response) {
		            $.LoadingOverlay("hide");
		            if(response=="1"){
		            	window.location.href ="../" ;

		            }
		            else{
						window.location.href ="../" ;
		            }
            		
		        },
		        error : function(response) {
		           $.LoadingOverlay("hide");
	        		alert("Error: "+response.responseText);
		        }
		    });

});
</script>


<script type="text/javascript">
	
	$("#addItemBtn").on('click',function(){

		var SlNo=0;
		if($("#itemBodyId tr").length>0){

			slNo=$("#itemBodyId tr:last").find("td:eq(0)").text();
			slNo++;
		}

		else{
			slNo=1;
		}

		var hsn=$("#hsnSac").val();
		var itemDesc=$("#itemDesc").val();
		var itemQty=parseInt($("#itemQty").val());
		var itemUnitPrice=parseFloat($("#itemUnitPrice").val());
		var itemGst=parseInt($("#itemGst").val());

		var basicCost=itemQty*itemUnitPrice;

		var cgst=itemGst/2;
		var sgst=itemGst/2;
		var cgstVal=(basicCost*cgst)/100;
		var sgstVal=(basicCost*sgst)/100;

		var totaltemp= cgstVal+sgstVal+basicCost;
		var total=totaltemp.toFixed(2);


		var btn='<a class="btn btn-xs btn-info itemEditBtn" href="javascript:void(0)"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a title="Delete" class="btn btn-xs btn-danger itemDelBtn" href="javascript:void(0)"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>';
		var tr="<tr><td>"+ slNo+"</td><td>"+hsn +"</td><td>"+itemDesc +"</td><td>"+itemQty +"</td><td>"+itemUnitPrice +"</td><td>"+cgst +"</td><td>"+cgstVal +"</td><td>"+sgst +"</td><td>"+sgstVal +"</td><td>"+total +"</td><td>"+btn +"</td></tr>"
		$("#itemBodyId").append(tr);

		$("#hsnSac").val("");
		$("#itemDesc").val("");
		$("#itemQty").val("");
		$("#itemUnitPrice").val("");
		$('#itemGst option[val="0"]').prop("selected",true);

		var gt=0;
		             $("#itemBodyId tr").each(function(){
		             	gt=gt+parseFloat($(this).find("td:eq(9)").text());
		             });
		             

		             $("#grand_total").text(gt.toFixed(2));
	});
</script>