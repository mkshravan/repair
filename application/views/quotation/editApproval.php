<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Modify Quotation</h3>
            </div>
			<div class="box-body">
				<div class="row clearfix">
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
							<input type="text" disabled name="ref_no" value="<?php echo ($this->input->post('ref_no') ? $this->input->post('ref_no') : $quotation['ref_no']); ?>" class="form-control" id="ref_no" />
						</div>
					</div>
					
					<div class="col-md-3">
						<label for="case_id" class="control-label">Case Id</label>
						<div class="form-group">
							<input type="text" disabled name="case_id" value="<?php echo ($this->input->post('case_id') ? $this->input->post('case_id') : $quotation['case_id']); ?>" class="form-control" id="case_id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="make_model" class="control-label">Make Model</label>
						<div class="form-group">
							<input type="text" disabled name="make_model" value="<?php echo ($this->input->post('make_model') ? $this->input->post('make_model') : $quotation['make_model']); ?>" class="form-control" id="make_model" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="sl_no" class="control-label">Sl No</label>
						<div class="form-group">
							<input type="text" disabled name="sl_no" value="<?php echo ($this->input->post('sl_no') ? $this->input->post('sl_no') : $quotation['sl_no']); ?>" class="form-control" id="sl_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="product_no" class="control-label">Product No</label>
						<div class="form-group">
							<input type="text" disabled name="product_no" value="<?php echo ($this->input->post('product_no') ? $this->input->post('product_no') : $quotation['product_no']); ?>" class="form-control" id="product_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" disabled name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $quotation['description']); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="place_of_supply" class="control-label">Place Of Supply</label>
						<div class="form-group">
							<input type="text" disabled name="place_of_supply" value="<?php echo ($this->input->post('place_of_supply') ? $this->input->post('place_of_supply') : $quotation['place_of_supply']); ?>" class="form-control" id="place_of_supply" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="state_code" class="control-label">State Code</label>
						<div class="form-group">
							<input type="text" disabled name="state_code" value="<?php echo ($this->input->post('state_code') ? $this->input->post('state_code') : $quotation['state_code']); ?>" class="form-control" id="state_code" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_name" class="control-label">Customer Name</label>
						<div class="form-group">
							<input type="text" disabled name="customer_name" value="<?php echo ($this->input->post('customer_name') ? $this->input->post('customer_name') : $quotation['customer_name']); ?>" class="form-control" id="customer_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bill_address" class="control-label">Bill Address</label>
						<div class="form-group">
							<input type="text" disabled name="bill_address" value="<?php echo ($this->input->post('bill_address') ? $this->input->post('bill_address') : $quotation['bill_address']); ?>" class="form-control" id="bill_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="delivery_address" class="control-label">Delivery Address</label>
						<div class="form-group">
							<input type="text" disabled name="delivery_address" value="<?php echo ($this->input->post('delivery_address') ? $this->input->post('delivery_address') : $quotation['delivery_address']); ?>" class="form-control" id="delivery_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="contact_person_name" class="control-label">Contact Person Name</label>
						<div class="form-group">
							<input type="text" disabled name="contact_person_name" value="<?php echo ($this->input->post('contact_person_name') ? $this->input->post('contact_person_name') : $quotation['contact_person_name']); ?>" class="form-control" id="contact_person_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" disabled name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $quotation['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="mob_no" class="control-label">Mob No</label>
						<div class="form-group">
							<input type="text" disabled name="mob_no" value="<?php echo ($this->input->post('mob_no') ? $this->input->post('mob_no') : $quotation['mob_no']); ?>" class="form-control" id="mob_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_gst" class="control-label">Customer Gst</label>
						<div class="form-group">
							<input type="text" disabled name="customer_gst" value="<?php echo ($this->input->post('customer_gst') ? $this->input->post('customer_gst') : $quotation['customer_gst']); ?>" class="form-control" id="customer_gst" />
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
                                    		</tr>
                                    	<?php } ?>
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
							<input type="text" name="customer_remarks" value="<?php echo $quotation['customer_remarks'] ?>" class="form-control" id="customer_remarks" />
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
								<!-- <option val="Tax Invoice">Tax Invoice</option> -->
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<label for="contact_person_name" class="control-label">Amount*</label>
						<div class="form-group">
							<input type="text" name="approval_amount" value="<?php echo $quotation['advance_payment'] ?>" class="form-control" id="approval_amount" />
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
							<input type="text" name="email" value="<?php echo $quotation['transaction_details'] ?>" class="form-control" id="transaction_details" />
						</div>
					</div>

				</div>
	          		
			</div>
			<div class="box-footer">
	            	<button type="submit" class="btn btn-success" id="approvalBtn">
	            		<i class="fa fa-check"></i> Update
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


		var apStatus= "<?php echo $quotation['approval_status']; ?>";
		$('#approval_status option[val="'+apStatus+'"]').prop("selected",true);
		if(apStatus=="Approved"){
			$('.payment').show();
			$("#approvalBtn").attr("disabled",false);
		}

		var pay_mode= "<?php echo $quotation['payment_mode']; ?>";
		$('#payment_mode option[val="'+pay_mode+'"]').prop("selected",true);
		if(pay_mode!="Cash"){
			$('.trans').show();
		}

		var payment_for= "<?php echo $quotation['payment_for']; ?>";
		$('#payment_for option[val="'+payment_for+'"]').prop("selected",true);
		

		var gt=parseFloat(0);
		$("#itemBodyId tr").each(function(){
			gt=gt+parseFloat($(this).find("td:eq(9)").text());
		});
		$("#grand_total").text(gt.toFixed(2));

				
		
	});
