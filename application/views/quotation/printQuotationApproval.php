<div class="row">
    <div class="col-md-12">
			<table cellspacing="0" cellpadding="1" style="font-family:Arial, sans-serif; border-collapse:collapse; font-size:12px;" border="0" width="100%">
        <tr>
      <td width="33%" align="left" valign="top" style="padding:2px 0px;"><p style="padding:0; margin:0; font-size:20px"><strong>
          <img width="141" height="58" src="<?php echo site_url('resources/img/logo.png');?>" /></strong></p></td>
         <td width="33%" align="center" valign="top" style="padding:2px 0px;"> <p style="font-size:16px"><strong>Advance Receipt Voucher</strong></p> </td>
        <td width="33%" align="right" valign="top" style="padding:2px 0px;"><p style="font-size:16px"><strong>Laptop Support Center<br> <span id="lblBranchAddress">AKT Tower Beside V Mart Shopping MallRedma, North Redma, Daltonganj, Jharkhand 822101</span><br> <strong>Mobile:</strong><span>+919304754330, +917488363967</span><span id="lblBranchCity"> </span>
            <br />  GST Number :- <span id="lblCompanyGSTNumber">20AAHFL6254A1ZW</span>
                                                                                                      </strong></p></td>
    </tr>
    </table>


    <table cellspacing="0" cellpadding="1" style="font-family:Arial, sans-serif; border-collapse:collapse; font-size:12px;" border="1" width="100%" id="tableId">
        <col width="71" span="3">
        <col width="101" span="3">
        <col width="89" span="6">
        <tr>
            <td width="20%" style="padding:1px 3px;" colspan="2"><strong>Customer</strong></td>
            <td width="30%" style="padding:1px 3px;"> <span id="lblCustomerName"><?php echo $quotation['customer_name'] ?></span></td>
               
            <td width="20%" style="padding:1px 3px;" colspan="2"><strong>Receipt No. </strong></td>
            <td width="30%" style="padding:1px 3px;" colspan="4"> <span id="lblReceiptNo">TR00000584</span></td>
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2" rowspan="4"><strong>Bill to  address</strong></td>
            <td rowspan="4" style="padding:1px 3px;"><?php echo $quotation['bill_address'] ?></td>
            <td style="padding:1px 3px;" colspan="2"><strong>Receipt Date</strong></td>
            <td style="padding:1px 3px;" colspan="4"><?php echo date('d/m/Y'); ?></td>
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>Quotation No. </strong></td>
            <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['quotation_no'] ?></td>
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>Receipt Amount (INR)</strong></td>
            <td style="padding:1px 3px;" colspan="4" id="received_amount"><?php echo $quotation['advance_payment'] ?></td>
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>Payment Mode</strong></td>
            <td style="padding:1px 3px;" colspan="4"><?php echo $quotation['payment_mode'] ?></td>
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>Email</strong></td>
            <td style="padding:1px 3px;"><?php echo $quotation['email'] ?></td>
            <td style="padding:1px 3px;" colspan="2" rowspan="2"><strong>Transaction Details</strong></td>
            <td style="padding:1px 3px;" colspan="4" rowspan="2"><?php echo $quotation['transaction_details'] ?></td>
        </tr>
       
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>Mobile number</strong></td>
            <td style="padding:1px 3px;"><span id="lblMobileNo">9279701860</span></td>
          
        </tr>
        <tr>
            <td style="padding:1px 3px;" colspan="2"><strong>GST number</strong></td>
            <td style="padding:1px 3px;"><?php echo $quotation['customer_gst'] ?></td>
            <td style="padding:1px 3px;" colspan="2"><strong>Amount (in word)</strong></td>
            <td style="padding:1px 3px;" colspan="4"><span id="priceWord"></span></td>
        </tr>
    </table>
							
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script >

function number2text(value) {
    var fraction = Math.round(frac(value)*100);
    var f_text  = "";

    if(fraction > 0) {
        f_text = "AND "+convert_number(fraction)+" PAISE";
    }

    return convert_number(value)+" RUPEES "+f_text+" ONLY";
}

function frac(f) {
    return f % 1;
}

function convert_number(number)
{
    if ((number < 0) || (number > 999999999)) 
    { 
        return "NUMBER OUT OF RANGE!";
    }
    var Gn = Math.floor(number / 10000000);  /* Crore */ 
    number -= Gn * 10000000; 
    var kn = Math.floor(number / 100000);     /* lakhs */ 
    number -= kn * 100000; 
    var Hn = Math.floor(number / 1000);      /* thousand */ 
    number -= Hn * 1000; 
    var Dn = Math.floor(number / 100);       /* Tens (deca) */ 
    number = number % 100;               /* Ones */ 
    var tn= Math.floor(number / 10); 
    var one=Math.floor(number % 10); 
    var res = ""; 

    if (Gn>0) 
    { 
        res += (convert_number(Gn) + " CRORE"); 
    } 
    if (kn>0) 
    { 
            res += (((res=="") ? "" : " ") + 
            convert_number(kn) + " LAKH"); 
    } 
    if (Hn>0) 
    { 
        res += (((res=="") ? "" : " ") +
            convert_number(Hn) + " THOUSAND"); 
    } 

    if (Dn) 
    { 
        res += (((res=="") ? "" : " ") + 
            convert_number(Dn) + " HUNDRED"); 
    } 


    var ones = Array("", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX","SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN", "TWELVE", "THIRTEEN","FOURTEEN", "FIFTEEN", "SIXTEEN", "SEVENTEEN", "EIGHTEEN","NINETEEN"); 
var tens = Array("", "", "TWENTY", "THIRTY", "FOURTY", "FIFTY", "SIXTY","SEVENTY", "EIGHTY", "NINETY"); 

    if (tn>0 || one>0) 
    { 
        if (!(res=="")) 
        { 
            res += " AND "; 
        } 
        if (tn < 2) 
        { 
            res += ones[tn * 10 + one]; 
        } 
        else 
        { 

            res += tens[tn];
            if (one>0) 
            { 
                res += ("-" + ones[one]); 
            } 
        } 
    }

    if (res=="")
    { 
        res = "zero"; 
    } 
    return res;
}

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
   
   amount=$("#received_amount").text();
   var priceWord=number2text(amount);

   $("#priceWord").text(priceWord);

   $("#received_amount").text(addZeroes(amount));
    
  });
</script>

