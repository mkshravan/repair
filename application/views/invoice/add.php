 <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Invoice Add</h3>
            </div>
          	<div class="box-body">
          		<div class="row clearfix">
          			<div class="col-md-3">
						<label for="quotation_no" class="control-label">Quotation No</label>
						<div class="form-group">
							<select class="form-control" id="selQuoteNo">
								<option val="NA">--Select--</option>
								<?php foreach ($quotation_no as $value): ?>

									<option val="<?php echo $value['quotation_no']; ?>"><?php echo $value['quotation_no']; ?></option>
									
								<?php endforeach ?>

							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label for="invoice_date" class="control-label">Quotation Amount</label>
						<div class="form-group">
							<input type="text" name="quotation_amount" value="" class="form-control" disabled="true" id="quotation_amount" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="total_payment" class="control-label">Total Payment</label>
						<div class="form-group">
							<input type="text" disabled="true" name="total_payment" value="" class="form-control" id="total_payment" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="due_payment" class="control-label">Due Amount</label>
						<div class="form-group">
							<input type="text" disabled="true" name="due_payment" value="" class="form-control" id="due_amount" />
						</div>
					</div>
					
					
				</div>
			</div>

			<div class="box-header with-border">
              	<h3 class="box-title">Quotation Details</h3>
            </div>

			<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-3">
						<label for="company_gst" class="control-label">Company GST</label>
						<div class="form-group">
							<input type="text" name="company_gst" value="20AAHFL6254A1ZW" disabled="true" class="form-control" id="company_gst" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="ref_no" class="control-label">Ref No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="ref_no" value="<?php echo $this->input->post('ref_no'); ?>" class="form-control" id="ref_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="invoice_date" class="control-label">Invoice Date</label>
						<div class="form-group">
							<input type="date" name="invoice_date" value="<?php echo date("Y-m-d"); ?>" class="form-control" disabled="true" id="invoice_date" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="invoice_no" class="control-label">Invoice No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="invoice_no" value="" class="form-control" id="invoice_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="case_id" class="control-label">Case Id</label>
						<div class="form-group">
							<input type="text" disabled="true" name="case_id" value="<?php echo $this->input->post('case_id'); ?>" class="form-control" id="case_id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="make_model" class="control-label">Make Model</label>
						<div class="form-group">
							<input type="text" disabled="true" name="make_model" value="<?php echo $this->input->post('make_model'); ?>" class="form-control" id="make_model" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="sl_no" class="control-label">Sl No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="sl_no" value="<?php echo $this->input->post('sl_no'); ?>" class="form-control" id="sl_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="product_no" class="control-label">Product No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="product_no" value="<?php echo $this->input->post('product_no'); ?>" class="form-control" id="product_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" disabled="true" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="place_of_supply" class="control-label">Place Of Supply</label>
						<div class="form-group">
							<input type="text" disabled="true" name="place_of_supply" value="<?php echo $this->input->post('place_of_supply'); ?>" class="form-control" id="place_of_supply" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="state_code" class="control-label">State Code</label>
						<div class="form-group">
							<input type="text" disabled="true" name="state_code" value="<?php echo $this->input->post('state_code'); ?>" class="form-control" id="state_code" />
						</div>
					</div>

					
				</div>
				<div class="box-header with-border">
              		<h3 class="box-title">Customer Details</h3>
            	</div>
				<div class="row">
					<div class="col-md-3">
						<label for="customer_name" class="control-label">Customer Name</label>
						<div class="form-group">
							<input type="text" disabled="true" name="customer_name" value="<?php echo $this->input->post('customer_name'); ?>" class="form-control" id="customer_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bill_address" class="control-label">Bill Address</label>
						<div class="form-group">
							<input type="text" disabled="true" name="bill_address" value="<?php echo $this->input->post('bill_address'); ?>" class="form-control" id="bill_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="delivery_address" class="control-label">Delivery Address</label>
						<div class="form-group">
							<input type="text" disabled="true" name="delivery_address" value="<?php echo $this->input->post('delivery_address'); ?>" class="form-control" id="delivery_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="contact_person_name" class="control-label">Contact Person Name</label>
						<div class="form-group">
							<input type="text" disabled="true" name="contact_person_name" value="<?php echo $this->input->post('contact_person_name'); ?>" class="form-control" id="contact_person_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" disabled="true" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="mob_no" class="control-label">Mob No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="mob_no" value="<?php echo $this->input->post('mob_no'); ?>" class="form-control" id="mob_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_gst" class="control-label">Customer GST</label>
						<div class="form-group">
							<input type="text" disabled="true" name="customer_gst" value="<?php echo $this->input->post('customer_gst'); ?>" class="form-control" id="customer_gst" />
						</div>
					</div>
				</div>

				<div class="box-header with-border">
              		<h3 class="box-title">Goods/Services List</h3>
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
                                            <th style="text-align:right">Quantity</th>
                                            <th style="text-align:right">Unit Price</th>
                                            <th style="text-align:right">CGST %</th>
                                            <th style="text-align:right">CGST Value</th>
                                            <th style="text-align:right">SGST %</th>
                                            <th style="text-align:right">SGST Value</th>
                                            <th style="text-align:right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itemBodyId">
                                    </tbody>
                                    <tfoot>
                                    	<tr>
                                    		<td style="text-align:right" colspan="9"><b>Grand Total</b></td>
                                    		<td><b id="grand_total"></b></td>
                                    	</tr>
                                    	<tr>
                                    		<td style="text-align:right" colspan="9"><b>Advance Payment</b></td>
                                    		<td><b id="advance_amount"></b></td>
                                    	</tr>
                                    </tfoot>
                                </table>
						</div>
					
				</div>
				<!-- item row -->

			</div>

          	<div class="box-footer">
            	<button type="submit" class="btn btn-primary" id="submitFormBtn">
            		<i class="fa fa-check"></i> Submit
            	</button>
          	</div>
      	</div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script>
	
