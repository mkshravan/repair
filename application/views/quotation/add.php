<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Quotation Add</h3>
            </div>
           
          	<div class="box-body" autocomplete="on">
          		<div class="row clearfix">
					<div class="col-md-3">
						<label for="company_gst" class="control-label">Company GST</label>
						<div class="form-group">
							<input type="text" name="company_gst" value="20AAHFL6254A1ZW" readonly="" class="form-control" id="company_gst" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="ref_no" class="control-label">Ref No</label>
						<div class="form-group">
							<input type="text" name="ref_no" autocomplete="on" value="<?php echo $this->input->post('ref_no'); ?>" class="form-control" id="ref_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quote_date" class="control-label">Quote Date</label>
						<div class="form-group">
							<input type="date" autocomplete="on" name="quote_date" value="<?php echo date("Y-m-d"); ?>" class="form-control" readonly id="quote_date" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="quotation_no" class="control-label">Quotation No</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="quotation_no" value="<?php 

								if($lastquotation){
									echo $lastquotation->quotation_no;
								} 
								else{
									echo "LSCQ_RAN0";
								}
								?>" readonly class="form-control" id="quotation_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="case_id" class="control-label">Case Id</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="case_id" value="<?php echo $this->input->post('case_id'); ?>" class="form-control" id="case_id" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="make_model" class="control-label">Make Model</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="make_model" value="<?php echo $this->input->post('make_model'); ?>" class="form-control" id="make_model" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="sl_no" class="control-label">Sl No</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="sl_no" value="<?php echo $this->input->post('sl_no'); ?>" class="form-control" id="sl_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="product_no" class="control-label">Product No</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="product_no" value="<?php echo $this->input->post('product_no'); ?>" class="form-control" id="product_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="place_of_supply" class="control-label">Place Of Supply</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="place_of_supply" value="Jharkhand" readonly class="form-control" id="place_of_supply" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="state_code" class="control-label">State Code</label>
						<div class="form-group">
							<input type="text" readonly autocomplete="on" value="20" name="state_code" value="<?php echo $this->input->post('state_code'); ?>" class="form-control" id="state_code" />
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
							<input type="text" autocomplete="on" name="customer_name" value="<?php echo $this->input->post('customer_name'); ?>" class="form-control" id="customer_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bill_address" class="control-label">Bill Address</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="bill_address" value="<?php echo $this->input->post('bill_address'); ?>" class="form-control" id="bill_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="delivery_address" class="control-label">Delivery Address</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="delivery_address" value="<?php echo $this->input->post('delivery_address'); ?>" class="form-control" id="delivery_address" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="contact_person_name" class="control-label">Contact Person Name</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="contact_person_name" value="<?php echo $this->input->post('contact_person_name'); ?>" class="form-control" id="contact_person_name" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="mob_no" class="control-label">Mob No</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="mob_no" value="<?php echo $this->input->post('mob_no'); ?>" class="form-control" id="mob_no" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="customer_gst" class="control-label">Customer GST</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="customer_gst" value="<?php echo $this->input->post('customer_gst'); ?>" class="form-control" id="customer_gst" />
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
							<input type="text" autocomplete="on" name="hsnSac" value="" class="form-control" id="hsnSac" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="itemDesc" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" autocomplete="on" name="itemDesc" value="" class="form-control" id="itemDesc" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="itemQty" class="control-label">Qty</label>
						<div class="form-group">
							<input type="number" autocomplete="on" name="itemQty" value="" class="form-control" id="itemQty" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="itemUnitPrice" class="control-label">Unit Price</label>
						<div class="form-group">
							<input type="number" autocomplete="on" name="itemUnitPrice" value="" class="form-control" id="itemUnitPrice" />
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
                                            <th style="text-align:right">Quantity</th>
                                            <th style="text-align:right">Unit Price</th>
                                            <th style="text-align:right">CGST %</th>
                                            <th style="text-align:right">CGST Value</th>
                                            <th style="text-align:right">SGST %</th>
                                            <th style="text-align:right">SGST Value</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itemBodyId">
                                    </tbody>
                                    <tfoot>
                                    	<tr>
                                    		<td style="text-align:right" colspan="9"><b>Estimated Total Cost</b></td>
                                    		<td><b id="grand_total"></b></td>
                                    	</tr>
                                    </tfoot>
                                </table>
						</div>
					
				</div>
				<!-- item row -->

			</div>
          	<div class="box-footer">
            	<button id="submitFormBtn" class="btn btn-success">
            		<i class="fa fa-save"></i> Submit
            	</button>
          	</div>
      	</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script >
	
$(document).ready(function(){

	
	var num=parseInt($("#quotation_no").val().replace(/[^0-9]/g,''));
	num++;
	$("#quotation_no").val('LSCQ_RAN'+num);
	
	
	$("#addItemBtn").attr('disabled',true);

});

</script>
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

<script>
	
 <?php //echo form_open('quotation/add'); ?>



$("#submitFormBtn").on('click',function(){

	var noOfRow=parseInt($('#itemBodyId tr').length);
	if( $("#make_model").val()=="" || $("#description").val()=="" || $("#customer_name").val()=="" || $("#bill_address").val()==""){
		alert("Fields are required");
		

		if($("#make_model").val()==""){
			alert("Enter Make Model");
			$( "#make_model" ).focus();
		}
		if($("#description").val()==""){
			alert("Enter Description");
			$( "#description" ).focus();
		}
		if($("#customer_name").val()==""){
			alert("Enter Customer Name");
			$( "#customer_name" ).focus();
		}
		if($("#bill_address").val()==""){
			alert("Enter Billing Address");
			$( "#bill_address" ).focus();
		}
	}
	else if(noOfRow==0){
		
		{
			alert("Please Add Item(s)");
		}
	}
	else{
		$.LoadingOverlay("show");
	var obj=new Object();
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

	alert(obj.quotation_amount);

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

			obj.items=itemArray; // Final item	(need to be add)
			
			 $.ajax({
		        url : '<?php echo base_url();?>quotation/add',
		        type : "POST",
		        dataType : "text",
		        data : obj,
		        success : function(response) {
		            $.LoadingOverlay("hide");
		            if(response=="1"){
		            	<?php //redirect('quotation/index/'); ?>
		            	window.location.href ="index" ;

		            }
            		
		        },
		        error : function(response) {
		           $.LoadingOverlay("hide");
	        		alert("Error: "+response.responseText);
		        }
		    });
	}
		

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
		 var itemDesc=$("#itemDesc").val();
		 
            
		   if( ($(this).val()!='') && (unitPrice!='') && (itemDesc!='') )
			  {
			  	$("#addItemBtn").prop('disabled',false);
			  }
		  	else{
			  $("#addItemBtn").prop('disabled',true); 
		  	}
		});

	$("#itemUnitPrice").on("keyup",function() {
		 var qty=$("#itemQty").val();
		 var itemDesc=$("#itemDesc").val();
            
		   if( ($(this).val()!='') && (qty!='') && (itemDesc!='') )
			  {
			  	$("#addItemBtn").prop('disabled',false);
			  }
		  	else{
			  $("#addItemBtn").prop('disabled',true); 
		  	}
		});

	$("#itemDesc").on("keyup",function() {
		 var qty=$("#itemQty").val();
		 var unitPrice=$("#itemUnitPrice").val();
            
		   if( ($(this).val()!='') && (qty!='') && (unitPrice!='') )
			  {
			  	$("#addItemBtn").prop('disabled',false);
			  }
		  	else{
			  $("#addItemBtn").prop('disabled',true); 
		  	}
		});
</script>


