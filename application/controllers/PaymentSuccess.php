<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentSuccess extends CI_Controller {
	public function index() {
        // $data['title'] = 'Razorpay Success';
        // echo "<h4>Your transaction is successful</h4>";  
        // echo "<br/>";
        // // echo "Transaction ID: ". $this->session->userdata('razorpay_payment_id');
        // // echo "<br/>";
        // echo "Order ID: ". $this->session->userdata('razorpay_order_id');
		$this->load->view('PaymentSuccess');
	}
}