$("#selQuoteNo").on('change',function(){

	$.LoadingOverlay("show");
	
	var quotation_no = $(this).val();
	if(quotation_no!="NA") 
	{
			
			 $.ajax({
		        url : '<?php echo base_url();?>invoice/get_quotation',
		        type : "POST",
		        dataType : "JSON",
		        data : {quotation_no: quotation_no},
		        success : function(response) {
		            var len = response.length;
		            var val= jQuery.parseJSON(JSON.stringify(response));

		             $("#quotation_amount").val(val.quotation['quotation_amount']);
		             $("#total_payment").val(val.quotation['total_payment']);
		             $("#due_amount").val(val.quotation['due_amount']);
		             $("#ref_no").val(val.quotation['ref_no']);
		             $("#invoice_no").val(val.invoice[0]['invoice_no']);
		             $("#case_id").val(val.quotation['case_id']);
		             $("#make_model").val(val.quotation['make_model']);
		             $("#sl_no").val(val.quotation['sl_no']);
		             $("#product_no").val(val.quotation['product_no']);
		             $("#description").val(val.quotation['description']);
		             $("#place_of_supply").val(val.quotation['place_of_supply']);
		             $("#state_code").val(val.quotation['state_code']);
		             $("#customer_name").val(val.quotation['customer_name']);
		             $("#bill_address").val(val.quotation['bill_address']);
		             $("#delivery_address").val(val.quotation['delivery_address']);
		             $("#contact_person_name").val(val.quotation['contact_person_name']);
		             $("#email").val(val.quotation['email']);
		             
		             $("#mob_no").val(val.quotation['mob_no']);
		             $("#customer_gst").val(val.quotation['customer_gst']);
		             $("#customer_gst").val(val.quotation['customer_gst']);

		             var sl_no=1;
		             $("#itemBodyId tr").remove();
		             $.each(val.item,function(key,value){
		             	 var data="<tr><td>"+value['sl_no'] +"</td><td>"+value['hsn_sac'] +"</td><td>"+value['goods_service_desc']+"</td><td>"+value['qty']+"</td><td>"+value['unit_price']+"</td><td>"+value['cgst']+"</td><td>"+value['cgst_value']+"</td><td>"+value['sgst']+"</td><td>"+value['sgst_value']+"</td><td>"+value['total']+"</td></tr>"
		             	 $("#itemBodyId").append(data);
		             	 sl_no++;
		             });
		             //alert(val.item[0]['id'])
		             var gt=0;
		             $("#itemBodyId tr").each(function(){
		             	gt=gt+parseFloat($(this).find("td:eq(9)").text());
		             });

		             var g_total=gt.toFixed(2)
		             $("#grand_total").text(g_total);

		             $("#advance_amount").text(val.quotation['advance_payment'] );
		             if($("#advance_amount").text()==""){
		             	$("#advance_amount").text("0.00");
		             }

		             var num=parseInt($("#invoice_no").val().replace(/[^0-9]/g,''));
						num++;
						$("#invoice_no").val('LSCINV_RAN'+num);

		             $.LoadingOverlay("hide");

		                        		
		        },
		        error : function(response) {
		           $.LoadingOverlay("hide");
	        		alert("Error: "+response.responseText);
		        }
		    });
	}

	else{
		alert("Invalid Quotation");
	}

			

});
</script>


<script >

	$("#submitFormBtn").on('click',function(){

		$.LoadingOverlay("show");
		var obj=new Object();
		obj.invoice_no=$("#invoice_no").val();
		obj.invoice_date=$("#invoice_date").val();
		obj.quote_date=$("#quote_date").val();
		obj.quotation_no=$("#selQuoteNo").val();
		obj.total_payment=$("#grand_total").text();

		var advance_amount=$("#advance_amount").text();
		if( (advance_amount!="") || (advance_amount!="0.00") )
		{
			obj.any_advance="yes";
		}
		else{
			obj.any_advance="no";
		}
		

		$.ajax({
		        url : '<?php echo base_url();?>invoice/add',
		        type : "POST",
		        dataType : "text",
		        data : obj,
		        success : function(response) {
		            $.LoadingOverlay("hide");
		            if(response=="1"){

		            	//alert(response);
		            	window.location.href ="index" ;

		            }

		            if(response=="0")
					{
						window.location.href ="index" ;
						//alert(response);
					}            		
		        },
		        error : function(response) {
		           $.LoadingOverlay("hide");
	        		alert("Error: "+response.responseText);
		        }
		    });
	});

</script>