<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentFailed extends CI_Controller {
	public function index() {
		// $data['title'] = 'Payment Failed';  
        // echo "<h4>Your transaction got Failed</h4>";            
        // echo "<br/>";
        // echo "Transaction ID: ".$this->session->flashdata('razorpay_payment_id');
        // echo "<br/>";
        // echo "Order ID: ". $this->session->userdata('razorpay_order_id');
		$this->load->view('PaymentFailed');
	}
}
