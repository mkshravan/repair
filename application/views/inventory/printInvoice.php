<div class="row">
    <div class="col-md-12">
			<table cellspacing="0" cellpadding="1"  style="font-family:Arial, sans-serif; border-collapse:collapse; font-size:12px;" border="0" width="100%">
	<tr>
    	<td width="33%" align="left" valign="top" style="padding:2px 0px;"><p style="padding:0; margin:0; font-size:20px"><strong>
<img width="141" height="58" src="<?php echo site_url('resources/img/logo.png');?>" /></strong></p></td>
      <td width="33%" align="center" valign="top" style="padding:2px 0px;"> <p style="font-size:16px"><strong>Tax Invoice</strong></p> </td>
      <td width="33%" align="right" valign="top" style="padding:2px 0px;"><p style="font-size:16px"><strong>Laptop Support Center<br> <span id="lblBranchAddress">AKT Tower Biside V Mart Shopping MallRedma, North Redma, Daltonganj, Jharkhand 822101</span><br><strong>Mobile:</strong><span>+919304754330, +917488363967</span> <span id="lblBranchCity"> </span></strong></p></td>
    </tr>
</table>


<table cellspacing="0" cellpadding="1"  style="font-family:Arial, sans-serif; border-collapse:collapse; font-size:12px;" border="1" width="100%">
  <col width="71" span="3">
  <col width="101" span="3">
  <col width="89" span="6">
  <tr>
    <td width="20%" style="padding:1px 3px;" colspan="2"><strong>Customer</strong></td>
     <td width="30%" style="padding:1px 3px;"><span id="lblCustomer"><?php echo $quotation['customer_name'] ?></span></td>
    <td width="20%" style="padding:1px 3px;" colspan="2"><strong>GST number</strong></td>
    <td width="30%" style="padding:1px 3px;" colspan="4" ><span id="lblCompanyGST">20AAHFL6254A1ZW</span></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2" rowspan="4"><strong>Bill to address</strong></td>
     <td rowspan="4" style="padding:1px 3px;"><?php echo $quotation['bill_address'] ?></td>
    <td style="padding:1px 3px;" colspan="2"><strong>Ref. No.</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['ref_no'] ?></td>
  </tr>
  
    <td style="padding:1px 3px;" colspan="2"><strong>Quotation No.</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['quotation_no'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Invoice No</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $invoice['invoice_no'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Invoice Date</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $invoice['invoice_date'] ?></td>
  </tr>
  <tr>
  
  <tr>
    <td style="padding:1px 3px;" colspan="2" rowspan="3"><strong>Deliver to address</strong></td>
     <td rowspan="3" style="padding:1px 3px;"><?php echo $quotation['delivery_address'] ?></span></td>
    <td style="padding:1px 3px;" colspan="2"><strong>Make &amp; Model</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['make_model'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Serial No.</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['sl_no'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Product No.</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['product_no'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Contact person</strong></td>
     <td style="padding:1px 3px;"><?php echo $quotation['contact_person_name'] ?></td>
    <td style="padding:1px 3px;" colspan="2"><strong>Case Id</strong></td>
     <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['case_id'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Email id</strong></td>
     <td style="padding:1px 3px;"><?php echo $quotation['email'] ?></td>
     <td style="padding:1px 3px;" colspan="2"><strong>Description</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['description'] ?></td>
     
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>Mobile number</strong></td>
     <td style="padding:1px 3px;"><?php echo $quotation['mob_no'] ?></td>
    <td style="padding:1px 3px;" colspan="2"><strong>Place of Supply</strong></td>
    <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['place_of_supply'] ?></td>
  </tr>
  <tr>
    <td style="padding:1px 3px;" colspan="2"><strong>GST number</strong></td>
     <td style="padding:1px 3px;"><?php echo $quotation['customer_gst'] ?></td>
    <td style="padding:1px 3px;" colspan="2"><strong>State Code</strong></td>
    <td colspan="4"><?php echo $quotation['state_code'] ?></td>
  </tr>
</table>

<table cellspacing="1" cellpadding="1"  style="table-layout: fixed;width:100%;font-family:Arial, sans-serif; border-collapse:collapse; margin-top:15px; font-size:12px;" border="1">
  <col width="71" span="3">
  <col width="101" span="3">
  <col width="89" span="6">
  
  <tr>
    <td style="padding:1px 3px;" width="142"><strong>Sl No.</strong></td>
     <td style="padding:1px 3px;" colspan="2" width="71"><strong>HSN/SAC</strong></td>
     <td style="padding:1px 3px;" colspan="3" width="303"><strong>Description    of Goods / Services</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>Quantity</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>Unit price</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>CGST %</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>CGST Value</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>SGST %</strong></td>
     <td style="padding:1px 3px;" width="89" align="center"><strong>SGST Value</strong></td>
  </tr>
    <tbody id="printItemsTbodyId">
      <?php $slno=1; foreach($item as $i){  ?>
      <tr>
         <td style="padding:1px 3px;"><?php echo $slno;?></td>
         <td style="padding:1px 3px;" colspan="2"><?php echo $i['hsn_sac'];?></td>
         <td style="padding:1px 3px;" colspan="3"><?php echo $i['goods_service_desc'];?></td>
         <td style="padding:1px 3px;"  align="center"><?php echo $i['qty'];?></td>
         <td style="padding:1px 3px;" align="center"><?php echo $i['unit_price'];?></td>
        <td style="padding:1px 3px;" align="center"><?php echo $i['cgst'].'%';?></td>
         <td style="padding:1px 3px;" align="center" ><?php echo $i['cgst_value'];?></td>
        <td style="padding:1px 3px;" align="center"><?php echo $i['sgst'].'%';?></td>
         <td style="padding:1px 3px;" align="center"><?php echo $i['sgst_value'];?></td>
      </tr>
      <?php $slno++; } ?>
      <tr>
         <td style="padding:1px 3px;">&nbsp;</td>
         <td style="padding:1px 3px;" colspan="2">&nbsp;</td>
         <td style="padding:1px 3px;" colspan="3">&nbsp;</td>
         <td style="padding:1px 3px;">&nbsp;</td>
         <td style="padding:1px 3px;">&nbsp;</td>
         <td style="padding:1px 3px;">&nbsp;</td>
         <td style="padding:1px 3px;">-</td>
         <td style="padding:1px 3px;">&nbsp;</td>
        <td style="padding:1px 3px;">-</td>
      </tr>
    </tbody>
  <tr class="withoutAdvance">
     <td width="783" height="44" colspan="9" style="padding:1px 3px;"><strong>Terms &amp; conditions:</strong></td>
     <td style="padding:1px 3px;" colspan="2">Amount before tax</td>
      <td align="right" style="padding:1px 3px;" id="amount_before_gst" ></td>
  </tr>
  <tr class="withoutAdvance">
      <td style="padding:1px 3px;"  colspan="9" width="783"><span id="lblTandC1">1. Delivery Terms : 2 - 4 Weeks from the date of confirmation.</span></td>
    <td style="padding:1px 3px;" colspan="2">Total GST (CGST+SGST)</td>
    <td align="right" style="padding:1px 3px;" id="gst_amount"></td>
  </tr>
  <tr class="withoutAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC2">2. Payment Terms: 100 % payment should be done at the time of confirmation</span></td>
    <td style="padding:1px 3px;" colspan="2">Amount (inclusive of GST)</td>
    <td align="right" style="padding:1px 3px;" id="amount_incl_gst"></td>
  </tr>
  <tr class="withoutAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC3">3. Validity: Prices are valid for 15 Days from the date of Proposal.</span></td>
    <td style="padding:1px 3px;" colspan="2" rowspan="2" width="178"><strong>Amount Payable  (Rounded off)</strong></td>
    <td rowspan="2" align="right" style="padding:1px 3px;"><strong id="grand_amount"></strong></td>
  </tr>
  <tr class="withoutAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC4">4. Prices may vary based on dollar Fluctuation.</span></td>
  </tr>
  <tr class="withoutAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC5">5. Any cancellation of Order after confirmation , re-stocking fee will be Charged.</span></td>
    <td style="padding:1px 3px;" colspan="3"><strong>For Laptop Support Center</strong></td>
  </tr>

  <!-- With Advance start-->

  <tr class="withAdvance">
     <td width="783" colspan="9" rowspan="2" style="padding:1px 3px;"><strong>Terms &amp; conditions:</strong></td>
     <td style="padding:1px 3px;" colspan="2">Amount before tax</td>
      <td align="right" style="padding:1px 3px;" id="amount_before_gstWA" ></td>
  </tr>
  <tr class="withAdvance">
      <td style="padding:1px 3px;" colspan="2">Total GST (CGST+SGST)</td>
      <td align="right" style="padding:1px 3px;" id="gst_amountWA"></td>
  </tr>
  <tr class="withAdvance">
      <td style="padding:1px 3px;"  colspan="9" width="783"><span id="lblTandC1">1. Delivery Terms : 2 - 4 Weeks from the date of confirmation.</span></td>
      <td style="padding:1px 3px;" colspan="2">Amount (inclusive of GST)</td>
    <td align="right" style="padding:1px 3px;" id="amount_incl_gstWA"></td>
  </tr>
  <tr class="withAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC2">2. Payment Terms: 100 % payment should be done at the time of confirmation</span></td>
    <td style="padding:1px 3px;" colspan="2" width="178"><strong>Amount(Rounded off)</strong></td>
    <td align="right" style="padding:1px 3px;"><strong id="grand_amountWA"></strong></td>
  </tr>
  <tr class="withAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC3">3. Validity: Prices are valid for 15 Days from the date of Proposal.</span></td>
     <td style="padding:1px 3px;" colspan="2"  width="178"><strong>Advance Paid on <span id="lblAdvancePaidDate"><?php  
      $originalDate = $quotation['approval_date'];
      $newDate = date("d/m/Y", strtotime($originalDate));
      echo $newDate;?>
        
      </span></strong></td> 
    <td  align="right" style="padding:1px 3px;"><strong> <span id="lblAdvanceAmount"><?php echo $quotation['advance_payment'] ?></span> </strong></td>
  </tr>
  <tr class="withAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC4">4. Prices may vary based on dollar Fluctuation.</span></td>
    <td style="padding:1px 3px;" colspan="2"  width="178">Balance</td>
     <td  align="right" style="padding:1px 3px;"><b><span id="lblBalance"><?php echo $quotation['due_payment'] ?></span></b> </td>
  </tr>
  <tr class="withAdvance">
    <td style="padding:1px 3px;" colspan="9" width="783"><span id="lblTandC5">5. Any cancellation of Order after confirmation , re-stocking fee will be Charged.</span></td>
    <td style="padding:1px 3px;" colspan="2"  width="178"><strong><strong>Paid on <span id="lblDuePaidDate">
      <?php  
      $originalDate = $invoice['invoice_date'];
      $newDate = date("d/m/Y", strtotime($originalDate));
      echo $newDate;?>

    </span></strong></strong></td>
      <td  align="right" style="padding:1px 3px;"><strong> <span id="lblDueAmt"><?php echo $quotation['due_payment'] ?></span> </strong></td>
  </tr>

  <!-- With advance ends-->


</table>


<table cellspacing="0" cellpadding="1"  style="font-family:Arial, sans-serif; border-collapse:collapse; margin-top:15px; font-size:12px;" border="0" width="100%">
  <col width="71" span="3">
  <col width="101" span="3">
  <col width="89" span="6">
  <tr>
    <td height="23" colspan="12" valign="top" ><strong>ANNEXURE A:</strong></td>
  </tr> 
     
            <tr>
              <td colspan="12" >Quotation valid for only one week.</td>
            </tr>
        
        
            <tr>
              <td colspan="12" >• Exclusions: Service Centre  is not obligated to provide warranty in defects resulting from:</td>
            </tr>
        
            <tr>
              <td colspan="12" >i.  Improper use by the Customer.</td>
            </tr>
        
            <tr>
              <td colspan="12" >ii.  Customer’s non compliance with Specifications.</td>
            </tr>
        
            <tr>
              <td colspan="12" >iii.  Improper or inadequate maintenance or calibration.</td>
            </tr>
        
            <tr>
              <td colspan="12" >iv.  Customer or third party media, software, interfacing, supplies, or other products.</td>
            </tr>
        
            <tr>
              <td colspan="12" >v.  Modifications not performed or authorized by Service Center.</td>
            </tr>
        
            <tr>
              <td colspan="12" >vi.  Virus infection, worm or similar malicious code not introduced by Service Center.</td>
            </tr>
        
            <tr>
              <td colspan="12" >vii.  Abuse, negligence, accident, loss or damage in transit, fire or water damage, electrical disturbances, transportation by Customer, or other causes beyond Service Center control.</td>
            </tr>      
  <tr> </tr>
  <tr>
    <td colspan="12" style="padding:0px 0"><strong>Regd. Office</strong>: "Laptop Support Centre", AKT Tower Biside V Mart Shopping MallRedma, North Redma, Daltonganj, Jharkhand 822101</td>
  </tr>
  <tr>
    <td colspan="12" style="padding:0px 0"><strong>Branch Office</strong>: "Laptop Support Centre",    Joyti Ceima road, Sahijana Rd, Garhwa, Jharkhand 822114</td>
  </tr>
  <tr>
    <td colspan="12"  style="padding:7px 0"><strong>Bank Details</strong>: <b>"Laptop Support Centre"</b>, <b>BANK NAME :</b> Bandhan Bank LTD., <b>A/C TYPE:</b> CURRENT, <b>A/C NO.:</b> 10180006455082, <b>BRANCH NAME:</b> DALTONGANJ, <b>IFSC CODE:</b> BDBL0001819</td>
  </tr>
    <tr>
        <td colspan="12" rowspan="1" style="padding:7px 0"><b>For payment via cheque/ NEFT in should be in favour of "Laptop Support Centre"</b></td>
    </tr>
  
</table>
							
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

    $(".withAdvance").hide();
   
    $("#quote_amount").text(addZeroes($("#quote_amount").text()));
    $("#gst_amount").text(addZeroes($("#gst_amount").text()));
    $("#grand_amount").text(addZeroes($("#grand_amount").text()));
     $("#amount_incl_gst").text(addZeroes($("#amount_incl_gst").text()));

     $("#quote_amountWA").text(addZeroes($("#quote_amountWA").text()));
    $("#gst_amountWA").text(addZeroes($("#gst_amountWA").text()));
    $("#grand_amountWA").text(addZeroes($("#grand_amountWA").text()));
     $("#amount_incl_gstWA").text(addZeroes($("#amount_incl_gstWA").text()));

     $("#lblBalance").text(addZeroes($("#lblBalance").text()));



     /*   total price calulation*/
    
     var totalGst=0;
     var amount_before_gst=0;
    <?php $totalGst=0; 
      foreach($item as $i){  ?>

          totalGst=totalGst+<?php echo $i['cgst_value']+$i['sgst_value'];?>;
           amount_before_gst=amount_before_gst+<?php echo $i['unit_price']*$i['qty'];?>;
      <?php 

       } ?>

       $("#gst_amount").text(totalGst.toFixed(2));

       $("#amount_before_gst").text(amount_before_gst.toFixed(2));
        $("#amount_before_gstWA").text(amount_before_gst.toFixed(2));
       

       var quote_amount=totalGst+amount_before_gst;

       $("#amount_incl_gst").text(quote_amount.toFixed(2));

       var grand_amount=$("#amount_incl_gst").text();
       $("#grand_amount").text((Math.round(grand_amount)).toFixed(2));



       /* *-------- check for advance amount starts------------------------ */

       var advance=<?php echo $quotation['advance_payment']; ?>

       if(advance!==""){
        $(".withAdvance").show();
        $(".withoutAdvance").hide();

        $("#gst_amountWA").text($("#gst_amount").text());
        $("#amount_incl_gstWA").text($("#amount_incl_gst").text());
        $("#grand_amountWA").text($("#grand_amount").text());
        

       }
       
       /* *-------- check for advance amount ends------------------------ */



       function getUrlVars() {
          var vars = {};
          var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
              vars[key] = value;
          });
          return vars;
      }
      var number = getUrlVars()["tax_invoice"];
    
      if(number=="11xSweQwoiyuTY"){

          $(".withAdvance").hide();
          $(".withoutAdvance").show();
      }
      else{
          $(".withAdvance").show();
          $(".withoutAdvance").hide();
      }

  });
</script>