</script>


<script >
	var quotation_no=$('#selQuoteNo').val();
	$("#approval_status").on('change',function(){

		var a=$("#approval_status option:selected").text();

		if( (a!="--Select--") ){

			$("#approvalBtn").attr("disabled",false);
		}
		else{
			$("#approvalBtn").attr("disabled",true);
		}
	});


</script>

<script>

$('#approvalBtn').on('click',function(){

	$.LoadingOverlay("show");
	var quotation_no=$('#quotation_no').val();


	//alert(quotation_no);
	if(quotation_no!=""){

		//$.LoadingOverlay("show");
		var obj=new Object();
		
		obj.quotation_no=$('#quotation_no').val();
		obj.approval_status=$('#approval_status').val();
		obj.approval_date=$('#approval_date').val();
		obj.customer_remarks=$('#customer_remarks').val();
		obj.payment_for="";
		if($('#payment_for').val()!="NA"){
			obj.payment_for=$('#payment_for').val();
		}

		var appr_amount=$('#approval_amount').val();
		obj.approval_amount=addZeroes(appr_amount);
		var gt=parseFloat($('#grand_total').text());
		var am=parseFloat($('#approval_amount').val());
		obj.due_payment=(gt-am).toFixed(2);
		
		if($('#approval_amount').val()==""){
			obj.approval_amount="0.00";
		}
		
		obj.payment_mode= "";
		if( $('#payment_mode').val()!="NA"){
			obj.payment_mode= $('#payment_mode').val();
		}
		obj.transaction_details= $('#transaction_details').val();


		$.ajax({
		        url : '<?php echo base_url();?>quotation/quotationApprovalUpdate',
		        type : "POST",
		        dataType : "text",
		        data : obj,
		        success : function(response) {
		            $.LoadingOverlay("hide");
		            if(response=="1"){
		            	<?php //redirect('quotation/index/'); ?>
		            	window.location.href ="../quotationApprovalList" ;

		            }
		             if(response=="0"){
		            	<?php //redirect('quotation/index/'); ?>
		            	window.location.href ="../quotationApprovalList" ;

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