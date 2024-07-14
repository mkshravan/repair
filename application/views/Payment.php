<button id="rzp-button1" style="display:none;">Pay with Razorpay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js"></script>
<form name='razorpayform' action="<?php echo base_url().'payment/verify';?>" method="POST">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
  <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
  // Checkout details as a json
  var options = <?php echo json_encode($data);?>;
  
  /**
   * The entire list of Checkout fields is available at
   * https://docs.razorpay.com/docs/checkout-form#checkout-fields
   */
  options.handler = function (response){
      document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
      document.getElementById('razorpay_signature').value = response.razorpay_signature;
      document.razorpayform.submit();
  };
  
  // Boolean whether to show image inside a white frame. (default: true)
  options.theme.image_padding = false;
  
  options.modal = {
      ondismiss: function() {
          window.location.href = "<?php echo base_url().'payment-failed';?>";
      },
      // Boolean indicating whether pressing escape key 
      // should close the checkout form. (default: true)
      escape: true,
      // Boolean indicating whether clicking translucent blank
      // space outside checkout form should close the form. (default: false)
      backdropclose: false
  };
  
  var rzp = new Razorpay(options);
  
  $(document).ready(function(){
  	$("#rzp-button1").click();
  	 rzp.open();
      //e.preventDefault();
  });
</script>