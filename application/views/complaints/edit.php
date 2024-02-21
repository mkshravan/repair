<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Complain Modify</h3>
            </div>
			<form action="<?php echo site_url('admin/complaints/add'); ?>" method="POST">
				<div class="box-body" autocomplete="on">
					<div class="row clearfix">
						<div class="col-md-3">
							<label for="complaint_no" class="control-label">Complaint No</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="complaint_no" value="<?php echo ($this->input->post('complaint_no') ? $this->input->post('id') : $complaints['complaint_no']); ?>" readonly class="form-control" id="complaint_no" />
							</div>
						</div>
						<div class="col-md-3 hidden">
							<label for="complain_entry_date" class="control-label">Complain Entry Date</label>
							<div class="form-group">
								<input type="text" name="complain_entry_date" autocomplete="on"
									value="<?php echo $this->input->post('complain_entry_date'); ?>"
									class="form-control" id="complain_entry_date" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="client_name" class="control-label">Customer Name</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="client_name"
									value="<?php echo $this->input->post('client_name'); ?>" class="form-control"
									id="client_name" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="client_phone" class="control-label">Customer Phone Number</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="client_phone"
									value="<?php echo $this->input->post('client_phone'); ?>" class="form-control"
									id="client_phone" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="address" class="control-label">Address</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="address"
									value="<?php echo $this->input->post('address'); ?>" class="form-control"
									id="address" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="pin_code" class="control-label">Pin Code</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="pin_code"
									value="<?php echo $this->input->post('pin_code'); ?>" class="form-control"
									id="pin_code" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="service_engineer" class="control-label">Service Engineer</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="service_engineer"
									value="<?php echo $this->input->post('service_engineer'); ?>" class="form-control"
									id="service_engineer" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="region" class="control-label">Region</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="region"
									value="<?php echo $this->input->post('region'); ?>" class="form-control"
									id="region" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="LRO" class="control-label">LRO</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="LRO"
									value="<?php echo $this->input->post('LRO'); ?>" class="form-control" id="LRO" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="outsourced" class="control-label">Outsourced</label>
							<div class="form-group">
								<input type="text" autocomplete="on" name="outsourced"
									value="<?php echo $this->input->post('outsourced'); ?>" class="form-control"
									id="outsourced" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_name" class="control-label">Dealer Name</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('dealer_name'); ?>" name="dealer_name"
									class="form-control" id="dealer_name" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_price" class="control-label">Dealer Price</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('dealer_price'); ?>" name="dealer_price"
									class="form-control" id="dealer_price" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="dealer_contact_no" class="control-label">Dealer Contact No</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('dealer_contact_no'); ?>"
									name="dealer_contact_no" class="form-control" id="dealer_contact_no" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="product" class="control-label">Product</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('product'); ?>" name="product"
									class="form-control" id="product" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="product_serial_no" class="control-label">Product Serial No</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('product_serial_no'); ?>"
									name="product_serial_no" class="form-control" id="product_serial_no" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="service_tag" class="control-label">Service Tag</label>
							<div class="form-group">
								<input type="text" autocomplete="on"
									value="<?php echo $this->input->post('service_tag'); ?>" name="service_tag"
									class="form-control" id="service_tag" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="complain_closed" class="control-label">Complain Closed</label>
							<div class="form-group">
								<select name="complain_closed" id="complain_closed" class="form-control">
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
								<!-- <input type="text" autocomplete="on" value="<?php echo $this->input->post('complain_closed'); ?>" name="complain_closed" class="form-control" id="complain_closed" /> -->
							</div>
						</div>
						<div class="col-md-3">
							<label for="complain_closed_date" class="control-label">Complain Closed Date</label>
							<div class="form-group">
								<input type="date" autocomplete="on" value="<?php echo date('d-m-Y'); ?>"
									name="complain_closed_date" class="form-control" id="complain_closed_date" />
							</div>
						</div>
						<div class="col-md-3">
							<label for="complian_text" class="control-label">Write Your Problem</label>
							<div class="form-group">
								<textarea name="complian_text" autocomplete="on" id="complian_text" class="form-control"
									cols="30" rows="10"><?php echo $this->input->post('complian_text'); ?></textarea>
							</div>
						</div>
						<div class="col-md-3">
							<label for="work_done_till_date" class="control-label">Work Done Till Date</label>
							<div class="form-group">
								<textarea name="work_done_till_date" autocomplete="on" id="work_done_till_date"
									class="form-control" cols="30"
									rows="10"><?php echo $this->input->post('work_done_till_date'); ?></textarea>
							</div>
						</div>
						<div class="col-md-3">
							<label for="solution" class="control-label">Solution</label>
							<div class="form-group">
								<textarea name="solution" autocomplete="on" id="solution" class="form-control" cols="30"
									rows="10"><?php echo $this->input->post('solution'); ?></textarea>
							</div>
						</div>
					</div>


				</div>
				<div class="box-footer">
					<button type="submit" id="submitFormBtn" class="btn btn-success">
						<i class="fa fa-save"></i> Update
					</button>
				</div>
			</form>			
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