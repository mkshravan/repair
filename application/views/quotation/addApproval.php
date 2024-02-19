<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Quotation Approval</h3>
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
						<label for="company_gst" class="control-label">Company GST</label>
						<div class="form-group">
							<input type="text" name="company_gst" value="20AAHFL6254A1ZW" disabled="true" class="form-control" id="company_gst" />
						</div>
					</div>
					
					<div class="col-md-3">
						<label for="company_gst" class="control-label">Quotation Date</label>
						<div class="form-group">
							<input type="text" name="quote_date" value="" disabled="true" class="form-control" id="quote_date" />
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
						<label for="ref_no" class="control-label">Ref No</label>
						<div class="form-group">
							<input type="text" disabled="true" name="ref_no" value="<?php echo $this->input->post('ref_no'); ?>" class="form-control" id="ref_no" />
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
                                    </tfoot>
                                </table>
						</div>
					
				</div>
				<!-- item row -->

			</div> 

					
		</div>
				<div class="box-header with-border">
              		<h3 class="box-title">Approval Details</h3>
            	</div>
				<div class="row">
					<div class="col-md-3">
						<label for="approval_status" class="control-label">Approval Status*</label>
						<div class="form-group">
							<select class="form-control" id="approval_status">
								<option val="NA">--Select--</option>
								<option val="Approved">Approved</option>
								<option val="Disapproved">Disapproved</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label for="approval_date" class="control-label">Approval Date*</label>
						<div class="form-group">
							<input type="date" name="approval_date" value="<?php echo date("Y-m-d"); ?>" class="form-control" disabled="true" id="approval_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="customer_remarks" class="control-label">Customer Remarks</label>
						<div class="form-group">
							<input type="text" name="customer_remarks" value="" class="form-control" id="customer_remarks" />
						</div>
					</div>
					
				</div>
				<div class="row payment">
					<div class="col-md-3">
						<label for="delivery_address" class="control-label">Payment For*</label>
						<div class="form-group">
							<select class="form-control" id="payment_for">
								<option val="NA">--Select--</option>
								<option val="Advance">Advance</option>
								<option val="Tax Invoice">Tax Invoice</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<label for="contact_person_name" class="control-label">Amount*</label>
						<div class="form-group">
							<input type="text" name="approval_amount" value="" class="form-control" id="approval_amount" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="payment_mode" class="control-label">Payment Mode*</label>
						<div class="form-group">
							<select class="form-control" id="payment_mode">
								<option val="NA">--Select--</option>
								<option val="Cash">Cash</option>
								<option val="Cheque">Cheque</option>
								<option val="Online Payment">Online Payment</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 trans">
						<label for="transaction_details" class="control-label required">Transaction Details*</label>
						<div class="form-group ">
							<input type="text" name="email" value="" class="form-control" id="transaction_details" />
						</div>
					</div>

				</div>


			</div>          	
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success" id="approvalBtn">
            		<i class="fa fa-check"></i> Submit
            	</button>
          	</div>
      	</div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script >
  function addZeroes(num) {
// Convert input string to a number and store as a variable.
    var value = Number(num);      
// Split the input string into two arrays containing integers/decimals
    var res = num.split(".");     
// If there is no decimal point or only one decimal place found.
    if(res.length == 1 || res[1].length < 3) { 
// Set the number to two decimal places
        value = value.toFixed(2);
    }
return value;
}

</script>

<script>
	
	$(document).ready(function(){
		$('.payment').hide();
		$('.trans').hide();
		$("#approvalBtn").attr("disabled",true);

		$('#approval_status').on('change',function(){
			if($(this).val()=="Approved"){
				$('.payment').show();
			}
			else{
				$('.payment').hide();
			}
		});

		$('#payment_mode').on('change',function(){
			if( ($(this).val()=="Cheque") || ($(this).val()=="Online Payment") ){
				$('.trans').show();
			}
			else{
				$('.trans').hide();
			}
		});

		$("#payment_for").on('change',function(){

			if( $(this).val()=="Tax Invoice"){
				$("#approval_amount").val($("#grand_total").text());

				$("#approval_amount").attr("disabled",true);
			}
			else{
				$("#approval_amount").attr("disabled",false);
				$("#approval_amount").val("");	
			}
		});
		
		
	});
