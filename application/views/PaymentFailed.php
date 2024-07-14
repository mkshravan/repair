<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
    <script src="<?php echo base_url();?>assets/js/jquery.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
    <title>Payment Failed</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <center>
                <img src="<?php echo base_url().'assets/img/payment-failed.png'?>">
                <h5 class="card-title text-center">Payment failed !</h5>
                <p>Your order ID : <?php echo $this->session->userdata('razorpay_order_id'); ?></p>
                <a href="<?php echo base_url('pre-built-pc-in-ranchi');?>" class="btn btn-primary">Next Registration</a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>