</script>

<script>
	
$("#selQuoteNo").on('change',function(){

	$.LoadingOverlay("show");
	
	var quotation_no = $("#selQuoteNo option:selected").text();
	if(quotation_no!="--Select--") 
	{
			
			 $.ajax({
		        url : '<?php echo base_url();?>invoice/get_quotation',
		        type : "POST",
		        dataType : "JSON",
		        data : {quotation_no: quotation_no},
		        success : function(response) {
		            var val= jQuery.parseJSON(JSON.stringify(response));
		             $("#quote_date").val(val.quotation['quote_date']);
		             $("#ref_no").val(val.quotation['ref_no']);
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
		             	 var data="<tr><td>"+value['sl_no'] +"</td><td>"+value['hsn_sac'] +"</td><td>"+value['goods_service_desc']+"</td><td>"+value['qty']+"</td><td>"+value['unit_price']+"</td><td>"+value['cgst']+"</td><td>"+value['cgst_value']+"</td><td>"+value['sgst']+"</td><td>"+value['sgst_value']+"</td><td>"+addZeroes(value['total'])+"</td></tr>"
		             	 $("#itemBodyId").append(data);
		             	 sl_no++;
		             });
		             //alert(val.item[0]['id'])
		             var gt=parseFloat(0);
		             $("#itemBodyId tr").each(function(){
		             	gt=gt+parseFloat($(this).find("td:eq(9)").text());
		             });

		             
		             $("#grand_total").text(gt.toFixed(2));

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

$('#approvalBtn').on('click',function(){

	$.LoadingOverlay("show");
	var quotation_no=$('#selQuoteNo').val();


	//alert(quotation_no);
	if(quotation_no!="NA"){

		//$.LoadingOverlay("show");
		var obj=new Object();
		
		obj.quotation_no=$('#selQuoteNo').val();
		obj.approval_status=$('#approval_status').val();
		obj.approval_date=$('#approval_date').val();
		obj.customer_remarks=$('#customer_remarks').val();
		obj.payment_for="";
		if($('#payment_for').val()!="NA"){
			obj.payment_for=$('#payment_for').val();
		}

		var appr_amount=$('#approval_amount').val();
		obj.approval_amount=addZeroes(appr_amount);
		obj.due_payment=((parseFloat($('#grand_total').text()).toFixed(2)) - (parseFloat($('#approval_amount').val()).toFixed(2))).toFixed(2);
		
		if($('#approval_amount').val()==""){
			obj.approval_amount="0.00";
		}
		
		obj.payment_mode= "";
		if( $('#payment_mode').val()!="NA"){
			obj.payment_mode= $('#payment_mode').val();
		}
		obj.transaction_details= $('#transaction_details').val();


		$.ajax({
		        url : '<?php echo base_url();?>quotation/quotationApprovalAdd',
		        type : "POST",
		        dataType : "text",
		        data : obj,
		        success : function(response) {
		           // $.LoadingOverlay("hide");
		            if(response=="1"){
		            	<?php //redirect('quotation/index/'); ?>
						$.LoadingOverlay("hide");
		            	window.location.href ="quotationApprovalList" ;
		            	
		            }
		             else {
		            	<?php //redirect('quotation/index/'); ?>
						 $.LoadingOverlay("hide");
		            	window.location.href ="quotationApprovalList" ;
		            	
		            }
            		
		        },
		        error : function(response) {
		           $.LoadingOverlay("hide");
	        		alert("Error: "+response.responseText);
		        }
		    });


	}
	else{
		alert("Select Quotation No");
	}
});
</script>

<script >
	var quotation_no=$('#selQuoteNo').val();
	$("#selQuoteNo, #approval_status").on('change',function(){

		var q=$("#selQuoteNo option:selected").text();
		var a=$("#approval_status option:selected").text();

		if( (q!="--Select--") &&  (a!="--Select--") ){

			$("#approvalBtn").attr("disabled",false);
		}
		else{
			$("#approvalBtn").attr("disabled",true);
		}
	});


</script>
